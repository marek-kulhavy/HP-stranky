<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/img-slider.css">
    <link rel="stylesheet" href="../css/single-film.css">

    <link rel="stylesheet" href="../query/header-query.css">
    <link rel="stylesheet" href="../query/single-film-query.css">
    <link rel="shortcut icon" href="/HP-stranky/images/golden-snitch.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/b535256029.js" crossorigin="anonymous"></script>
    <title>Harry Potter a tajemná komnata</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-film-story">
            <div class="img-film">
                <img src="../images/films/hp-2-film.jpg" alt="">
                <h1>Harry Potter a tajemná komnata</h1>
            </div>
            <p>Harry Potter a Tajemná komnata je druhý film ze slavné fantasy série, který opět přivádí diváky do kouzelnického světa Bradavic. Film rozšiřuje magické univerzum o nové postavy, tajemná stvoření a temnější atmosféru, která naznačuje, že nebezpečí v kouzelnickém světě je větší, než se na první pohled zdá. Diváci se setkají s domácím skřítkem Dobbym, poznají nové kouzelné bytosti, jako jsou obří pavouci nebo bazilišek, a nahlédnou do minulosti některých klíčových postav. Vizuální efekty a propracované kulisy znovu přinášejí kouzlo Bradavic, zatímco hudba Johna Williamse dotváří tajemnou a napínavou atmosféru filmu.</p>
        </section>
        <section class="about-film">
            <h2>Zajímavosti o filmu</h2>
            <nav>
                <ul>
                    <li><h3>Pavouk Aragog</h3><p>Obří pavouk byl částečně vytvořen jako animatronická loutka ovládaná týmem techniků, což dodalo scénám realističnost.</p></li>
                    <li><h3>Měnící se hlas Rona Weasleyho</h3><p>Během natáčení začala Rupertu Grintovi mutovat hlas, což přidalo filmařům komplikace při postsynchronizaci některých scén.</p></li>
                    <li><h3>Scéna s pavouky byla děsivá i pro herce</h3><p>Rupert Grint (Ron) má fobii z pavouků, což dodalo scéně v Zapovězeném lese s Aragogem a jeho potomky ještě realističtější hrůzu.</p></li>
                    <li><h3>Profesor Lockhart měl být jiný herec</h3><p>Původně měl postavu Zlatoslava Lockharta hrát Hugh Grant, ale kvůli jiným závazkům roli nakonec dostal Kenneth Branagh.</p></li>
                </ul>
            </nav>
        </section>
        <div class="other-films">
            <h2>Další filmy</h2>
        </div>
        <div class="slider-wrapper">
        <button class="slider-nav-button slider-prev">&lt;</button>
        <div class="slider-container">
            <div id="imageSlider">
                <?php foreach($films as $slide): ?>
                    <a href="<?= htmlspecialchars($slide['url']) ?>" class="slide-link">
                        <div class="slide">
                            <img src="<?= $slide['img'] ?>" alt="<?= htmlspecialchars($slide['title']) ?>">
                            <?php if (!empty($slide['title'])): ?>
                            <div class="slide-title"><?= htmlspecialchars($slide['title']) ?></div>
                            <?php endif; ?>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        
        <button class="slider-nav-button slider-next">&gt;</button>
    </div>

    </main>

    <?php require "../assets/footer.php"; ?>
    <script src="../js/header.js"></script>
    <script src="../js/img-slider.js"></script>
</body>
</html>
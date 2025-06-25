<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/img-slider.css">
    <link rel="stylesheet" href="../css/single-game.css">

    <link rel="stylesheet" href="../query/header-query.css">
    <link rel="stylesheet" href="../query/single-game-query.css">
    <link rel="shortcut icon" href="/HP-stranky/images/golden-snitch.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/b535256029.js" crossorigin="anonymous"></script>
    <title>Harry Potter a vezeň z Azkabanu</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-game-story">
            <div class="img-game">
                <img src="../images/games/HP-3-game.jpg" alt="">
                <h1>Harry Potter a vezeň z Azkabanu</h1>
            </div>
            <p>Harry Potter a Vězeň z Azkabanu je akční adventura inspirovaná třetím dílem knižní série J. K. Rowlingové. Hra vyšla v roce 2004 na různé platformy, včetně PC, PlayStation 2, Xbox a GameCube. Oproti předchozím dílům přinesla výrazná vylepšení, například možnost hrát nejen za Harryho, ale také za Hermionu a Rona, přičemž každý z nich měl unikátní schopnosti. Hráči prozkoumávají Bradavice, učí se nová kouzla, čelí mozkomorům a odhalují tajemství spojená se Siriusem Blackem. Hra také obsahovala lepší grafiku, nové hádanky a dynamičtější souboje, což ji činí jednou z nejpovedenějších her v kouzelnické sérii.</p>
        </section>
        <section class="about-game">
            <h2>Zajímavosti o hře</h2>
            <nav>
                <ul>
                    <li><h3>Hratelnost s více postavami</h3><p>Poprvé v herní sérii mohli hráči přepínat mezi Harrym, Ronem a Hermionou, přičemž každý měl specifické dovednosti potřebné k řešení hádanek.</p></li>
                    <li><h3>Létání na hypogryfovi</h3><p>Ve verzích pro konzole bylo možné proletět se na Klofanovi po Bradavicích, což byla oblíbená herní mechanika.</p></li>
                    <li><h3>Nová kouzla</h3><p>Mezi nová kouzla patřila například Glacius (zmrazování vody a nepřátel) nebo Carpe Retractum (přitahování objektů).</p></li>
                </ul>
            </nav>
        </section>
        <div class="other-games">
            <h2>Další hry</h2>
        </div>
        <div class="slider-wrapper">
        <button class="slider-nav-button slider-prev">&lt;</button>
        <div class="slider-container">
            <div id="imageSlider">
                <?php foreach($hp_games_1 as $slide): ?>
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
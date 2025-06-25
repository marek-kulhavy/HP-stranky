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
    <title>Harry Potter a Relikvie smrti 2. část</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-film-story">
            <div class="img-film">
                <img src="../images/films/hp-8-film.jpg" alt="">
                <h1>Harry Potter a Relikvie smrti 2. část</h1>
            </div>
            <p>Harry Potter a Relikvie smrti 2. je velkolepým finále kouzelnické ságy, které přináší epické souboje, emocionální momenty a napínavé vyvrcholení celého příběhu. Film sleduje hrdiny při jejich poslední a nejdůležitější misi, během níž čelí nejtěžším výzvám a rozhodnutím. Bradavice se stávají dějištěm osudových událostí a osudy postav se definitivně uzavírají. Díky strhující akci, vizuálním efektům a silné atmosféře se tento díl stal nejen nejvýdělečnějším filmem série, ale i jedním z nejvýznamnějších fantasy filmů vůbec.</p>
        </section>
        <section class="about-film">
            <h2>Zajímavosti o filmu</h2>
            <nav>
                <ul>
                    <li><h3>Nejvýdělečnější film série</h3><p>Relikvie smrti - část 2 vydělala celosvětově více než 1,3 miliardy dolarů, čímž se stala nejen nejvýdělečnějším filmem ságy, ale i jedním z nejúspěšnějších filmů všech dob.</p></li>
                    <li><h3>Největší bitva v historii série</h3><p>Finální střet v Bradavicích byl natáčen přes 260 dní a zahrnoval tisíce vizuálních efektů, kaskadérů a statistů, což z něj dělá největší akční sekvenci v celé sérii.</p></li>
                    <li><h3>Poslední slova Alana Rickmana o Snapeovi</h3><p>Alan Rickman později prohlásil, že jeho postava měla „nejhlubší příběhový oblouk“ v celé sérii a že si byl jistý, že Snapeova poslední scéna bude jedním z nejsilnějších momentů celého filmu.</p></li>
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
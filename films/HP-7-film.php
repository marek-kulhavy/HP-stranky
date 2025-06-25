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
    <title>Harry Potter a Relikvie smrti 1. část</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-film-story">
            <div class="img-film">
                <img src="../images/films/hp-7-film.jpg" alt="">
                <h1>Harry Potter a Relikvie smrti 1. část</h1>
            </div>
            <p>Harry Potter a Relikvie smrti 1. část přináší zcela nový styl vyprávění a zaměřuje se na dobrodružnou cestu hlavních hrdinů mimo Bradavice. Hlavní hrdinové jsou nuceni opustit bezpečí školy a vydávají se na nebezpečnou cestu, během níž čelí novým výzvám a rostoucímu nebezpečí. Film se soustředí na jejich vzájemné vztahy, vnitřní konflikty a boj o přežití ve světě, který se rychle mění. Díky poutavým vizuálním efektům, silným emocionálním momentům a pečlivě budovanému napětí patří tento díl k nejintenzivnějším a nejdramatičtějším v celé sérii.</p>
        </section>
        <section class="about-film">
            <h2>Zajímavosti o filmu</h2>
            <nav>
                <ul>
                    <li><h3>Natáčení dvou filmů zároveň</h3><p>Relikvie smrti byla rozdělena na dvě části a obě se natáčely současně po dobu 260 dní, což z něj dělá nejdelší natáčení ze všech Potterovských filmů.</p></li>
                    <li><h3>Nová podoba domácího skřítka Dobbyho</h3><p>Vizuální efekty byly vylepšeny, aby měl Dobby realističtější texturu kůže a emotivnější mimiku ve srovnání s jeho vzhledem ve Chamber of Secrets (Tajemné komnatě).</p></li>
                    <li><h3>Animovaná sekvence Relikvií smrti</h3><p>Příběh o Třech bratřích byl vytvořen unikátním animovaným stylem inspirovaným stínovými loutkami. Tato scéna byla tak výjimečná, že fanoušci dlouho spekulovali, zda by se stejný styl dal použít pro adaptaci Bajek barda Beedleho.</p></li>
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
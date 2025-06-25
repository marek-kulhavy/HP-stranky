<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/img-slider.css">
    <link rel="stylesheet" href="../css/single-book.css">

    <link rel="stylesheet" href="../query/header-query.css">
    <link rel="stylesheet" href="../query/single-book-query.css">
    <link rel="shortcut icon" href="/HP-stranky/images/golden-snitch.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/b535256029.js" crossorigin="anonymous"></script>
    <title>Harry Potter a tajemná komnata</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-book-story">
            <div class="img-book">
                <img src="../images/books/hp2.jpg" alt="">
                <h1>Harry Potter a tajemná komnata</h1>
            </div>
            <p>Harry Potter se vrací do Bradavic na svůj druhý školní rok, ale brzy zjistí, že školu ohrožuje tajemná hrozba. Na zdech se objevují varovné vzkazy a někteří studenti jsou nalezeni zkamenělí. Legenda mluví o Tajemné komnatě, která byla kdysi otevřena a ukrývá v sobě velké nebezpečí. Harry, Ron a Hermiona se snaží rozluštit záhadu, odhalit, kdo za útoky stojí, a zjistit pravdu o tom, co se skrývá v hlubinách školy. Během pátrání narazí na starý deník, podivné zvuky v chodbách a stopy vedoucí k dávno zapomenutému tajemství, které by mohlo odhalit pravého viníka.</p>
        </section>
        <section class="about-book">
            <h2>Zajímavosti o knize</h2>
            <nav>
                <ul>
                    <li><h3>Délka knihy a filmu</h3><p>Ačkoli je Tajemná komnata druhou nejkratší knihou v sérii, její filmová adaptace je nejdelší ze všech osmi filmů. Naopak, nejdelší kniha, Fénixův řád, má jednu z nejkratších filmových adaptací.</p></li>
                    <li><h3>Téma čistoty krve</h3><p>ajemná komnata se hlouběji zabývá tématem "čistoty krve" v kouzelnickém světě, což odráží reálné problémy diskriminace a předsudků ve společnosti. Tento motiv se stává důležitým prvkem v celé sérii.<p></li>
                    <li><h3>Vývoj postavy Ginny Weasleyové</h3><p>V Tajemné komnatě dostává Ginny Weasleyová, nejmladší členka rodiny Weasleyových, výraznější prostor. Její postava se stává důležitou pro dějovou linii, což naznačuje její budoucí význam v celé sérii.</p></li>
                </ul>
            </nav>
        </section>
        <div class="other-books">
            <h2>Další knihy</h2>
        </div>
        <div class="slider-wrapper">
        <button class="slider-nav-button slider-prev">&lt;</button>
        <div class="slider-container">
            <div id="imageSlider">
                <?php foreach($main_books_slides as $slide): ?>
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
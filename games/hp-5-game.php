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
    <title>Harry Potter a fénixův řád</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-game-story">
            <div class="img-game">
                <img src="../images/games/HP-5-game.jpg" alt="">
                <h1>Harry Potter a fénixův řád</h1>
            </div>
            <p>Harry Potter a Fénixův řád je akční adventura inspirovaná pátým dílem knižní série J. K. Rowlingové. Hra vyšla v roce 2007 na různé platformy, včetně PC, PlayStation 2, PlayStation 3, Xbox 360, Wii a dalších. Oproti předchozím dílům nabídla rozsáhlé a volně prozkoumatelné Bradavice, které byly do té doby nejdetailnějším zpracováním kouzelnické školy ve videohrách. Hráči mohli plnit úkoly pro členy Brumbálovy armády, učit se nová kouzla pomocí pohybových gest a čelit Dolores Umbridgeové i smrtijedům. Díky propracovanému prostředí, interaktivním prvkům a volnosti pohybu je hra považována za jednu z nejlepších adaptací Harryho Pottera.</p>
        </section>
        <section class="about-game">
            <h2>Zajímavosti o hře</h2>
            <nav>
                <ul>
                    <li><h3>Největší herní Bradavice</h3><p>Tato hra nabídla dosud nejrozsáhlejší a nejvěrnější digitální verzi Bradavic, kterou mohli hráči volně prozkoumávat.</p></li>
                    <li><h3>Nový systém kouzlení</h3><p>Na konzolích jako Wii a PlayStation 3 bylo možné kouzlit pomocí pohybů ovladače, což dodalo hře interaktivnější zážitek.</p></li>
                    <li><h3>Možnost hrát za další postavy</h3><p>V některých částech hry bylo možné ovládat i jiné postavy, například Siriuse Blacka nebo Brumbála v boji proti Voldemortovi.</p></li>
                    <li><h3>Vyšší míra realističnosti</h3><p>Hra obsahovala reálné modely a hlasy některých filmových herců, což přispělo k autentičtější atmosféře.</p></li>
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
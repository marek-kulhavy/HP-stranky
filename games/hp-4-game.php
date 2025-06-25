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
    <title>Harry Potter a ohnivý pohár</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-game-story">
            <div class="img-game">
                <img src="../images/games/HP-4-game.jpg" alt="">
                <h1>Harry Potter a ohnivý pohár</h1>
            </div>
            <p>Harry Potter a Ohnivý pohár je akční adventura inspirovaná čtvrtým dílem knižní série J. K. Rowlingové. Hra vyšla v roce 2005 na různé platformy, včetně PC, PlayStation 2, Xbox, GameCube a dalších. Na rozdíl od předchozích dílů se zaměřila na kooperativní hratelnost, umožňující hráčům ovládat Harryho, Rona a Hermionu společně, a to buď v režimu pro jednoho hráče, nebo v multiplayeru. Hra obsahovala intenzivnější akční scény, například zkoušky Turnaje tří kouzelníků a souboj s Voldemortem. Oproti předchozím dílům však byla lineárnější a odstranila volné prozkoumávání Bradavic, což rozdělilo fanoušky na dva tábory.</p>
        </section>
        <section class="about-game">
            <h2>Zajímavosti o hře</h2>
            <nav>
                <ul>
                    <li><h3>Kooperativní režim</h3><p>Poprvé v herní sérii bylo možné hrát v multiplayeru, kde tři hráči mohli společně ovládat Harryho, Rona a Hermionu.</p></li>
                    <li><h3>Žádné volné prozkoumávání Bradavic</h3><p>Na rozdíl od předchozích her byl svět lineární a zaměřený na akční úrovně místo volného pohybu po škole.</p></li>
                    <li><h3>Nový systém kouzlení</h3><p>Místo tradičního učení kouzel měli hráči přednastavený soubor kouzel, který se aktivoval podle kontextu situace.</p></li>
                    <li><h3>Absence některých postav</h3><p>Ve hře chyběly některé oblíbené postavy z knihy a filmu, například Draco Malfoy se vůbec neobjevil.</p></li>
                    <li><h3>Smíšené přijetí fanoušky</h3><p>Kvůli změně hratelnosti a odstranění volného pohybu byla hra mezi hráči rozporuplně přijata, přesto si našla své příznivce díky akčnímu stylu a vizuální stránce.</p></li>
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
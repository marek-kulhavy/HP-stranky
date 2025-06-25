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
    <title>Harry Potter a relikvie smrti 1. část</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-game-story">
            <div class="img-game">
                <img src="../images/games/HP-7-game.jpg" alt="">
                <h1>Harry Potter a relikvie smrti 1. část</h1>
            </div>
            <p>Harry Potter a Relikvie smrti - 1. část je akční adventura vydaná v roce 2010, která byla dostupná na platformách PC, PlayStation 3, Xbox 360, Wii a Nintendo DS. Hra se výrazně lišila od předchozích dílů, protože místo tradičního kouzlení a prozkoumávání Bradavic se zaměřila na intenzivní souboje a útěk před smrtijedy. Hráči se ujímají role Harryho, Rona a Hermiony, kteří se vydávají na nebezpečnou cestu za nalezením a zničením viteálů, které drží části Voldemortovy duše. Hra obsahuje dynamické souboje z pohledu třetí osoby, kdy hráči využívají různé kouzla v boji proti nepřátelům, skrývání a strategické pohyby, aby přežili. Tato temná a akční hra odráží atmosféru posledního boje proti temným silám, přičemž se soustředí na přežití a strategii, místo na tradiční řešení hádanek.</p>
        </section>
        <section class="about-game">
            <h2>Zajímavosti o hře</h2>
            <nav>
                <ul>
                    <li><h3>Nový herní pohled</h3><p>Hra je z pohledu třetí osoby, což znamená, že hráči mohou lépe sledovat dění kolem sebe, zatímco se skrývají a bojují proti smrtijedům.</p></li>
                    <li><h3>Změna ve stylu hry</h3><p>Hra se více zaměřila na stealth a strategii, hráči museli často hledat úkryty, využívat prostředí pro skrývání a plánovat útoky na nepřátele.</p></li>
                    <li><h3>Omezený pohyb ve světě</h3><p>Hra neumožňovala otevřené prozkoumávání světa jako v předchozích dílech, místo toho byla strukturována více lineárně s cílem soustředit se na příběh a souboje.</p></li>
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
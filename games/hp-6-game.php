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
    <title>Harry Potter a princ dvojí krve</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-game-story">
            <div class="img-game">
                <img src="../images/games/HP-6-game.jpg" alt="">
                <h1>Harry Potter a princ dvojí krve</h1>
            </div>
            <p>Harry Potter a Princ dvojí krve je akční adventura vycházející z šestého dílu knihy J. K. Rowlingové, která byla vydaná v roce 2009. Hra byla k dispozici na různých platformách, včetně PC, PlayStation 2, PlayStation 3, Xbox 360, Wii a Nintendo DS. Umožňuje hráčům prozkoumávat Bradavice a jejich okolí, kde plní různé úkoly spojené s příběhem, jako je sbírání ingrediencí na lektvary nebo pátrání po vzpomínkách, které odhalují tajemství Voldemorta. V hře se poprvé objevil systém lektvarů, kde Harry mohl vařit různé kouzelné lektvary a využívat je k plnění úkolů. Kromě toho se hráči účastní kouzelnických soubojů, kde využívají nejen běžná kouzla, ale i silnější kouzla spojená s Princem dvojí krve. Tato hra se zaměřuje na temnější atmosféru, zintenzivněné boje a příběhové momenty, které vedou k finálnímu střetu s Voldemortem a připravují hráče na poslední díl série.</p>
        </section>
        <section class="about-game">
            <h2>Zajímavosti o hře</h2>
            <nav>
                <ul>
                    <li><h3>Systém lektvarů</h3><p>Poprvé v sérii se ve hře objevil interaktivní systém vaření lektvarů, kde hráči museli správně kombinovat ingredience podle instrukcí, aby vytvořili kouzelné nápoje.</p></li>
                    <li><h3>Kooperativní režim na konzolích</h3><p>Na platformách jako PlayStation 3 a Xbox 360 byla možnost hrát v kooperativním režimu, kde jeden hráč ovládal Harryho a druhý jeho přátele, například Rona nebo Hermionu.</p></li>
                    <li><h3>Změna prostředí</h3><p>Hra nabízela různé lokace, nejen Bradavice, ale také exteriéry jako Riddle Manor nebo lesy kolem sídla Malfoyových, které byly temnější a atmosféru příběhu dokonale doplňovaly.</p></li>
                    <li><h3>Podíly na filmovém zpracování</h3><p>Hra měla blíže k filmové adaptaci než k původní knize, a to díky spolupráci s filmovými tvůrci, kteří poskytli modely postav a některé animace.</p></li>
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
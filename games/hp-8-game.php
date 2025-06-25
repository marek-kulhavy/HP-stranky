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
    <title>Harry Potter a relikvie smrti 2. část</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-game-story">
            <div class="img-game">
                <img src="../images/games/HP-8-game.jpg" alt="">
                <h1>Harry Potter a relikvie smrti 2. část</h1>
            </div>
            <p>Harry Potter a Relikvie smrti 2. část je akční adventura vydaná v roce 2011, která byla dostupná na platformách PC, PlayStation 3, Xbox 360, Wii a Nintendo DS. Tato hra je pokračováním prvního dílu a zaměřuje se na závěrečný souboj mezi Harrym a Voldemortem. Hráči se opět ujímají role Harryho, Rona a Hermiony, kteří pokračují ve svém boji proti smrtijedům, tentokrát v samotné bitvě o Bradavice. Hra se více soustředí na intenzivní akci a masivní souboje, které vedou k rozhodujícímu střetu s Voldemortem. Hráči mohou využívat širokou škálu kouzel, včetně ofenzivních i defenzivních kouzel, a také se účastnit epických bitev na různých místech, jako jsou Bradavice nebo Ministerstvo kouzel. Temná atmosféra, rychlé souboje a dynamická kampaň činí tuto hru skvělým zakončením herní série Harryho Pottera.</p>
        </section>
        <section class="about-game">
            <h2>Zajímavosti o hře</h2>
            <nav>
                <ul>
                    <li><h3>Různá místa z finálního souboje</h3><p>Kromě Bradavic, hráči navštíví také další známá místa jako Ministerstvo kouzel nebo Gringottovu banku, které jsou klíčové pro finální bitvy.</p></li>
                    <li><h3>Zvýšená realističnost</h3><p>Grafika a animace byly vylepšeny, což zajišťovalo lepší realistické zobrazení bitvy a kouzelnických soubojů, čímž se hra stala vizuálně atraktivní.</p></li>
                    <li><h3>Příběhové sekvence a cutscény</h3><p>Stejně jako ve filmech, hra obsahuje klíčové příběhové sekvence a animované cutscény, které napomáhají rozvinout příběh a přidávají epické momenty.</p></li>
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
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
    <title>Quidditch champion's</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-game-story">
            <div class="img-game">
                <img src="../images/games/quidditch-champions.jpg" alt="">
                <h1>Harry Potter - Quidditch champion's</h1>
            </div>
            <p>Harry Potter: Quidditch Champions je hra zaměřená na populární kouzelnický sport, Quidditch, který je známý z knih a filmů o Harrym Potterovi. Tato hra, která byla oznámena v roce 2023, se soustředí na týmový sport, ve kterém hráči ovládají tým čarodějů a čarodějek a soutěží v zápasech Quidditche proti ostatním týmům z kouzelnického světa. Hráči si mohou vybrat svůj oblíbený tým a zúčastnit se intenzivních zápasů na různých stadionech, přičemž každý tým má své vlastní specifické schopnosti a kouzla. Hra se zaměřuje na rychlou akci, strategii a koordinaci mezi hráči, přičemž umožňuje i hraní s přáteli v multiplayerovém režimu. V Quidditch Champions jde nejen o samotné chytání Zlatonky, ale také o týmovou spolupráci, taktiku a dovednosti jednotlivých hráčů při ovládání košťat a používání magických schopností během zápasu.</p>
        </section>
        <section class="about-game">
            <h2>Zajímavosti o hře</h2>
            <nav>
                <ul>
                    <li><h3>Vlastní přizpůsobení týmu</h3><p>Kromě výběru týmu mohou hráči upravit vzhled a dovednosti svých postav, aby odpovídaly jejich hernímu stylu, což přidává na zábavě a personalizaci.</p></li>
                    <li><h3>Magické dovednosti během zápasů</h3><p>Během zápasů mohou hráči využívat magii nejen k provádění kouzel na soupeře, ale i k vylepšení své vlastní výkonnosti nebo k použití unikátních triků a strategií.</p></li>
                    <li><h3>Pokročilá fyzika a košťat</h3><p>Hra přináší pokročilý systém fyziky, který simuluje pohyb košťat a pohyb míče (Zlatonka) v reálném čase, což zvyšuje realismus a napětí během zápasů.</p></li>
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
                <?php foreach($hp_games_2 as $slide): ?>
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
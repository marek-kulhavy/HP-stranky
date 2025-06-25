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
    <title>Harry Potter a tajemná komnata</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-game-story">
            <div class="img-game">
                <img src="../images/games/HP-2-game.jpg" alt="">
                <h1>Harry Potter a tajemná komnata</h1>
            </div>
            <p>Harry Potter a Tajemná komnata je akční adventura inspirovaná druhým dílem slavné knižní série J. K. Rowlingové. Hra vyšla v roce 2002 na různé platformy, včetně PC, PlayStation 2, GameCube a Game Boy. Oproti svému předchůdci přinesla vylepšenou grafiku, plynulejší hratelnost a rozšířené možnosti průzkumu Bradavic. Hráči se znovu ujímají role Harryho Pottera, učí se nová kouzla, bojují s nepřáteli a odhalují tajemství Tajemné komnaty. Hra obsahuje více vedlejších úkolů, magických výzev a ikonických momentů z příběhu, což z ní dělá jednu z nejoblíbenějších her v kouzelnickém světě.</p>
        </section>
        <section class="about-game">
            <h2>Zajímavosti o hře</h2>
            <nav>
                <ul>
                    <li><h3>Rozdílné verze hry </h3><p>Každá platforma měla svou vlastní verzi hry s odlišnou grafikou, hratelností i úrovněmi. Například PC verze byla více zaměřená na adventuru, zatímco PlayStation 2 a GameCube nabízely otevřenější prostředí.</p></li>
                    <li><h3>Větší a detailnější Bradavice</h3><p>Oproti první hře bylo prostředí Bradavic rozsáhlejší, hráči mohli volněji prozkoumávat školu, zahrady i okolí.</p></li>
                    <li><h3>Možnost volného létání</h3><p>Ve verzích pro některé konzole mohl Harry volně létat na koštěti po Bradavicích, což bylo revoluční v porovnání s předchozím dílem.</p></li>
                    <li><h3>Herní duely</h3><p>Poprvé se ve hře objevily kouzelnické souboje, kde hráči mohli čelit ostatním studentům v Klubu duelantů.</p></li>
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
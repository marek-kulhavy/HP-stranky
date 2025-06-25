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
    <title>Harry Potter a kámen mudrců</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-game-story">
            <div class="img-game">
                <img src="../images/games/HP-1-game.jpg" alt="">
                <h1>Harry Potter a kámen mudrců</h1>
            </div>
            <p>Harry Potter a Kámen mudrců je akční adventura založená na první knize J. K. Rowlingové. Hra vyšla v roce 2001 na různé platformy, včetně PC, PlayStation a Game Boy. Hráči se ujímají role mladého Harryho Pottera, prozkoumávají Bradavice, učí se kouzla, sbírají předměty a plní úkoly, které je postupně přibližují k odhalení tajemství Kamene mudrců. Hra kombinuje prvky plošinovky, hádanek i soubojů s nepřáteli, což přispívá k magické atmosféře a věrnému zpracování kouzelnického světa. I přes jednodušší grafiku a ovládání je dodnes nostalgickou klasikou pro fanoušky Harryho Pottera.</p>
        </section>
        <section class="about-game">
            <h2>Zajímavosti o hře</h2>
            <nav>
                <ul>
                    <li><h3>Různé verze hry </h3><p>Hra vyšla na několik platforem, přičemž verze pro PC, PlayStation a Game Boy se od sebe výrazně lišily v grafice, hratelnosti i příběhovém zpracování.</p></li>
                    <li><h3>Skrytá místnost</h3><p>V PC verzi se nachází tajná místnost s obrázkem vývojářského týmu jako velikonoční vajíčko (Easter egg).</p></li>
                    <li><h3>Hudba inspirovaná filmem</h3><p>Přestože hra vyšla ve stejném roce jako film, soundtrack se od filmového lišil a měl své vlastní kouzelné melodie.</p></li>
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
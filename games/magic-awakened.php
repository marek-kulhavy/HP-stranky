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
    <title>Magic awakened</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-game-story">
            <div class="img-game-mobile">
                <img src="../images/games/magic-awakened.jpg" alt="">
                <div class="game-header">
                    <h1>Harry Potter - Magic awakened</h1>
                </div>
            </div>
            <p>Harry Potter: Magic Awakened je mobilní karetní hra, která přenáší hráče do kouzelného světa Harryho Pottera. V této hře se hráči ujímají role studentů na Bradavické škole čar a kouzel, kde se učí magii, vytvářejí kouzelnické balíčky a bojují proti temným silám. Hra kombinuje strategii sbírání karet s prvky RPG, kdy hráči trénují své postavy, účastní se kouzelnických soubojů a odhalují tajemství z kouzelnického světa. Ve hře se objevují známí kouzelníci a postavy z knižní série, jako jsou Harry, Hermiona nebo Ron, a prostředí věrně odráží atmosféru knih a filmů. Harry Potter: Magic Awakened je tak skvělou volbou pro fanoušky magie, karetních her a světa Harryho Pottera.</p>
        </section>
        <section class="about-game">
            <h2>Zajímavosti o hře</h2>
            <nav>
                <ul>
                    <li><h3>Karetní a RPG mix</h3><p>Hra kombinuje strategické souboje pomocí karetního systému a RPG prvky, kdy si hráči mohou vylepšovat své postavy a kouzla.</p></li>
                    <li><h3>Vlastní student Bradavic</h3><p>Hráči si vytvářejí vlastní postavu, která se stává studentem Bradavic, což znamená, že si mohou vybrat nejen vzhled, ale i kolej, do které budou patřit.</p></li>
                    <li><h3>Souboje proti ostatním hráčům</h3><p>Hráči mohou vyzvat ostatní v multiplayerových soubojích, což přináší dynamiku a možnost soutěžit s ostatními kouzelníky.</p></li>
                    <li><h3>Výrazný vizuální styl</h3><p>Grafika hry je inspirována jak filmovými adaptacemi, tak originálním kouzelnickým světem, což vytváří krásně detailní a magickou atmosféru.</p></li>
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
                <?php foreach($hp_games_3 as $slide): ?>
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
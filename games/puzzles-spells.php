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
    <title>puzzles & spells</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-game-story">
            <div class="img-game-mobile">
                <img src="../images/games/puzzles-spells.jpg" alt="">
                <div class="game-header">
                    <h1>Harry Potter - puzzles & spells</h1>
                </div>
            </div>
            <p>Harry Potter: Puzzles & Spells je mobilní hra, která kombinuje klasické herní prvky match-3 (tři a více stejné ikony) s kouzelnickým světem Harryho Pottera. Hráči se vydávají na kouzelnou cestu, kde řeší logické hádanky a zapojují se do kouzelnických dobrodružství. Během hraní si mohou otevřít různé lokace známé z knih a filmů, jako je Bradavice, Příčná ulice nebo Prasinky. K tomu se setkávají s oblíbenými postavami jako Harry, Hermiona a Ron, kteří je budou provázet při řešení hádanek a sbírání kouzelnických předmětů. Kromě toho si hráči mohou odemykat nová kouzla, která jim pomáhají v těžších úrovních. Harry Potter - Puzzles & Spells je skvělou volbou pro fanoušky logických her, kteří si chtějí užít kouzelný svět Harryho Pottera ve formě zábavných výzev.</p>
        </section>
        <section class="about-game">
            <h2>Zajímavosti o hře</h2>
            <nav>
                <ul>
                    <li><h3>Odemykání kouzel</h3><p>Na každé úrovni mohou hráči odemykat nové kouzla, která mají speciální efekty a mohou být použita k vyřešení složitějších úkolů.</p></li>
                    <li><h3>Soutěže a eventy</h3><p>Hráči mohou soutěžit s ostatními v různých eventech a výzvách, čímž mohou získat bonusy a další kouzelné odměny.</p></li>
                    <li><h3>Známé postavy</h3><p>Hráči se setkávají s populárními postavami jako Harry, Hermiona, Ron, Dumbledore nebo Hagrid, kteří je podporují při plnění úkolů a výzev.</p></li>
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
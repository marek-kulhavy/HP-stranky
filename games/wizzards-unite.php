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
    <title>Wizzards Unite</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-game-story">
            <div class="img-game-mobile">
                <img src="../images/games/wizzards-unite.jpg" alt="">
                <div class="game-header">
                    <h1>Harry Potter - Wizzards Unite</h1>
                </div>
            </div>
            <p>Harry Potter: Wizards Unite byla mobilní hra, která spojuje prvky rozšířené reality (AR) s kouzelnickým světem Harryho Pottera. Hráči se stali členy Organizace pro zachování kouzelnického světa, jejich úkolem bylo řešit záhady a sbírat „fragmenty“ z kouzelnických bytostí, předmětů a kouzel, které se objevily ve skutečném světě. Hra využívala technologii AR k tomu, aby přivedla kouzelnický svět do reálného prostředí, hráči museli prozkoumávat svou skutečnou lokalitu, aby našli kouzelnické artefakty a interagovali s nimi. Kromě sbírání fragmentů se účastnili i různých úkolů a bojů proti temným silám, čímž získávali zkušenosti a vylepšovali své schopnosti. Harry Potter: Wizards Unite byla oblíbená mezi fanoušky rozšířené reality a Harryho Pottera, protože umožňovala prozkoumávat kouzelný svět na vlastní kůži, ale byla ukončena v roce 2022.</p>
        </section>
        <section class="about-game">
            <h2>Zajímavosti o hře</h2>
            <nav>
                <ul>
                    <li><h3>Rozšířená realita (AR)</h3><p>Hra využívala technologii AR, která umožnila hráčům prozkoumávat skutečný svět a interagovat s kouzelnickými objekty, tvory a postavami, které byly zobrazeny v jejich reálném okolí.</p></li>
                    <li><h3>Magická mapa</h3><p>Pomocí mapy, která zobrazovala reálný svět, hráči hledali kouzelnické objekty a byli upozorněni na speciální události v okolí, které nabízely bonusy a odměny.</p></li>
                    <li><h3>Spolupráce s dalšími hráči</h3><p>Hra podporovala silnou komunitu, kde hráči spolupracovali při odhalování tajemství, účasti na eventech a plnění náročných úkolů.</p></li>
                    <li><h3>Týmové souboje</h3><p>Hráči se mohli spojit do týmů a bojovat proti nebezpečným kouzelnickým silám ve speciálních bitvách, které byly zaměřeny na spolupráci mezi hráči.</p></li>
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
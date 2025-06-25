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
    <title>Hogwarts mystery</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-game-story">
            <div class="img-game-mobile">
                <img src="../images/games/hogwarts-mystery.jpg" alt="">
                <div class="game-header">
                    <h1>Harry Potter - Hogwarts mystery</h1>
                </div>
            </div>
            <p>Harry Potter - Hogwarts Mystery je mobilní RPG hra, která umožňuje hráčům prožít vlastní kouzelnické dobrodružství na Bradavické škole čar a kouzel. Hráči se ujímají role vlastního studenta, který se právě začíná učit magii a prochází prvními ročníky školy. Během hry mohou hráči vybírat svou kolej, učit se nová kouzla, plnit úkoly a účastnit se různých školních aktivit, jako jsou famfrpálové zápasy nebo kouzelnické zkoušky. Hra se zaměřuje na interakci s ostatními studenty, včetně známých postav jako je Harry, Hermiona a Ron, a na rozplétání tajemství týkajícího se zmizelého bratrance hlavního hrdiny. Harry Potter: Hogwarts Mystery nabízí hráčům možnost zažít kouzelný svět ve formě příběhové hry, kde jejich rozhodnutí ovlivňují vývoj příběhu a vztahy s ostatními postavami.</p>
        </section>
        <section class="about-game">
            <h2>Zajímavosti o hře</h2>
            <nav>
                <ul>
                    <li><h3>Vlastní postava</h3><p>Hráči si vytvářejí vlastní postavu, kterou mohou přizpůsobit včetně výběru vzhledu, pohlaví a koleje, do které budou zařazeni (Griffindor, Slytherin, Hufflepuff nebo Ravenclaw).</p></li>
                    <li><h3>Dopady rozhodnutí</h3><p>Rozhodnutí, která hráči učiní během příběhu, ovlivňují vývoj událostí a vztahy s ostatními postavami, což zajišťuje dynamický herní zážitek.</p></li>
                    <li><h3>Spolupráce a soutěže</h3><p>Hráči mohou komunikovat a soutěžit s ostatními studenty, což umožňuje vytváření týmů a účast na různých výzvách.</p></li>
                    <li><h3>Procházení Bradavic</h3><p>Hra nabízí detailní zobrazení Bradavic, včetně míst jako Velká síň, Knižní věž, Zap forbidden forest nebo Zapovězené chodby, které hráči mohou prozkoumávat.</p></li>
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
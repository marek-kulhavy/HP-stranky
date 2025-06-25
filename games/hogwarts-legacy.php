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
    <title>Hogwarts Legacy</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-game-story">
            <div class="img-game">
                <img src="../images/games/hogwarts-legacy.jpg" alt="">
                <h1>Hogwarts legacy</h1>
            </div>
            <p>Hogwarts Legacy je akční role-playing hra, která byla vydaná v roce 2023. Hráči se v ní ocitají v kouzelnickém světě Harryho Pottera, ale místo známých postav z knihy, hráči ovládají nového hrdinu, studenta na škole čar a kouzel v Bradavicích, který se narodí s neobvyklým talentem pro magii. Hra se odehrává ve 20. letech 19. století, tedy dlouho před událostmi popsanými v knihách. Hráči mají možnost prozkoumávat obrovský otevřený svět, který zahrnuje nejen Bradavice, ale i okolní oblasti jako Zapovězený les, vesnici Hogsmeade a další místa. V průběhu hry se hráč stává součástí různých příběhových linií, kde se rozhoduje o osudu kouzelnického světa, čelí nebezpečným magickým bytostem a rozvíjí své kouzelnické schopnosti. Hra se zaměřuje na akci, boj, řešení hádanek a rozvoj postavy, což z ní činí jeden z největších herních zážitků v kouzelnickém univerzu.</p>
        </section>
        <section class="about-game">
            <h2>Zajímavosti o hře</h2>
            <nav>
                <ul>
                    <li><h3>Možnost volby kouzelnického zaměření</h3><p>Hráči si mohou vybrat, jakým směrem se jejich postava bude rozvíjet. Mohou se zaměřit na studium různých magických oblastí, jako je lektvarování, kouzlení, nebo se věnovat temným uměním.</p></li>
                    <li><h3>Kouzelnická zvířata</h3><p>Ve hře je možné potkat a chovat kouzelnická zvířata, například Hippogrify nebo Krvavé Luny. Některá zvířata lze použít v boji, nebo se o ně starat jako o domácí mazlíčky.</p></li>
                    <li><h3>Systém morálních rozhodnutí</h3><p>Během hry budou hráči čelit rozhodnutím, která ovlivní nejen příběh, ale i morální směr jejich postavy. Mohou se rozhodnout, zda se budou chovat v souladu s dobrem, nebo se vydají temnější cestou.</p></li>
                    <li><h3>Přizpůsobení postavy</h3><p>Hráči mají možnost přizpůsobit vzhled své postavy, včetně výběru pohlaví, účesu a oblečení. Navíc si mohou zvolit i vlastní historii postavy, což ovlivňuje její schopnosti a rozhodování během příběhu.</p></li>
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
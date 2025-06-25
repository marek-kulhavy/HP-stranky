<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/img-slider.css">
    <link rel="stylesheet" href="../css/single-film.css">

    <link rel="stylesheet" href="../query/header-query.css">
    <link rel="stylesheet" href="../query/single-film-query.css">
    <link rel="shortcut icon" href="/HP-stranky/images/golden-snitch.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/b535256029.js" crossorigin="anonymous"></script>
    <title>Harry Potter a fénixův řád</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-film-story">
            <div class="img-film">
                <img src="../images/films/hp-5-film.jpg" alt="">
                <h1>Harry Potter a fénixův řád</h1>
            </div>
            <p>Harry Potter a Fénixův řád je pátým filmem kouzelnické série, který přináší temnější a vážnější tón než jeho předchůdci. Harry se musí vypořádat nejen s nedůvěrou okolí, ale i s novými výzvami v Bradavicích, kde dochází ke změnám ve vedení školy. Zároveň se učí bránit proti temným silám a buduje hlubší pouta se svými přáteli. Film představuje nové postavy, například přísnou profesorku Umbridgeovou, a rozvíjí konflikty mezi světem kouzelníků a ministerstvem kouzel. Díky akčním scénám, silným emocím a propracovaným vizuálním efektům patří tento díl k nejintenzivnějším v celé sérii.</p>
        </section>
        <section class="about-film">
            <h2>Zajímavosti o filmu</h2>
            <nav>
                <ul>
                    <li><h3>Nejdelší kniha, nejkratší film</h3><p>Harry Potter a Fénixův řád je nejdelší knihou ze série, ale filmová adaptace má pouze 138 minut, což z něj dělá druhý nejkratší film celé ságy.</p></li>
                    <li><h3>Nový režisér</h3><p>Tento díl režíroval David Yates, který zůstal u série až do jejího konce a výrazně ovlivnil její temnější a politicky laděný tón.</p></li>
                    <li><h3>Umbridgeová a růžová mánie</h3><p>Kostýmní návrháři postupně měnili odstíny růžové na oblečení profesorky Umbridgeové. Čím větší měla moc, tím tmavší a agresivnější byl její růžový kostým.</p></li>
                    <li><h3>Skutečné slzy</h3><p>Daniel Radcliffe uvedl, že natáčení emocionálních scén s Garym Oldmanem (Sirius Black) pro něj bylo tak silné, že se mu podařilo vyvolat skutečné slzy, aniž by musel použít umělé prostředky.</p></li>
                </ul>
            </nav>
        </section>
        <div class="other-films">
            <h2>Další filmy</h2>
        </div>
        <div class="slider-wrapper">
        <button class="slider-nav-button slider-prev">&lt;</button>
        <div class="slider-container">
            <div id="imageSlider">
                <?php foreach($films as $slide): ?>
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
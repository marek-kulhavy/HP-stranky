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
    <title>Harry Potter a kámen mudrců</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-film-story">
            <div class="img-film">
                <img src="../images/films/hp-1-film.jpg" alt="">
                <h1>Harry Potter a kámen mudrců</h1>
            </div>
            <p>Harry Potter a Kámen mudrců je první film ze slavné fantasy série inspirované knihami J. K. Rowlingové. Film měl premiéru v roce 2001 a režíroval ho Chris Columbus. Příběh sleduje jedenáctiletého Harryho Pottera, chlapce, který vyrůstá u své tety a strýce, aniž by tušil, že je součástí magického světa. Vše se změní, když obdrží dopis z Bradavic - školy čar a kouzel, kde začíná novou kapitolu svého života. Seznamuje se s novými přáteli, učiteli a objevuje fascinující tajemství kouzelnického světa. Film přináší jedinečnou kombinaci dobrodružství, humoru a tajemna a skvěle zachycuje kouzelnou atmosféru knihy. Herecké výkony, zejména Daniela Radcliffa jako Harryho, Ruperta Grinta jako Rona a Emmy Watson jako Hermiony, přispěly k obrovské popularitě filmu, který se stal milníkem v moderní kinematografii.</p>
        </section>
        <section class="about-film">
            <h2>Zajímavosti o filmu</h2>
            <nav>
                <ul>
                    <li><h3>Rekordy hned po premiéře</h3><p>Film se stal nejvýdělečnějším snímkem roku 2001 a dlouho držel rekord mezi fantasy filmy.</p></li>
                    <li><h3>J. K. Rowling měla slovo</h3><p>Autorka osobně dohlížela na detaily filmu a trvala na tom, aby herecké obsazení tvořili pouze Britové.</p></li>
                    <li><h3>Filmový Brumbál měl být jiný</h3><p>Původně měl roli Albuse Brumbála hrát Richard Harris nerad, ale souhlasil, protože ho přesvědčila jeho vnučka.</p></li>
                    <li><h3>Bradavice na více místech</h3><p>Interiéry Bradavic se natáčely v různých skutečných lokacích, včetně katedrály v Gloucesteru a Christ Church College v Oxfordu.</p></li>
                    <li><h3>Daniel Radcliffe málem roli nehrál</h3><p>Jeho rodiče se původně zdráhali nechat ho podepsat smlouvu kvůli dlouhému natáčení.</p></li>
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
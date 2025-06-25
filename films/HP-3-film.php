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
    <title>Harry Potter a vezeň z Azkabanu</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-film-story">
            <div class="img-film">
                <img src="../images/films/hp-3-film.jpg" alt="">
                <h1>Harry Potter a vezeň z Azkabanu</h1>
            </div>
            <p>Harry Potter a vězeň z Azkabanu je třetí film ze slavné kouzelnické série, který se vyznačuje temnější atmosférou a vizuálně poutavějším zpracováním. Režisér Alfonso Cuarón přinesl svěží a dospělejší styl, který se odrazil nejen v kameře a barevné paletě, ale i v hlubším vykreslení postav a jejich emocí. Film se zaměřuje na vývoj hlavních hrdinů, zejména Harryho, který se musí vyrovnat s novými odhaleními o své minulosti. Kromě známých tváří se zde objevují nové postavy jako profesor Lupin nebo tajemný Sirius Black, kteří zásadně ovlivňují dění v Bradavicích. Výraznou roli hraje i hudba Johna Williamse, jejíž motivy dodávají filmu jedinečnou atmosféru.</p>
        </section>
        <section class="about-film">
            <h2>Zajímavosti o filmu</h2>
            <nav>
                <ul>
                    <li><h3>Změna režiséra</h3><p>Film režíroval Alfonso Cuarón, který nahradil Chrise Columbuse. Cuarón přinesl temnější a vizuálně propracovanější styl.</p></li>
                    <li><h3>Nový design Bradavic</h3><p>Hrad a jeho okolí prošly vizuálními změnami, například přidáním mostu, který v předchozích filmech neexistoval.</p></li>
                    <li><h3>Interakce herců</h3><p>Aby Daniel Radcliffe (Harry), Emma Watson (Hermiona) a Rupert Grint (Ron) lépe pochopili své postavy, požádal je Cuarón, aby každý napsal esej o své postavě. Emma napsala několik stránek, Daniel jednu a Rupert žádnou, což přesně odpovídalo jejich rolím.</p></li>
                    <li><h3>Michael Gambon jako Brumbál</h3><p>Po smrti Richarda Harrise roli ředitele Brumbála převzal Michael Gambon, který jí dal energičtější a neformálnější styl.</p></li>
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
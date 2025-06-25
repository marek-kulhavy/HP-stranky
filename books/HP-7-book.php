<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/img-slider.css">
    <link rel="stylesheet" href="../css/single-book.css">

    <link rel="stylesheet" href="../query/header-query.css">
    <link rel="stylesheet" href="../query/single-book-query.css">
    <link rel="shortcut icon" href="/HP-stranky/images/golden-snitch.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/b535256029.js" crossorigin="anonymous"></script>
    <title>Harry Potter a Relikvie smrti</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-book-story">
            <div class="img-book">
                <img src="../images/books/hp7.jpg" alt="">
                <h1>Harry Potter a Relikvie smrti</h1>
            </div>
            <p>V knize Harry Potter a Relikvie smrti se Harry, Ron a Hermiona vydávají na nebezpečnou cestu, aby splnili úkol, který jim zanechal Brumbál. Opouštějí Bradavice a musejí se spoléhat jen na sebe, přičemž čelí nejen smrtijedům, ale i vlastním pochybnostem a vyčerpání. Svět kouzelníků je čím dál temnější, Voldemort upevňuje svou moc a pronásledování těch, kdo se mu staví na odpor, je nemilosrdné. Trio se snaží rozluštit záhadu tajemných Relikvií smrti, které mohou změnit průběh jejich boje, zatímco zároveň pátrají po způsobu, jak jednou provždy zastavit temného pána. Na této cestě se musejí vyrovnat s minulostí, učinit obtížná rozhodnutí a pochopit pravou podstatu oběti, přátelství a odvahy.</p>
        </section>
        <section class="about-book">
            <h2>Zajímavosti o knize</h2>
            <nav>
                <ul>
                    <li><h3>Prvotní název</h3><p> J. K. Rowlingová původně zvažovala názvy jako Harry Potter and the Elder Wand nebo Harry Potter and the Peverell Quest.</p></li>
                    <li><h3>Dva filmy místo jednoho</h3><p>Kvůli rozsáhlosti děje byla filmová adaptace rozdělena na dvě části, přičemž Harry Potter a Relikvie smrti: 1. část vyšla v roce 2010 a 2. část v roce 2011.</p></li>
                    <li><h3>Poslední kapitola byla napsána roky předem</h3><p>Rowlingová prozradila, že závěrečnou scénu knihy napsala již v roce 1990, dlouho před vydáním prvního dílu.</p></li>
                </ul>
            </nav>
        </section>
        <div class="other-books">
            <h2>Další knihy</h2>
        </div>
        <div class="slider-wrapper">
        <button class="slider-nav-button slider-prev">&lt;</button>
        <div class="slider-container">
            <div id="imageSlider">
                <?php foreach($main_books_slides as $slide): ?>
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
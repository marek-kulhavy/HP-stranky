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
    <title>Harry Potter a fénixův řád</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-book-story">
            <div class="img-book">
                <img src="../images/books/hp5.jpg" alt="">
                <h1>Harry Potter a fénixův řád</h1>
            </div>
            <p>V knize Harry Potter a Fénixův řád se Harry ocitá v obtížné situaci, kdy po návratu do Bradavic čelí nedůvěře a odmítání jeho varování o návratu lorda Voldemorta. Ve škole se situace komplikuje příchodem nové profesorky obrany proti černé magii, Dolores Umbridgeové, která zavádí přísná pravidla a omezuje svobodu studentů i učitelů. Harry a jeho přátelé, Hermiona a Ron, se proto rozhodnou vzít věci do vlastních rukou a tajně cvičit spolužáky v obranné magii. Zároveň Harry zažívá zvláštní sny a vize, které naznačují, že je s Voldemortem spojen více, než by si přál. Napětí ve škole i v kouzelnickém světě se stupňuje, a tak se Harry musí vyrovnat nejen s vnějšími hrozbami, ale i se svými vlastními emocemi a nejistotami.</p>
        </section>
        <section class="about-book">
            <h2>Zajímavosti o knize</h2>
            <nav>
                <ul>
                    <li><h3>Nejdelší kniha série</h3><p>Harry Potter a Fénixův řád je nejdelší kniha ze všech sedmi dílů série - má přes 800 stran (v závislosti na vydání a jazyce).</p></li>
                    <li><h3>Rekordní prodeje</h3><p>Kniha vyšla 21. června 2003 a hned v prvních 24 hodinách se prodalo přes 5 milionů výtisků jen v USA.<p></li>
                    <li><h3>Poprvé vidíme ministerstvo kouzel</h3><p>Kniha poprvé ukazuje ministerstvo kouzel a jeho soudní systém, čímž rozšiřuje pohled na fungování kouzelnického světa.</p></li>
                    <li><h3>Současné vydání v češtině i angličtině</h3><p>Fénixův řád byl první díl Harryho Pottera, který vyšel v českém překladu ve stejný den jako anglická verze.</p></li>
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
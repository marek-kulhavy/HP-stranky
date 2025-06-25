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
    <title>Fantastická zvířata a kde je najít</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-book-story">
            <div class="img-book">
                <img src="../images/books/FBWFT.jpg" alt="">
                <h1>Fantastická zvířata a kde je najít</h1>
            </div>
            <p>Kniha Fantastická zvířata a kde je najít od J.K. Rowlingové je psána jako fiktivní učebnice ze světa Harryho Pottera, kterou sepsal magizoolog Mlok Scamander. Popisuje širokou škálu kouzelných tvorů z celého světa, včetně jejich vlastností, přirozeného prostředí a stupně nebezpečnosti. Kniha je sestavena ve stylu vědeckého průvodce, obsahuje podrobné informace o tvorbě Mezinárodního zákona o utajení a roli Ministerstva kouzel při ochraně těchto bytostí. Ve filmové adaptaci, která se odehrává v roce 1926 v New Yorku, se však děj zaměřuje na Mloka Scamandera, který cestuje se svým kouzelným kufrem plným fantastických zvířat. Po nešťastné náhodě se několik tvorů dostane na svobodu, což způsobí chaos v ulicích města. Mlok se snaží svá zvířata najít a zachránit, přičemž se zaplete do konfliktu s americkým kouzelnickým kongresem a temnými silami, které ohrožují kouzelnický i mudlovský svět.</p>
        </section>
        <section class="about-book">
            <h2>Zajímavosti o knize</h2>
            <nav>
                <ul>
                    <li><h3>Charitativní účel </h3><p>První vydání knihy v roce 2001 bylo vytvořeno pro charitativní organizaci Comic Relief, která podporuje děti v nouzi.</p></li>
                    <li><h3>Doplňkové poznámky</h3><p>V knize se nacházejí ručně psané poznámky Harryho, Rona a Hermiony, které dodávají textu humorný nádech.</p></li>
                    <li><h3>Inspirace filmové série</h3><p>Kniha sama o sobě nemá děj, ale inspirovala filmovou sérii Fantastická zvířata, kde je hlavní postavou Mlok Scamander.</p></li>
                    <li><h3>Rozšířená edice</h3><p>V roce 2017 vyšlo rozšířené vydání, které obsahuje nové magické tvory a předmluvu od Mloka Scamandera.</p></li>
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
                <?php foreach($other_books_slides as $slide): ?>
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
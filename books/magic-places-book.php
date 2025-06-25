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
    <title>Harry Potter - magická místa z filmů</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-book-story">
            <div class="img-book">
                <img src="../images/books/magic-places.jpg" alt="">
                <h1>Harry Potter - magická místa z filmů</h1>
            </div>
            <p>Kniha Harry Potter - Magická místa z filmů je fascinujícím průvodcem po ikonických lokacích kouzelnického světa, které se objevily ve filmové sérii Harry Potter. Čtenáři se mohou podívat do zákulisí a dozvědět se, jak vznikaly Bradavice, Příčná ulice, Ministerstvo kouzel, Godrikův důl a mnoho dalších míst, která tvoří nezapomenutelnou atmosféru kouzelnického univerza. Kniha obsahuje exkluzivní fotografie z natáčení, detailní konceptuální ilustrace a zajímavosti o tom, jak byly jednotlivé scény vytvářeny pomocí kulis, speciálních efektů a počítačové grafiky. Fanoušci zde také najdou rozhovory s výtvarníky, scénografy a dalšími členy filmového štábu, kteří se podíleli na přenesení J.K. Rowlingové magického světa na filmové plátno. Díky nádhernému vizuálnímu zpracování a interaktivním prvkům, jako jsou rozkládací stránky a repliky filmových rekvizit, je tato kniha dokonalým sběratelským kouskem pro každého, kdo chce prozkoumat kouzlo filmových lokací Harryho Pottera do nejmenších detailů.</p>
        </section>
        <section class="about-book">
            <h2>Zajímavosti o knize</h2>
            <nav>
                <ul>
                    <li><h3>Rozhovory s tvůrci</h3><p>Nabízí pohled do práce scénografů, výtvarníků a dalších členů štábu, kteří pomohli přivést kouzelnický svět k životu.</p></li>
                    <li><h3>Reálné inspirace</h3><p>Ukazuje, které skutečné lokace a architektonické prvky inspirovaly tvůrce při vytváření kouzelnických míst.</p></li>
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
                <?php foreach($other_books_2_slides as $slide): ?>
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
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
    <title>Filmová magie - neobyčejné bytosti</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-book-story">
            <div class="img-book">
                <img src="../images/books/film-magic-2.jpg" alt="">
                <h1>Filmová magie - neobyčejné bytosti</h1>
            </div>
            <p>Kouzelnický svět J. K. Rowlingové - Filmová magie 2 (Neobyčejné bytosti) je nádherným průvodcem po kouzelných tvorech, které se objevují ve filmech Harry Potter a Fantastická zvířata. Zaměřuje se na tvorbu a vývoj těchto magických bytostí, od původních konceptů až po jejich finální podobu na filmovém plátně. Čtenář se dozví, jak filmaři pomocí speciálních efektů, animatroniky a počítačové grafiky oživili například hipogryfa Klofana, domácího skřítka Dobbyho nebo majestátního draka ve Ohnivém poháru. Kniha také obsahuje exkluzivní rozhovory s tvůrci, kteří odhalují zákulisí práce na těchto bytostech, a je doplněna bohatým vizuálním materiálem, včetně konceptuálních ilustrací, storyboardů a fotografií z natáčení. Nechybí ani zajímavé informace o tom, jak byla fantastická zvířata inspirována reálnou mytologií. Díky interaktivním prvkům, jako jsou odklápěcí stránky nebo repliky filmových rekvizit, se jedná o skvělý sběratelský kousek, který potěší každého fanouška kouzelnického světa.</p>
        </section>
        <section class="about-book">
            <h2>Zajímavosti o knize</h2>
            <nav>
                <ul>
                    <li><h3>Interaktivní prvky</h3><p>Nabízí speciální odklápěcí stránky, repliky filmových rekvizit a další sběratelské prvky.</p></li>
                    <li><h3>Inspirace mytologií</h3><p>Ukazuje, jak tvůrci čerpali inspiraci z reálných legend a mýtů při tvorbě magických tvorů.</p></li>
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
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
    <title>Harry Potter - panoptikum postav</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-book-story">
            <div class="img-book">
                <img src="../images/books/char-vault.jpg" alt="">
                <h1>Harry Potter - panoptikum postav</h1>
            </div>
            <p>Kniha Harry Potter - Panoptikum postav je detailním průvodcem všemi významnými postavami, které se objevily ve filmové sérii Harry Potter. Nabízí podrobný pohled na hlavní i vedlejší hrdiny, jejich vývoj, herecké obsazení a filmové kostýmy. Čtenáři se dozvědí zajímavosti o tom, jak byly postavy přeneseny z knižní předlohy J.K. Rowlingové na filmové plátno, jak se vyvíjely jejich charaktery a jak filmaři pracovali na jejich vzhledu, včetně ikonických hábitů, hůlek a dalších rekvizit. Kniha je plná exkluzivních fotografií, konceptuálních návrhů a zákulisních informací od herců i členů filmového štábu. Díky interaktivním prvkům, jako jsou rozkládací stránky a repliky filmových materiálů, se jedná o fascinující sběratelský kousek, který ocení každý fanoušek světa Harryho Pottera.</p>
        </section>
        <section class="about-book">
            <h2>Zajímavosti o knize</h2>
            <nav>
                <ul>
                    <li><h3>Více než 200 postav</h3><p>Kniha představuje podrobné informace o více než 200 postavách z filmové série Harry Potter, včetně méně známých vedlejších postav.</p></li>
                    <li><h3>Nezveřejněné koncepty</h3><p>Obsahuje původní návrhy kostýmů a maskování postav, které se nakonec ve filmu neobjevily.</p></li>
                    <li><h3>Rodokmeny a vazby mezi postavami</h3><p>Obsahuje přehledné diagramy znázorňující rodinné vztahy a spojitosti mezi kouzelnickými rodinami.</p></li>
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
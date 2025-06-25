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
    <title>Harry Potter a vezeň z Azkabanu</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-book-story">
            <div class="img-book">
                <img src="../images/books/hp3.jpg" alt="">
                <h1>Harry Potter a vezeň z Azkabanu</h1>
            </div>
            <p>Během třetího roku v Bradavicích se Harry Potter dozvídá o uprchlém vězni Siriusi Blackovi, který údajně usiluje o jeho život. Škola je pod ochranou děsivých mozkomorů, strážců Azkabanu, kteří v Harrym vyvolávají děsivé vzpomínky. Během roku se Harry učí bránit proti temným silám a odhaluje nové informace o své rodině i o událostech, které vedly k smrti jeho rodičů. Spolu s přáteli Hermionou a Ronem se snaží rozplést tajemství kolem Siriuse a zjistit, zda je skutečně tím, za koho ho všichni považují. Pravda, kterou odhalí, ale obrátí jejich pohled na minulost i budoucnost naruby.</p>
        </section>
        <section class="about-book">
            <h2>Zajímavosti o knize</h2>
            <nav>
                <ul>
                    <li><h3>Jediný díl bez Voldemorta</h3><p>Jde o jedinou knihu v celé sérii, kde se Lord Voldemort vůbec fyzicky neobjeví.</p></li>
                    <li><h3>Temnější tón</h3><p>Tento díl je považován za první, kde J.K. Rowlingová začíná více zkoumat temnější a psychologičtější témata. Kromě magie se více soustředí na strach, trauma a minulost, zejména prostřednictvím postav, jako je Harry, který se vyrovnává s novými informacemi o svých rodičích a jejich smrti.<p></li>
                    <li><h3>Magická psychologie</h3><p>Kniha obsahuje popis Patronusového kouzla, které je nejen magickým prvkem, ale i psychologickým symbolem - Patronus reprezentuje největší šťastnou vzpomínku člověka. Tento koncept se později stal významnou metaforou pro sílu pozitivních vzpomínek v těžkých chvílích.</p></li>
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
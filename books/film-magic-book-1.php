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
    <title>Filmová magie - kouzelnický svět</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-book-story">
            <div class="img-book">
                <img src="../images/books/film-magic.jpg" alt="">
                <h1>Filmová magie - kouzelnický svět</h1>
            </div>
            <p>Kniha Filmová magie – Kouzelnický svět je fascinujícím průvodcem zákulisím filmových adaptací světa Harryho Pottera a série Fantastická zvířata. Nabízí jedinečný pohled na tvorbu kouzelnického univerza na filmovém plátně, včetně detailních informací o natáčení, vývoji postav, kostýmů, kouzelnických tvorů a speciálních efektů. Čtenáři se mohou dozvědět, jak se vytvářely ikonické lokace jako Bradavice, Příčná ulice nebo Ministerstvo kouzel, a nahlédnout do práce filmařů, kteří stáli za nezapomenutelnými kouzelnickými scénami. Kniha obsahuje exkluzivní fotografie, náčrty, storyboardy a rozhovory s herci i členy tvůrčího týmu, což ji činí nepostradatelnou pro každého fanouška. Navíc často přichází s interaktivními prvky, jako jsou repliky filmových rekvizit, odklápěcí stránky a další sběratelské zajímavosti. Díky kombinaci vizuálního bohatství a zasvěcených informací je Filmová magie - Kouzelnický svět nejen nádherným sběratelským kouskem, ale také hlubokým vhledem do magie, která stojí za vznikem jednoho z nejmilovanějších filmových světů všech dob.</p>
        </section>
        <section class="about-book">
            <h2>Zajímavosti o knize</h2>
            <nav>
                <ul>
                    <li><h3>Interaktivní prvky</h3><p>Obsahuje odklápěcí stránky, repliky filmových rekvizit a další sběratelské kousky, které umožňují čtenářům nahlédnout do zákulisí.</p></li>
                    <li><h3>Exkluzivní fotografie a náčrty </h3><p>Kniha je plná unikátních fotografií z natáčení, designových náčrtů a storyboardů, které ukazují, jak vznikaly ikonické scény.</p></li>
                    <li><h3>Rozhovory s tvůrci</h3><p>V knize najdete rozhovory s herci, režiséry a členy produkčního týmu, kteří se podíleli na tvorbě kouzelnického světa.</p></li>
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
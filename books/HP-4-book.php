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
    <title>Harry Potter a ohnivý pohár</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-book-story">
            <div class="img-book">
                <img src="../images/books/hp4.jpg" alt="">
                <h1>Harry Potter a ohnivý pohár</h1>
            </div>
            <p>V knize Harry Potter a Ohnivý pohár se Harry vrací do čtvrtého ročníku na bradavické škole čar a kouzel, kde se letos koná legendární Turnaj tří kouzelníků – nebezpečná soutěž mezi třemi kouzelnickými školami, v níž musí vybraní šampioni plnit náročné a často životu nebezpečné úkoly. Bradavice hostí studenty z Kruvalu a Krásnohůlek, kteří se účastní soutěže, a celá škola je plná napětí a vzrušení. Přestože se Harry do turnaje nepřihlásil, jeho jméno je nečekaně vybráno, což v něm i jeho spolužácích vzbuzuje mnoho otázek a pochybností. Kromě soutěže se Harry potýká s běžnými školními problémy, složitými vztahy s přáteli i prvními náznaky romantiky. Celkově se atmosféra v kouzelnickém světě začíná měnit, objevují se známky rostoucího nebezpečí a pod povrchem zdánlivě slavnostních událostí se skrývá něco mnohem temnějšího.</p>
        </section>
        <section class="about-book">
            <h2>Zajímavosti o knize</h2>
            <nav>
                <ul>
                    <li><h3>Zpoždění vydání</h3><p>Kvůli své složitosti trvala autorka s psaním déle, než bylo plánováno. Nakonec kniha vyšla v roce 2000, o rok později než se očekávalo.</p></li>
                    <li><h3>Odstraněná kapitola</h3><p>Rowlingová původně napsala kapitolu nazvanou Přesunutý kluk, ve které byl popisován pohled na Bradavice z pohledu jiného studenta. Nakonec ji ale vyškrtla.<p></li>
                    <li><h3>Zásadní smrt</h3><p>Šlo o první knihu v sérii, kde zemřela důležitá kladná postava (Cedric Diggory). Rowlingová řekla, že šlo o moment, kdy série začala být temnější.</p></li>
                    <li><h3>Kniha změnila název</h3><p>Rowlingová původně zvažovala jiný název - Harry Potter and the Doomspell Tournament, ale nakonec se rozhodla pro Goblet of Fire.</p></li>
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
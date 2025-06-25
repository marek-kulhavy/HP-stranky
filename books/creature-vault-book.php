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
    <title>Bestiář Harryho Pottera</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-book-story">
            <div class="img-book">
                <img src="../images/books/creature-vault.jpg" alt="">
                <h1>Bestiář Harryho Pottera</h1>
            </div>
            <p>Kniha Bestiář Harryho Pottera je nádherným průvodcem světem kouzelných tvorů, kteří se objevili ve filmové sérii Harry Potter. Přináší detailní pohled na tvorbu a vizuální zpracování těchto bytostí, od prvních konceptů až po jejich finální podobu na filmovém plátně. Čtenáři se mohou dozvědět, jak byly vytvořeny postavy jako hipogryf Klofan, obří pavouk Aragog, domácí skřítci Dobby a Krátura nebo bazilišek z Tajemné komnaty. Kniha obsahuje množství exkluzivních fotografií, ilustrací, storyboardů a zákulisních informací od členů filmového štábu, kteří se podíleli na přivedení těchto tvorů k životu. Díky kombinaci praktických efektů, animatroniky a CGI technologie mohli filmaři vytvořit magické bytosti, které působí realisticky a zároveň zachovávají kouzlo původních knižních popisů. Bestiář Harryho Pottera je fascinujícím sběratelským kouskem pro každého, kdo chce nahlédnout do tajů filmové magie a zjistit, jakým způsobem se podařilo oživit úžasné tvory J.K. Rowlingové.</p>
        </section>
        <section class="about-book">
            <h2>Zajímavosti o knize</h2>
            <nav>
                <ul>
                    <li><h3>Rozdíly mezi knihami a filmy</h3><p>Ukazuje, jak se některé tvory musely pro film vizuálně upravit, aby lépe fungovaly na obrazovce.</p></li>
                    <li><h3>Speciální edice</h3><p>Některé verze knihy obsahují bonusové materiály, jako jsou rozkládací ilustrace nebo repliky filmových rekvizit.</p></li>
                    <li><h3>Zajímavosti o magických tvorech</h3><p>Kromě filmových efektů kniha obsahuje i informace o mytologických a folklórních inspiracích jednotlivých tvorů.</p></li>
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
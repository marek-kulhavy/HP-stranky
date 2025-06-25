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
    <title>Bajky barda Beedleho</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-book-story">
            <div class="img-book">
                <img src="../images/books/TBB.jpg" alt="">
                <h1>Bajky barda Beedleho</h1>
            </div>
            <p>Kniha Bajky barda Beedleho od J.K. Rowlingové je sbírkou kouzelnických pohádek, které jsou ve světě Harryho Pottera obdobou mudlovských pohádek, jako jsou ty od bratří Grimmů. Obsahuje pět krátkých příběhů, z nichž nejznámější je Příběh tří bratří, který hraje klíčovou roli v závěrečném dílu série Harry Potter a Relikvie smrti. Tyto bajky byly po staletí vyprávěny mezi kouzelníky a každá z nich obsahuje nejen kouzelnické prvky, ale také hluboké morální ponaučení. V původním kouzelnickém světě byla kniha překládána a předávána z generace na generaci, avšak pro mudly byla zpřístupněna teprve díky překladu Hermiony Grangerové. Sbírka je doplněna i komentáři samotného Albuse Brumbála, který k jednotlivým bajkám připojuje vlastní postřehy, historické poznámky a zajímavosti ze světa kouzelníků. Kniha vyšla také s charitativním účelem a rychle si získala oblibu nejen u fanoušků Harryho Pottera, ale i u čtenářů, kteří mají rádi kouzelné pohádky s hlubším poselstvím.</p>
        </section>
        <section class="about-book">
            <h2>Zajímavosti o knize</h2>
            <nav>
                <ul>
                    <li><h3>Kouzelnická pohádková kniha</h3><p>Bajky barda Beedleho jsou ve světě Harryho Pottera obdobou mudlovských pohádek, podobně jako příběhy bratří Grimmů.</p></li>
                    <li><h3>Pět pohádek</h3><p> Kniha obsahuje pět různých bajek, z nichž nejznámější je Příběh tří bratří, který se objevuje v Harry Potterovi a Relikviích smrti.</p></li>
                    <li><h3>Fiktivní původní autor </h3><p>V kouzelnickém světě knihu napsal bard Beedle, kouzelník žijící v 15. století.</p></li>
                    <li><h3>Hermionin překlad </h3><p>Ve světě Harryho Pottera byla kniha původně napsána runovým písmem a pro mudly ji přeložila Hermiona Grangerová.</p></li>
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
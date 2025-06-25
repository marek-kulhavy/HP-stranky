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
    <title>Harry Potter a kámen mudrců</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-book-story">
            <div class="img-book">
                <img src="../images/books/hp1.jpg" alt="">
                <h1>Harry Potter a kámen mudrců</h1>
            </div>
            <p>Harry Potter a Kámen mudrců je první díl slavné fantasy série od J. K. Rowlingové. Příběh sleduje jedenáctiletého Harryho Pottera, který zjistí, že je kouzelník, a nastoupí do Školy čar a kouzel v Bradavicích. Zde si najde přátele Rona a Hermionu, ale také nepřátele, jako je nafoukaný Draco Malfoy. Postupně odhaluje tajemství ukrytá v Bradavicích a dozvídá se o tajemném Kameni mudrců, který chce získat temný čaroděj Voldemort. Kniha kombinuje dobrodružství, magii i přátelství a položila základ pro celou ikonickou sérii.</p>
        </section>
        <section class="about-book">
            <h2>Zajímavosti o knize</h2>
            <nav>
                <ul>
                    <li><h3>Odmítnutí nakladateli</h3><p>J.K. Rowlingová poslala rukopis dvanácti nakladatelstvím, ale všichni ho odmítli. Až nakladatelství Bloomsbury souhlasilo s vydáním.</p></li>
                    <li><h3>První náklad byl velmi malý</h3><p>První britské vydání v roce 1997 mělo jen 500 výtisků, z toho 300 putovalo do knihoven. Tyto původní knihy jsou dnes extrémně vzácné a drahé.</p></li>
                    <li><h3>Jiný název v USA</h3><p>Americká verze knihy byla vydána pod názvem Harry Potter and the Sorcerer's Stone, protože vydavatel se obával, že slovo „Philosopher“ nebude pro americké děti dostatečně atraktivní.</p></li>
                    <li><h3>První ilustrace obálky </h3><p>Britskou obálku navrhl Thomas Taylor, kterému bylo v té době jen 23 let a šlo o jeho první zakázku jako ilustrátora.</p></li>
                    <li><h3>Nejdražší výtisky</h3><p>První edice knihy s chybami v textu, například opakovaným názvem „1 wand“ (hůlka) ve školním seznamu, se na aukcích prodávají za statisíce dolarů.</p></li>
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
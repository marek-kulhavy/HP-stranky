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
    <title>Harry Potter a princ dvojí krve</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-book-story">
            <div class="img-book">
                <img src="../images/books/hp6.jpg" alt="">
                <h1>Harry Potter a princ dvojí krve</h1>
            </div>
            <p>Harry se vrací do Bradavic v době, kdy je kouzelnický svět stále více sužován útoky Smrtijedů a rostoucím strachem z lorda Voldemorta. Brumbál si Harryho bere pod svá křídla a společně zkoumají temnou minulost Voldemorta, aby našli způsob, jak ho jednou provždy porazit. Zároveň Harry objeví tajemnou učebnici lektvarů, která kdysi patřila neznámému „Princi dvojí krve“ a obsahuje řadu vylepšených kouzel a užitečných poznámek. Mezitím se ve škole vyostřují konflikty, vztahy mezi studenty se mění a některé postavy čelí vlastním dilematům a nebezpečným rozhodnutím. Bradavice už nejsou tak bezpečné jako dříve a všichni si začínají uvědomovat, že bitva mezi dobrem a zlem se blíží.</p>
        </section>
        <section class="about-book">
            <h2>Zajímavosti o knize</h2>
            <nav>
                <ul>
                    <li><h3>Nejkontroverznější název</h3><p>J.K. Rowlingová dlouho váhala s výběrem názvu a dokonce zvažovala několik jiných variant. Název Princ dvojí krve odhaluje klíčovou postavu, ale až do konce knihy není jasné, koho přesně označuje.</p></li>
                    <li><h3>Důraz na Voldemortovu minulost</h3><p>Na rozdíl od předchozích knih se tentokrát hodně soustředí na minulost lorda Voldemorta, jeho dětství a cestu k temné magii.<p></li>
                    <li><h3>Fanouškovské spekulace před vydáním</h3><p>Před vydáním knihy fanoušci spekulovali, kdo je „Princ dvojí krve“ – někteří se domnívali, že by to mohl být Harry, jiní tipovali zcela nové postavy.</p></li>
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
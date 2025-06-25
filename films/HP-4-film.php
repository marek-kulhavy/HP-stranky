<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/img-slider.css">
    <link rel="stylesheet" href="../css/single-film.css">

    <link rel="stylesheet" href="../query/header-query.css">
    <link rel="stylesheet" href="../query/single-film-query.css">
    <link rel="shortcut icon" href="/HP-stranky/images/golden-snitch.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/b535256029.js" crossorigin="anonymous"></script>
    <title>Harry Potter a ohnivý pohár</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-film-story">
            <div class="img-film">
                <img src="../images/films/hp-4-film.jpg" alt="">
                <h1>Harry Potter a ohnivý pohár</h1>
            </div>
            <p>Harry Potter a Ohnivý pohár je čtvrtým filmem ze slavné kouzelnické série, který přináší temnější atmosféru a napínavější dobrodružství. Harry je nečekaně zapojen do nebezpečného turnaje, kde musí čelit náročným úkolům a soupeřit se staršími a zkušenějšími kouzelníky. Film představuje nové postavy, rozšiřuje kouzelnický svět a prohlubuje vztahy mezi hlavními hrdiny. Zároveň se objevují první náznaky temnějších sil, které začínají ohrožovat nejen Bradavice, ale i celý kouzelnický svět. Díky velkolepým vizuálním efektům a silné atmosféře patří tento díl k těm nejnapínavějším v celé sérii.</p>
        </section>
        <section class="about-film">
            <h2>Zajímavosti o filmu</h2>
            <nav>
                <ul>
                    <li><h3>Režisérská změna </h3><p>Harry Potter a Ohnivý pohár je prvním a jediným dílem série, který režíroval Mike Newell, čímž se stal prvním britským režisérem Potterovské ságy.</p></li>
                    <li><h3>Nejvyšší věkové omezení</h3><p>Film dostal v USA rating PG-13 (doporučeno od 13 let), což bylo poprvé v sérii a odráželo temnější a dramatičtější atmosféru příběhu.</p></li>
                    <li><h3>Obří stadion pro famfrpálový mistrovský zápas</h3><p>Pro úvodní scénu mistrovství světa ve famfrpálu byla postavena obrovská aréna s více než 25 000 digitálními diváky, což bylo do té doby jedno z nejambicióznějších CGI prostředí v sérii.</p></li>
                </ul>
            </nav>
        </section>
        <div class="other-films">
            <h2>Další filmy</h2>
        </div>
        <div class="slider-wrapper">
        <button class="slider-nav-button slider-prev">&lt;</button>
        <div class="slider-container">
            <div id="imageSlider">
                <?php foreach($films as $slide): ?>
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
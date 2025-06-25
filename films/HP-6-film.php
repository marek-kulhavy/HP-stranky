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
    <title>Harry Potter a princ dvojí krve</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-film-story">
            <div class="img-film">
                <img src="../images/films/hp-6-film.jpg" alt="">
                <h1>Harry Potter a princ dvojí krve</h1>
            </div>
            <p>Harry Potter a Princ dvojí krve je šestým filmem kouzelnické série, který se nese v temnější, ale zároveň i melancholické atmosféře. Harry se spolu s Brumbálem snaží odhalit klíčové tajemství, které by mohlo pomoci v boji proti Temnému pánovi, zatímco Bradavice už nejsou tak bezpečným místem jako dřív. Mezitím se mezi studenty rozvíjejí nové vztahy a city, což do příběhu přináší i odlehčené momenty. Film je vizuálně působivý a kombinuje temnotu, romantiku i hluboké emoce, přičemž připravuje půdu pro velkolepé finále celé ságy.</p>
        </section>
        <section class="about-film">
            <h2>Zajímavosti o filmu</h2>
            <nav>
                <ul>
                    <li><h3>Odklad premiéry</h3><p>Film měl původně vyjít v listopadu 2008, ale premiéra byla posunuta na červenec 2009, což fanoušky zklamalo. Studio Warner Bros. chtělo využít letní sezónu a komerční úspěch filmu Temný rytíř.</p></li>
                    <li><h3>Požár na natáčení</h3><p>Během natáčení scény s útokem na Doupě (Weasleyovic dům) došlo k neplánovanému požáru, který se vymkl kontrole a zničil část kulis. Nikdo nebyl zraněn, ale scéna musela být přetáčena.</p></li>
                    <li><h3>Scéna v jeskyni</h3><p>Velkolepá scéna na moři byla natáčena v obrovské vodní nádrži ve studiu s kombinací praktických efektů a CGI. Daniel Radcliffe musel trávit dlouhé hodiny ve studené vodě.</p></li>
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
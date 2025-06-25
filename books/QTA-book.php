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
    <title>Famfrpál v průběhu věků</title>
</head>
<body>
    <?php require "../assets/header.php"; ?>
    <?php require "../assets/img-slider.php"; ?>

    <main>
        <section class="about-book-story">
            <div class="img-book">
                <img src="../images/books/QTA.jpg" alt="">
                <h1>Famfrpál v průběhu věků</h1>
            </div>
            <p>Kniha Famfrpál v průběhu věků od J.K. Rowlingové je fiktivní odborná publikace, která detailně popisuje historii a vývoj nejpopulárnějšího kouzelnického sportu, famfrpálu. Napsal ji fiktivní autor Kennilworthy Whisp, známý odborník na famfrpál a jeho vášnivý fanoušek. Kniha se zabývá původem hry, počínaje prastarými kouzelnickými sporty, které se postupně vyvinuly v moderní famfrpál, a podrobně rozebírá pravidla, vybavení a jednotlivé pozice hráčů. Čtenář se zde dočte o nejvýznamnějších famfrpálových týmech, legendárních hráčích i slavných zápasech. Kromě historie kniha obsahuje také zajímavosti o různých typech létajících košťat a vývoji famfrpálového vybavení. Stejně jako Fantastická zvířata a kde je najít, byla tato kniha vydána jako doplňková publikace ke světu Harryho Pottera a výtěžek z jejího prodeje šel na charitativní účely. Díky humornému stylu a množství fascinujících detailů o sportu, který je pro kouzelnický svět stejně významný jako fotbal pro mudly, se kniha stala oblíbeným čtením mezi fanoušky série.</p>
        </section>
        <section class="about-book">
            <h2>Zajímavosti o knize</h2>
            <nav>
                <ul>
                    <li><h3>Fiktivní sportovní příručka</h3><p>Kniha je napsána jako odborná publikace o famfrpálu a jejím autorem je fiktivní expert Kennilworthy Whisp.</p></li>
                    <li><h3>Oblíbený doplněk pro fanoušky</h3><p>Spolu s knihami Fantastická zvířata a kde je najít a Bajky barda Beedleho patří mezi nejoblíbenější doplňkové publikace ke světu Harryho Pottera.</p></li>
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
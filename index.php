<?php
session_start();
$isLoggedIn = isset($_SESSION['is_logged_in']);
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">

    <link rel="stylesheet" href="./query/header-query.css">

    <link rel="stylesheet" href="./css/index.css">

    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b535256029.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="/HP-stranky/images/golden-snitch.png" type="image/x-icon">
    <title>Magický portál do Bradavic</title>
</head>
<body>
    <?php require "./assets/header.php"; ?>

    <main>
        <section class="main-heading" data-aos="fade-down">
            <h1>Magický portál do Bradavic</h1>
            <div class="intro" data-aos="fade-up">
                <h2>Připrav si hůlku na vstup do světa kouzel!</h2>
                <p>Vítej na Magickém portálu do Bradavic, místě, kde ožívá celý svět Harryho Pottera. Čeká tě dobrodružství mezi stránkami knih, filmovým plátnem i herní obrazovkou.</p>
                <h2>Co všechno u nás najdeš?</h2>
            </div>
        </section>

        <section class="grid">
            <div class="card" data-aos="zoom-in" data-aos-delay="100">
                <h2>📚 Knihy</h2>
                <p>Odhal tajemství Bradavic a objev detaily, které jsi možná přehlédl.</p>
                <a href="./books.php">Přejít na knihy</a>
            </div>
            <div class="card" data-aos="zoom-in" data-aos-delay="200">
                <h2>🎬 Filmy</h2>
                <p>Prozkoumej filmový svět – srovnání s knihami a zákulisí.</p>
                <a href="./films.php">Přejít na filmy</a>
            </div>
            <div class="card" data-aos="zoom-in" data-aos-delay="300">
                <h2>🎮 Hry</h2>
                <p>Objev magii videoher od adaptace filmové série až po Hogwarts Legacy.</p>
                <a href="./games.php">Přejít na hry</a>
            </div>
        </section>

        <?php if (!$isLoggedIn): ?>
            <section class="auth-section" data-aos="fade-up">
                <h2>🔐 Pro kouzelníky s registrací</h2>
                <p>Získej přístup ke kvízům, časové ose a exkluzivnímu obsahu!</p>
                <div class="auth-buttons">
                    <a href="./login.php">Přihlásit se</a>
                    <a href="./registration.php">Registrovat se zdarma</a>
                </div>
            </section>
        <?php endif; ?>
    </main>

    <?php require "./assets/footer.php"; ?>
    <script src="./js/header.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
        <script>
            AOS.init({
                duration: 1000,
                once: true
            });
        </script>
</body>
</html>
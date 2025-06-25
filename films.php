<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/films.css">

    <link rel="stylesheet" href="./query/header-query.css">
    <link rel="stylesheet" href="./query/films-query.css">
    <link rel="shortcut icon" href="/HP-stranky/images/golden-snitch.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/b535256029.js" crossorigin="anonymous"></script>
    <title>Filmy</title>
</head>
<body>
    <?php require "./assets/header.php"; ?>

    <main>
    <section class="films">
    <div class="header">
        <h1>Harry Potter filmy</h1>
    </div>
        <nav>
            <ul>
                <li><a href="./films/HP-1-film.php"><img src="./images/films/hp-1-film.jpg" alt=""><p>Harry Potter a kámen mudrců</p></a></li>
                <li><a href="./films/HP-2-film.php"><img src="./images/films/hp-2-film.jpg" alt=""><p>Harry Potter a tajemná komnata</p></a></li>
                <li><a href="./films/HP-3-film.php"><img src="./images/films/hp-3-film.jpg" alt=""><p>Harry Potter a vezeň z Azkabanu</p></a></li>
                <li><a href="./films/HP-4-film.php"><img src="./images/films/hp-4-film.jpg" alt=""><p>Harry Potter a ohnivý pohár</p></a></li>
            </ul>
        </nav>
        <nav>
            <ul>
                <li><a href="./films/HP-5-film.php"><img src="./images/films/hp-5-film.jpg" alt=""><p>Harry Potter a fénixův řád</p></a></li>
                <li><a href="./films/HP-6-film.php"><img src="./images/films/hp-6-film.jpg" alt=""><p>Harry Potter a princ dvojí krve</p></a></li>
                <li><a href="./films/HP-7-film.php"><img src="./images/films/hp-7-film.jpg" alt=""><p>Harry Potter a relikvie smrti 1. část</p></a></li>
                <li><a href="./films/HP-8-film.php"><img src="./images/films/hp-8-film.jpg" alt=""><p>Harry Potter a relikvie smrti 2. část</p></a></li>
            </ul>
        </nav>
    </section>



    </main>

    <?php require "./assets/footer.php"; ?>
    <script src="./js/header.js"></script>
</body>
</html>
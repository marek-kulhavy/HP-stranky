<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/books.css">

    <link rel="stylesheet" href="./query/header-query.css">
    <link rel="stylesheet" href="./query/books-query.css">
    <link rel="shortcut icon" href="/HP-stranky/images/golden-snitch.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/b535256029.js" crossorigin="anonymous"></script>
    <title>Knihy</title>
</head>
<body>
    <?php require "./assets/header.php"; ?>

    <main>
    <section class="main-books">
        <div class="header">
            <h1>Harry Potter sága</h1>
        </div>
        <nav>
            <ul>
                <li><a href="./books/HP-1-book.php"><img src="./images/books/hp1.jpg" alt="Harry Potter a kámen mudrců"><p>Harry Potter a kámen mudrců</p></a></li>
                <li><a href="./books/HP-2-book.php"><img src="./images/books/hp2.jpg" alt="Harry Potter a tajemná komnata"><p>Harry Potter a tajemná komnata</p></a></li>
                <li><a href="./books/HP-3-book.php"><img src="./images/books/hp3.jpg" alt="Harry Potter a vězeň z Azkabanu"><p>Harry Potter a vezeň z Azkabanu</p></a></li>
                <li><a href="./books/HP-4-book.php"><img src="./images/books/hp4.jpg" alt="Harry Potter a ohnivý pohár"><p>Harry Potter a ohnivý pohár</p></a></li>
            </ul>
        </nav>
        <nav>
            <ul>                
                <li><a href="./books/HP-5-book.php"><img src="./images/books/hp5.jpg" alt="Harry Potter a fénixův řád"><p>Harry Potter a fénixův řád</p></a></li>
                <li><a href="./books/HP-6-book.php"><img src="./images/books/hp6.jpg" alt="Harry Potter a princ dvojí krve"><p>Harry Potter a princ dvojí krve</p></a></li>
                <li><a href="./books/HP-7-book.php"><img src="./images/books/hp7.jpg" alt="Harry Potter a relikvie smrti"><p>Harry Potter a relikvie smrti</p></a></li>
            </ul>
        </nav>
    </section>
    <section class="other-books-first">
        <div class="header">
            <h1>Další příběhy z pera J.&nbsp;K.&nbsp;Rowlingové</h1> 
        </div>
        <nav>
            <ul>
                <li><a href="./books/FBWFT-book.php"><img src="./images/books/FBWFT.jpg" alt=""><p>Fantastická zvířata a kde je najít</p></a></li>
                <li><a href="./books/TBB-book.php"><img src="./images/books/TBB.jpg" alt=""><p>Bajky barda Beedleho</p></a></li>
                <li><a href="./books/QTA-book.php"><img src="./images/books/QTA.jpg" alt=""><p>Famfrpál v průběhu věků</p></a></li>
            </ul>
        </nav>
    </section>
    <section class="other-books-second">
        <div class="header">
            <h1>Zákulisí kouzel a magie</h1>
        </div>
        <nav>
            <ul>
                <li><a href="./books/film-magic-book-1.php"><img src="./images/books/film-magic.jpg" alt=""><p>Kouzelnický svět, filmová magie</p></a></li>
                <li><a href="./books/film-magic-book-2.php"><img src="./images/books/film-magic-2.jpg" alt=""><p>Kouzelnický svět, neobyčejné bytosti</p></a></li>
                <li><a href="./books/magic-places-book.php"><img src="./images/books/magic-places.jpg" alt=""><p>Magická místa z filmů Harryho Pottera</p></a></li>
            </ul>
        </nav>
        <nav>
            <ul>
            <li><a href="./books/char-vault-book.php"><img src="./images/books/char-vault.jpg" alt=""><p>Harry Potter, panoptikum postav</p></a></li>
            <li><a href="./books/creature-vault-book.php"><img src="./images/books/creature-vault.jpg" alt=""><p>Bestiář Harryho Pottera</p></a></li>
            </ul>
        </nav>
    </section>


    </main>
    <?php require "./assets/footer.php"; ?>
    <script src="./js/header.js"></script>
</body>
</html>
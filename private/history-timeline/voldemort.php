<?php

require "../../classes/Auth.php";

// Kontrola, zda je uživatel přihlášený
if (!Auth::isLoggedIn()) {
    header("Location: /HP-stranky/login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/general.css">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/timeline-single.css">

    <link rel="stylesheet" href="../../query/header-query.css">
    <link rel="stylesheet" href="../../query/timeline-single-query.css">
    <link rel="shortcut icon" href="/HP-stranky/images/golden-snitch.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/b535256029.js" crossorigin="anonymous"></script>
    <link rel="preload" href="../images/hp-portal.png" as="image">
    <title>Původ a dětství Lorda Voldemorta</title>
</head>
<body>
    <?php require "../../assets/header.php"; ?>

    <main>
   <section class="section">
            <h1>Tom Rojvolo Raddle</h1>
            <div class="section-image">
                <div class="text-content">
                    <div class="first-paragraph">
                        <p>Tom Rojvolo Raddle se narodil 31. prosince 1926 v Londýně. Jeho matka, Merope Gauntová, pocházela z degenerované větve potomků Salazara Zmijozela, zatímco jeho otec, Tom Raddle starší, byl mudla. Merope použila na Toma staršího lektvar lásky, aby ho získala, ale když přestala lektvar podávat, Tom ji opustil. Merope zemřela krátce po porodu, a tak Tom vyrůstal v sirotčinci, kde již v raném věku projevoval známky magie a manipulativního chování.</p>
                    </div>
                </div>
                <div class="image-container">
                    <img src="../../images/timeline/tom-raddle.png" alt="Lord Voldemort">
                    <h3>Tom Rojvol Raddle</h3>
                </div>
            </div>
            <div class="another-text">
                <div class="text-content">
                    <h2>Školní léta v bradavicích (1938 – 1945)</h2>
                    <p>Ve věku jedenácti let byl Tom přijat do Školy čar a kouzel v Bradavicích, kde byl zařazen do koleje Zmijozel. Byl výjimečně nadaným studentem, oblíbeným mezi učiteli, ale zároveň si udržoval odstup od ostatních studentů. Během svého pobytu v Bradavicích objevil Tajemnou komnatu a ovládl baziliška, kterého použil k útoku na studenty. Také začal sbírat informace o viteálech a temné magii.</p>
                </div>
            </div>
            <div class="another-text">
                <div class="text-content">
                    <h2>Proměna v Lorda Voldemorta</h2>
                    <p>Po ukončení studia v Bradavicích v roce 1945 pracoval Tom krátce v obchodě Borgin a Burkes, kde získával cenné magické předměty. Během této doby zavraždil Hepzibu Smithovou, aby získal medailon Salazara Zmijozela a pohár Helgy z Mrzimoru, které později použil jako viteály. Následně zmizel na více než deset let, během nichž cestoval, studoval temnou magii a podstoupil řadu magických transformací, čímž se postupně přeměnil v Lorda Voldemorta.</p>
                </div>
                    <div class="image-container">
                    <img src="../../images/timeline/voldemort.png" alt="Lord Voldemort">
                    <h3>Lord Voldemort</h3>
                </div>
            </div>
            <div class="another-text">
                <div class="text-content">
                    <h2>První kouzelnická válka (1970 – 1981)</h2>
                    <p>V 70. letech 20. století zahájil Voldemort první kouzelnickou válku, během níž shromáždil skupinu následovníků známých jako Smrtijedi. Jeho cílem bylo ovládnout kouzelnický svět a očistit ho od mudlů a mudlovských rodů. V roce 1981 se pokusil zabít Harryho Pottera, protože věřil, že naplňuje proroctví o jeho porážce. Avšak kouzlo se obrátilo proti němu díky oběti Lily Potterové, což vedlo k jeho prvnímu pádu.</p>
                </div>
            </div>
            <div class="another-text">
                <div class="text-content">
                    <h2>Období bez těla (1981 – 1995)</h2>
                    <p>Po neúspěšném pokusu o zabití Harryho Pottera ztratil Voldemort fyzickou podobu a existoval jako slabý duch. Během tohoto období se snažil získat zpět své tělo a moc. V roce 1995 se mu to podařilo pomocí temného rituálu, při němž použil Harryho krev, kost svého otce a část těla svého služebníka Petra Pettigrewa.</p>
                </div>
            </div>
            <div class="another-text">
                <div class="text-content">
                    <h2>Druhá kouzelnická válka (1995 – 1998)</h2>
                    <p>Po obnovení své fyzické podoby zahájil Voldemort druhou kouzelnickou válku. Postupně získával kontrolu nad Ministerstvem kouzel a dalšími institucemi. V roce 1997 zabil Albuse Brumbála a převzal kontrolu nad Bradavicemi. V roce 1998 došlo k rozhodující bitvě o Bradavice, během níž byl Voldemort definitivně poražen Harrym Potterem.</p>
                </div>
            </div>
            <div class="another-text">
                <div class="text-content">
                    <h2>Viteály a Voldemortova nesmrtelnost</h2>
                    <p>Voldemort vytvořil sedm viteálů, aby rozdělil svou duši a dosáhl nesmrtelnosti. Mezi ně patřily:</br>
                    <b>Deník Toma Raddlea –</b> zničen Harrym Potterem v Tajemné komnatě.</br>
                    <b>Prsten Marvola Gaunta –</b> zničen Brumbálem.</br>
                    <b>Medailon Salazara Zmijozela –</b> zničen Ronem Weasleym.</br>
                    <b>Pohár Helgy z Mrzimoru –</b> zničen Hermionou Grangerovou.</br>
                    <b>Diadém Roweny z Havraspáru –</b> zničen Vincentem Crabbeem.</br>
                    <b>Nagini (had) –</b> zničena Nevillem Longbottomem.</br>
                    <b>Harry Potter –</b> neúmyslný viteál, zničen Voldemortem během bitvy o Bradavice.</p>
                </div>
            </div>






    </main>
    <?php require "../../assets/footer.php"; ?>
    <script src="../../js/header.js"></script>
</body>
</html>
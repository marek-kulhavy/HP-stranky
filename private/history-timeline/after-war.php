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
    <title>Porážka Voldemorta a konec války</title>
</head>
<body>
    <?php require "../../assets/header.php"; ?>

    <main>
   <section class="section">
            <h1>Porážka Voldemorta a konec války</h1>
            <div class="section-image">
                <div class="text-content">
                    <div class="first-paragraph">
                        <p>Po porážce lorda Voldemorta dne 2. května 1998 během Bitvy o Bradavice nastalo ve světě kouzelníků období obnovy. Voldemort byl zabit vlastní smrtící kletbou, která se obrátila proti němu kvůli tomu, že Bezová hůlka, již si přivlastnil, ve skutečnosti patřila Harrymu Potterovi a svého právoplatného pána nechtěla zabít. Bitva si vyžádala mnoho obětí, mezi nimi i Freda Weasleyho, Remuse Lupina, Nymfadoru Tonksovou a Severuse Snapea, který před svou smrtí Harrymu předal zásadní vzpomínky odhalující pravdu o své loajalitě i lásce k Lily Potterové.</p>
                    </div>
                </div>
                <div class="image-container">
                    <img src="../../images/timeline/celebrating-wizards.png" alt="Relikvie smrti">
                    <h3>Oslava po pádu Lorda Voldemorta</h3>
                </div>
            </div>
            <div class="another-text">
                <div class="text-content">
                    <h2>Obnova společnosti a Ministerstva kouzel</h2>
                    <p>Bezprostředně po bitvě bylo Ministerstvo kouzel očištěno od temných vlivů a moci se ujal Kingsley Pastorek jako dočasný, později trvale potvrzený ministr kouzel. Pod jeho vedením začaly rozsáhlé reformy, které měly napravit škody způsobené Voldemortovým režimem. Smrtijedi byli souzeni, přičemž mnozí tvrdili, že jednali pod vlivem kletby Imperius. Bradavice, které utrpěly značné škody, byly znovu opraveny a zůstaly otevřené pro výuku.</p>
                </div>
            </div>
            <div class="another-text">
                <div class="text-content">
                    <h2>Osudy Harryho Potter a Ginny Weasleyové</h2>
                    <p>Harry Potter po válce vstoupil do bystrozorského oddělení Ministerstva kouzel a rychle se stal jeho vedoucím. Velkou část kariéry věnoval boji proti temné magii a pomáhal přetvořit bystrozory v modernější, morálně odpovědnější složku. Oženil se s Ginny Weasleyovou, která se stala profesionální hráčkou famfrpálu a později sportovní redaktorkou Denního věštce. Spolu vychovávali tři děti: Jamese Siriuse, Albuse Severuse a Lily Lunu.</p>
                </div>
            </div>
            <div class="another-text">
                <div class="text-content">
                    <h2>Hermiona Grangerová a Ron Weasly po válce</h2>
                    <p>Hermiona Grangerová začala pracovat na Ministerstvu kouzel, kde se postupně vypracovala až na ministryni kouzel. Zasloužila se o zrušení diskriminačních zákonů vůči mudlovsky narozeným kouzelníkům a o celkovou modernizaci zákonodárství. Provdala se za Rona Weasleyho, který krátce působil jako bystrozor, ale později se připojil ke svému bratru Georgovi a stal se spolumajitelem a manažerem žertovného obchodu Weasleyových výbušných potřeb. Spolu s Hermionou měli dvě děti: Rose a Huga.</p>
                </div>
            </div>
            <div class="another-text">
                <div class="text-content">
                    <h2>Draco Malfoy a život po válce</h2>
                    <p>Draco Malfoy, ač vyrostl v prostředí čistokrevné nadřazenosti, se po válce distancoval od ideálů Smrtijedů. Oženil se s Astorií Greengrassovou a měli syna jménem Scorpius. Draco se stal spíše samotářem, ale snažil se syna vychovat k otevřenějšímu pohledu na svět. Jeho vztah s Harrym zůstal chladný, ale vzájemně se respektovali.</p>
                </div>
            </div>
            <div class="another-text">
                <div class="text-content">
                    <h2>Změny ve společnosti a Bradavicích</h2>
                    <p>Kouzelnická společnost se od roku 1998 výrazně proměnila. Zmizely zásadní projevy diskriminace, byly zrušeny některé archaické instituce a například Azkaban přestal být střežen mozkomory. Bradavice zůstaly důležitým centrem kouzelnického vzdělání, přičemž Minerva McGonagallová vedla školu po válce jako ředitelka.</p>
                </div>
            </div>
            <div class="another-text">
                <div class="text-content">
                    <h2>Rok 2017 – Nová generace nastupuje do Bradavic</h2>
                    <p>V roce 2017, devatenáct let po bitvě, posílají Harry, Ron a Hermiona své děti do Bradavic. Harryho prostřední syn Albus Severus Potter nastupuje do školy a brzy se spřátelí se Scorpiusem Malfoyem, což vyvolá napětí mezi jejich rodinami. Tento příběh je rozpracován v divadelní hře Harry Potter a Prokleté dítě, která se zabývá tématy otcovství, očekávání, přátelství a cestování časem. Děj hry není všemi fanoušky považován za plně kanonický, ale oficiálně navazuje na příběh z knih.</p>
                </div>
                    <div class="image-container">
                        <img src="../../images/timeline/hogwarts-express.png" alt="Relikvie smrti">
                        <h3>Spěšný vlak do Bradavic</h3>
                    </div>
            </div>






    </main>
    <?php require "../../assets/footer.php"; ?>
    <script src="../../js/header.js"></script>
</body>
</html>
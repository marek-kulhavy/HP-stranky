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
    <title>Statut utajení</title>
</head>
<body>
    <?php require "../../assets/header.php"; ?>

    <main>
   <section class="section">
            <h1>Povstání skřetů</h1>
            <div class="section-image">
                <div class="text-content">
                    <div class="first-paragraph">
                        <p>V první polovině 19. století došlo k jednomu z nejvýznamnějších a zároveň nejméně zmapovaných konfliktů v dějinách britského kouzelnického světa, k poslednímu velkému povstání skřetů. Ačkoli už předchozí století byla poznamenána četnými bouřemi a konflikty mezi kouzelníky a skřety, události kolem roku 1890 vyčnívají nejen svou silou a rozsahem, ale také novou podobou magie, která v nich hrála klíčovou roli.</p>
                        <p>Hlavní postavou tohoto povstání byl skřet Ranrok, vůdce radikální frakce, který odmítal nadále přijímat status skřetů jako druhořadých bytostí. Ranrok byl mimořádně inteligentní, strategický a na rozdíl od jiných skřetích vůdců minulosti ovládal a zároveň hledal přístup ke starodávné, tzv. prastaré magii, která byla kouzelnické veřejnosti téměř neznámá. Věřil, že právě tato magie, pocházející z časů před vznikem hůlek, by mohla dát jeho lidu svobodu a sílu postavit se kouzelníkům na roveň, nebo je i převýšit.</p>
                        <p>Konflikt nevznikl ze dne na den. Dlouhodobé napětí mezi kouzelníky a skřety vyeskalovalo poté, co Ministerstvo kouzel opětovně zamítlo petici za zrovnoprávnění skřetích práv. Skřeti nadále nesměli používat hůlky, ačkoli měli vlastní způsoby magie, a byli omezováni ve vzdělávání, zaměstnání i vlastnických právech. Z hlediska kouzelníků byla magie doménou lidí, zatímco skřeti byli vnímáni jako technicky schopní, ale společensky podřadní.</p>
                        <p>V tomto období Ranrok našel spojence mezi kouzelnickou spodinou, konkrétně v osobě temného čaroděje Viktora Rookwooda, který sdílel Ranrokovu nenávist vůči Ministerstvu. Jejich aliance byla výbušná: Ranrok poskytl Rookwoodovi přístup ke skřetím síťím a znalostem, zatímco Rookwood zajistil magické zbraně a temné artefakty. Společně začali organizovat systematické útoky na kouzelnické instituce, transportní systémy (např. Letaxovou síť) a dokonce i na Gringottovu banku, která byla paradoxně hlavním zaměstnavatelem skřetů.</p>
                        <p>Největší hrozbou však byla prastará magie, kterou Ranrok toužil plně ovládnout. Tato moc nebyla založena na hůlkách, ale na hlubokém propojení s emocemi, krví, pamětí a pradávnými runami. Ranrok věřil, že se mu pomocí magických relikvií podaří získat přístup k bezmezné síle, která by zničila kouzelnický monopol.</p>
                        <p>Odezva kouzelnické společnosti byla pomalá a roztříštěná. Ministerstvo kouzel nebylo na tak rozsáhlé povstání připraveno. Přestože byli povoláni bystrozoři, jejich metody selhávaly, nejen kvůli mocné magii, ale také proto, že Ranrok a jeho stoupenci působili z utajení, často hluboko pod zemí v opuštěných důlních systémech, kde byly relikvie prastaré magie ukryté.</p>
                        <p>V rozhodujícím bodě konfliktu se však objevil nečekaný hrdina, student pátého ročníku Bradavic, jehož jméno zůstává v oficiálních dějinách často nezmíněno. Tento student, schopný rovněž ovládat prastarou magii, sehrál klíčovou roli při zadržení Ranroka a zamezil tomu, aby jeho plán způsobil destrukci celého kouzelnického světa. V rozhodujícím střetu byl Ranrok zabit, ovšem cena byla vysoká. Ztráty na obou stranách byly značné.</p>
                        <p>Povstání bylo sice potlačeno, ale jeho důsledky hluboce poznamenaly magickou společnost. Zákony omezující práva magických bytostí byly zpřísněny, ne zrušeny. Skřeti byli znovu zatlačeni do role utlačovaného národa a magie, kterou Ranrok hledal, byla znovu pohřbena, ať už fyzicky nebo v archivech Ministerstva kouzel.</p>
                        <p>Ačkoli se v oficiálních učebnicích dějin čar a kouzel toto povstání často zmiňuje jen okrajově, mezi skřety žije jeho příběh dál, jako připomínka nejen jejich porážky, ale i odvahy postavit se za svá práva, i když za cenu velkých obětí.</p>
                    </div>
                </div>
                <div class="image-container">
                    <img src="../../images/timeline/ranrok.png" alt="Skřet Ranrok">
                    <h3>Ranrok</h3>
                </div>
            </div>


            




    </main>
    <?php require "../../assets/footer.php"; ?>
    <script src="../../js/header.js"></script>
</body>
</html>
<?php

require "../../classes/Auth.php";

// Kontrola, zda je uživatel přihlášený
if (!Auth::isLoggedIn()) {
    header("Location: /HP-stranky/login.php");
    exit;
}

// Pole s událostmi
$timelineEvents = [
    [
        'id' => 1,
        'year' => '10. století',
        'title' => 'Založení Bradavic',
        'short_desc' => 'Bradavická škola čar a kouzel byla založena kolem roku 990 n. l., v době pronásledování kouzelníků mudly. Založili ji čtyři mocní kouzelníci: Godrik Nebelvír, Helga z Mrzimoru, Rowena z Havraspáru a Salazar Zmijozel.',
        'detail_page' => 'hogwarts-foundation.php'
    ],
    [
        'id' => 2,
        'year' => '13. století',
        'title' => 'Vznik tří relikvií smrti',
        'short_desc' => 'Legenda o Třech relikviích smrti pochází z pohádky o třech bratrech, která je součástí knihy Bajky barda Beedleho. Vypráví o třech bratrech z rodu Peverellů, kteří se setkali se Smrtí a každý od ní obdržel mocný kouzelný předmět.',
        'detail_page' => 'deathly-hallows.php'
    ],
    [
        'id' => 3,
        'year' => '17. století',
        'title' => 'Statut utajení',
        'short_desc' => 'Statut utajení je mezinárodní kouzelnický zákon, který nařizuje, že kouzelnická komunita musí být utajena před mudly (nekouzelníky). Jeho hlavním cílem je ochrana kouzelníků a čarodějek před perzekucí, strachem, nenávistí nebo zneužitím ze strany mudlů.',
        'detail_page' => 'secrecy-statute.php'
    ],
    [
        'id' => 4,
        'year' => '19. století',
        'title' => 'Povstání skřetů',
        'short_desc' => 'V první polovině 19. století proběhlo poslední velké povstání skřetů, jeden z nejvýznamnějších a nejméně prozkoumaných konfliktů britského kouzelnického světa. Události kolem roku 1890 vynikaly svou intenzitou a zapojením nové formy magie.',
        'detail_page' => 'goblin-rebellion.php'
    ],
    [
        'id' => 5,
        'year' => '20. století',
        'title' => 'Grindelwaldova vláda',
        'short_desc' => 'Grindelwald působil od konce 19. do poloviny 20. století, nejvíce mezi lety 1920 až 1945, kdy vedl temné tažení za nadvládu čarodějů nad mudly. Byl považován za nejnebezpečnějšího černokněžníka své doby, dokud se neobjevil Voldemort. Zpočátku měl podporu, než se odhalily skutečné cíle jeho ideologie.',
        'detail_page' => 'grindelwald.php'
    ],
    [
        'id' => 6,
        'year' => '20. století',
        'title' => 'Tom Rojvolo Raddle',
        'short_desc' => 'Tom Rojvolo Raddle se narodil 31. prosince 1926 v Londýně. Jeho matka, Merope Gauntová, pocházela z degenerované větve potomků Salazara Zmijozela, zatímco jeho otec, Tom Raddle starší, byl mudla. Merope použila na Toma staršího lektvar lásky, aby ho získala, ale když přestala lektvar podávat, Tom ji opustil. Merope zemřela krátce po porodu, a tak Tom vyrůstal v sirotčinci, kde již v raném věku projevoval známky magie a manipulativního chování.',
        'detail_page' => 'voldemort.php'
    ],
    [
        'id' => 7,
        'year' => '1990 - 1998',
        'title' => 'Školské období Harryho Pottera',
        'short_desc' => 'Harry Potter vyrůstá u Dursleyových, své tety a strýce, kteří mu zamlčují jeho minulost a původ. Netuší, že je kouzelník, natož že v dětství porazil nejmocnějšího černokněžníka všech dob, lorda Voldemorta. V roce 1990 slaví své 10. narozeniny – stále bez tušení o svém skutečném původu. V kouzelnickém světě zatím panuje relativní klid. Voldemort je od roku 1981 považován za mrtvého, ale někteří – včetně Brumbála – se domnívají, že nebyl zcela zničen.',
        'detail_page' => 'potter.php'
    ],
    [
        'id' => 8,
        'year' => '1998 po součastnost',
        'title' => 'Porážka Voldemorta a konec války',
        'short_desc' => 'Po porážce lorda Voldemorta dne 2. května 1998 během Bitvy o Bradavice nastalo ve světě kouzelníků období obnovy. Voldemort byl zabit vlastní smrtící kletbou, která se obrátila proti němu kvůli tomu, že Bezová hůlka, již si přivlastnil, ve skutečnosti patřila Harrymu Potterovi a svého právoplatného pána nechtěla zabít. Bitva si vyžádala mnoho obětí, mezi nimi i Freda Weasleyho, Remuse Lupina, Nymfadoru Tonksovou a Severuse Snapea, který před svou smrtí Harrymu předal zásadní vzpomínky odhalující pravdu o své loajalitě i lásce k Lily Potterové.',
        'detail_page' => 'after-war.php'
    ],


];

?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/general.css">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/history-timeline.css">

    <link rel="stylesheet" href="../../query/header-query.css">
    <link rel="stylesheet" href="../../query/history-timeline-query.css">
    <link rel="shortcut icon" href="/HP-stranky/images/golden-snitch.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/b535256029.js" crossorigin="anonymous"></script>
    <title>Časová osa</title>
</head>
<body>
    <?php require "../../assets/header.php"; ?>

    <main>

        <h1>Obraceč času</h1>
        <div class="timeline-container">
            <div class="timeline">
                <?php foreach ($timelineEvents as $index => $event): ?>
                    <div class="event <?php echo $index % 2 == 0 ? 'left' : 'right'; ?>">
                        <?php if (!empty($event['detail_page'])): ?>
                            <a href="<?php echo htmlspecialchars($event['detail_page']); ?>" style="text-decoration: none; color: inherit;">
                        <?php endif; ?>

                        <div class="content">
                            <div class="year"><?php echo htmlspecialchars($event['year']); ?></div>
                            <h2><?php echo htmlspecialchars($event['title']); ?></h2>
                            <p><?php echo htmlspecialchars($event['short_desc']); ?></p>
                        </div>

                        <?php if (!empty($event['detail_page'])): ?>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </main>

    <?php require "../../assets/footer.php"; ?>
    <script src="../../js/header.js"></script>

</body>
</html>
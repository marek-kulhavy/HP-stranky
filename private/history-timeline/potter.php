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
    <title>Školské období Harryho Pottera</title>
</head>
<body>
    <?php require "../../assets/header.php"; ?>

    <main>
   <section class="section">
            <h1>Školské období Harryho Pottera</h1>
            <div class="section-image">
                <div class="text-content">
                    <div class="first-paragraph">
                        <p>Harry Potter vyrůstá u Dursleyových, své tety a strýce, kteří mu zamlčují jeho minulost a původ. Netuší, že je kouzelník, natož že v dětství porazil nejmocnějšího černokněžníka všech dob, lorda Voldemorta. V roce 1990 slaví své 10. narozeniny, stále bez tušení o svém skutečném původu. V kouzelnickém světě zatím panuje relativní klid. Voldemort je od roku 1981 považován za mrtvého, ale někteří, včetně Brumbála, se domnívají, že nebyl zcela zničen.</p>
                    </div>
                </div>
                <div class="image-container">
                    <img src="../../images/timeline/young-harry-potter.png" alt="Harry Potter">
                    <h3>Mladý Harry Potter</h3>
                </div>
            </div>
            <div class="another-text">
                <div class="text-content">
                    <h2>Harryho První rok v Bradavicích</h2>
                    <p>V létě 1991 dostává Harry dopis z Bradavic, který mu nakonec osobně předá Hagrid. 1. září 1991 nastupuje do školy čar a kouzel a je zařazen do nebelvírské koleje. Brzy se spřátelí s Ronym Weasleym a Hermionou Grangerovou. Zjistí, že v Bradavicích je ukrytý Kámen mudrců, který chce Voldemort získat pomocí profesora Quirrella. Na konci školního roku Harry s přáteli překonává nástrahy chránící kámen a zabrání Voldemortovi v jeho získání. Quirrell zemře a Voldemort uprchne, ale přežije.</p>
                </div>
            </div>
            <div class="another-text">
                <div class="text-content">
                    <h2>Tajemná komnata a první viteál</h2>
                    <p>Ve druhém ročníku je škola ochromena záhadnými útoky na studenty. Harry zjistí, že Tajemná komnata byla znovu otevřena a že v ní žije bazilišek, ovládaný duchem Toma Raddla, mladého Voldemorta. Ukáže se, že Ginny Weasleyová byla zmanipulována pomocí starého deníku, který je ve skutečnosti viteálem. Harry zabije baziliška a zničí deník, čímž nechtěně zničí první viteál. Tajemná komnata je zapečetěna, Ginny zachráněna a školní rok dojde ke svému konci.</p>
                </div>
            </div>
            <div class="another-text">
                <div class="text-content">
                    <h2>Útěk Siriuse Blacka a zrada Pettigrewa</h2>
                    <p>Třetí rok začíná zprávou, že z Azkabanu uprchl Sirius Black, údajný zrádce a vrah. Během roku Harry zjistí pravdu: Sirius je jeho kmotr a nevinný. Skutečný viník, Peter Pettigrew, dlouho žil v přestrojení jako Ronův krysa Prašivka. Pettigrew uniká, což umožní Voldemortovi získat služebníka k budoucímu návratu. Dementorové, střežící školu, ohrožují studenty i Harryho, který se naučí patronovo kouzlo. Sirius uniká a Harry získává důležité spojení s vlastní rodinou.</p>
                </div>
                <div class="image-container">
                    <img src="../../images/timeline/hipogryf.png" alt="Klofan">
                    <h3>Klofan a Sirius Black</h3>
                </div>
            </div>
            <div class="another-text">
                <div class="text-content">
                    <h2>Turnaj tří kouzelníků a Voldemortův návrat</h2>
                    <p>Do Bradavic přijíždějí delegace z Krásnohůlek a Kruvalu na prestižní Turnaj tří kouzelníků. Harry je záhadně vybrán jako čtvrtý účastník navzdory věkovému omezení. V turnaji plní tři náročné úkoly. Finále končí tragédií: Harry a Cedric Diggory jsou přeneseni na hřbitov, kde je Cedric zabit a Voldemort získává zpět tělo. Pomocí rituálu s Pettigrewem je zcela obnoven. Harry utíká zpět do Bradavic s tělem Cedrica. Kouzelnický svět mu však zprvu nevěří.</p>
                </div>
            </div>
            <div class="another-text">
                <div class="text-content">
                    <h2>Odpor, Brumbálova armáda a smrt siriuse</h2>
                    <p>Ministerstvo kouzel se snaží ututlat návrat Voldemorta. Do Bradavic je dosazena Dolores Umbridgeová, která ovládne školu a zakazuje obranu proti černé magii. Harry, Ron a Hermiona zakládají tajnou skupinu Brumbálovu armádu, kde se studenti učí skutečná obranná kouzla. Na konci roku Harry má vizi, že je Sirius mučen. Vydává se s přáteli na ministerstvo, kde dojde k bitvě na Odboru záhad. Smrtijedi přepadnou skupinu, ale zasahují členové Fénixova řádu. Sirius Black je v bitvě zabit. Voldemort se zjeví a poprvé je znovu spatřen veřejně, což přinutí ministerstvo přiznat pravdu.</p>
                </div>
            </div>
            <div class="another-text">
                <div class="text-content">
                    <h2>Pátrání po viteálech a smrt Brumbála</h2>
                    <p>Harry v šestém ročníku pod vedením Brumbála pátrá po původu Voldemortových viteálů, objektů obsahujících části jeho duše. Zároveň se dozvídá více o Voldemortově dětství a temné magii. Draco Malfoy dostává za úkol zabít Brumbála a školou se plíží smrtijedi. Na konci roku Brumbál a Harry naleznou falešný viteál. Když se vracejí, Brumbál je smrtelně oslaben. Snape ho na jeho vlastní žádost usmrtí, čímž dokončuje předem domluvený plán. Bradavice jsou napadeny a budoucnost školy je nejistá.</p>
                </div>
                <div class="image-container">
                    <img src="../../images/timeline/dumbledore-funreal.png" alt="Klofan">
                    <h3>Pohřeb Albuse Brumbála</h3>
                </div>
            </div>
            <div class="another-text">
                <div class="text-content">
                    <h2>Bitva o Bradavice</h2>
                    <p>Harry, Ron a Hermiona se nevracejí do Bradavic, ale vydávají se hledat a ničit viteály. Putují po celé Británii, čelí nebezpečím a objevují další tajemství Voldemortovy minulosti. Mezitím smrtijedi ovládají ministerstvo i Bradavice, kde vládnou tyransky. V květnu 1998 se Harry vrací do Bradavic, kde se koná rozhodující bitva. Umírá mnoho přátel, včetně Freda Weasleyho, Lupina a Tonksové. Harry se obětuje, přežije a nakonec porazí Voldemorta. Válka končí a Bradavice i celý kouzelnický svět se začínají uzdravovat.</p>
                </div>
            </div>






    </main>
    <?php require "../../assets/footer.php"; ?>
    <script src="../../js/header.js"></script>
</body>
</html>
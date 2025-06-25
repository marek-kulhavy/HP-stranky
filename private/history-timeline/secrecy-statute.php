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
            <h1>Statut utajení</h1>
            <div class="section-image">
                <div class="text-content">
                    <div class="first-paragraph">
                        <p>Statut utajení je klíčový mezinárodní kouzelnický zákon, který byl přijat s cílem chránit kouzelnickou komunitu před odhalením a nežádoucí pozorností ze strany nekouzelníků, známých jako mudlové. Tento zákon přikazuje, aby veškeré aspekty kouzelnického života včetně magie, magických tvorů, čarodějnických škol a kouzelnických institucí zůstaly přísně skryty před mudlovskou společností.</p>
                        <p>Důvodem pro zavedení Statutu utajení byla historická zkušenost kouzelnické komunity s pronásledováním, strachem a nesnášenlivostí ze strany mudlů. Ve středověku a raném novověku byli kouzelníci a čarodějky často obviňováni z čarodějnictví a upalováni na hranici, a to přestože mnozí z nich se uměli bránit nebo používali kouzla k úniku. Přesto byl tlak mudlovské společnosti natolik silný, že kouzelnický svět dospěl k rozhodnutí se před nimi zcela skrýt.</p>
                        <p>Statut utajení byl oficiálně přijat v roce 1692 Mezinárodní konfederací kouzelníků. Od té doby se stalo porušení tohoto statutu závažným přestupkem, za který mohou být jednotlivci nebo celé instituce pohnáni k odpovědnosti. Každá kouzelnická vláda je povinna zajistit, že její komunita dodržuje zásady utajení, což zahrnuje například očarování oblastí obývaných kouzelníky, utajení existence magických tvorů nebo upravení paměti mudlům, kteří by náhodou byli svědky kouzla.</p>
                        <p>Cílem tohoto zákona není pouze ochrana kouzelníků před perzekucí, ale i udržení rovnováhy mezi oběma světy. Odhalení magie by mohlo mít pro mudlovský svět katastrofální důsledky, například paniku, snahu o zneužití magie pro vlastní účely, nebo dokonce války a pokusy o ovládnutí kouzelnického světa. Statut utajení tak tvoří základní kámen mírového soužití obou světů, i když v oddělení a tajemství.</p>
                    </div>
                </div>
                <div class="image-container">
                    <img src="../../images/timeline/ministry-of-magic.png" alt="Ministerstvo kouzel">
                    <h3>Ministerstvo kouzel</h3>
                </div>
            </div>

            <h4>Důsledky porušení statutu utajení</h4>
            <div class="another-text">
                <div class="text-content">
                    <p>Porušení Statutu utajení je považováno za závažný přestupek proti mezinárodnímu kouzelnickému právu. Pokud dojde k odhalení magie před mudly, je nutné okamžitě přijmout nápravná opatření. Nejčastěji se jedná o vymazání vzpomínek svědkům pomocí kouzla Obliviate, které používají speciálně vyškolení čarodějové zvaní obliviátoři. Cílem tohoto opatření je zabránit šíření informací o existenci kouzelnického světa mezi mudly.</p>
                    <p>Následně může být zahájeno vyšetřování Oddělením pro dohled nad kouzly, které zjišťuje, jak k porušení došlo, kdo je odpovědný a jaké kroky je třeba podniknout. V případě, že je shledán konkrétní viník, hrozí mu sankce v závislosti na závažnosti přestupku. Tyto tresty mohou zahrnovat peněžitou pokutu, dočasné nebo trvalé odebrání kouzelnické hůlky, nebo v krajních případech dokonce uvěznění v Azkabanu, nechvalně známé kouzelnické věznici střežené mozkomory.</p>
                    <h4>Instituce dohlížející na dodržování Statutu</h4>
                    <p>Na dodržování Statutu utajení dohlíží několik specializovaných složek Ministerstva kouzel, každá s odlišnou působností:</p>
                    <p><b>Oddělení pro uplatňování kouzelnického práva</b> je hlavním výkonným orgánem, který zajišťuje, že kouzelníci jednají v souladu se zákony. Řeší přestupky proti Statutu a rozhoduje o trestech.</p>
                    <p><b>Úřad pro styk s mudly</b> má na starosti správné a bezpečné soužití mezi kouzelnickým a mudlovským světem. Zajišťuje, že nedojde k neúmyslnému prozrazení magie, například skrze kouzelné předměty nebo nevhodné chování kouzelníků v mudlovském prostředí.</p>
                    <p><b>Oddělení pro regulaci a kontrolu magických tvorů</b> má klíčovou roli především v oblasti ochrany mudlů před nebezpečnými tvory, kteří by mohli ohrozit utajení. Jde například o sledování a ukrývání tvorů jako jsou draci, hipogryfové, jednorožci nebo bazilišci.</p>
                    <p><b>Obliviátoři</b>, jak již bylo zmíněno, jsou vysoce kvalifikovaní pracovníci, kteří mají na starosti vymazávání vzpomínek mudlům, pokud dojde k jejich kontaktu s magií. Jejich práce je klíčová pro udržení kouzelnického světa v tajnosti.</p>
                </div>
            </div>



        </section>



    </main>
    <?php require "../../assets/footer.php"; ?>
    <script src="../../js/header.js"></script>
</body>
</html>
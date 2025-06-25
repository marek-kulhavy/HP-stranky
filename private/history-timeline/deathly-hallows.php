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
    <title>Relikvie smrti</title>
</head>
<body>
    <?php require "../../assets/header.php"; ?>

    <main>
        <section class="section">
            <h1>Relikvie smrti</h1>
            <div class="section-image">
                <div class="text-content">
                    <div class="first-paragraph">
                        <p>Legenda o Třech relikviích smrti je jedním z nejmystičtějších a zároveň nejzásadnějších příběhů kouzelnického světa. Její původ sahá k pohádce Bajka o třech bratrech, která je součástí sbírky Bajky barda Beedleho, často předávané kouzelnickým dětem po generace. Tato pohádka se však od běžných kouzelnických pověstí liší svou temnější a hlubší symbolikou. Vypráví o třech bratrech, údajně členech pradávné a významné kouzelnické rodiny Peverellů, kteří se vydali na cestu a díky svým magickým schopnostem dokázali přelstít smrtelně nebezpečný přechod přes řeku</p>
                        <h2>Příběh tří bratří</h2>
                        <p>Příběh o třech bratrech vypráví o třech čarodějích jménem Antioch, Cadmus a Ignotus Peverell, kteří se jednoho dne na své cestě setkali s nebezpečnou, hlubokou řekou, jež mnoha jiným poutníkům znamenala smrt. Bratři však byli zběhlí v magii, a tak místo toho, aby riskovali život, vyčarovali kouzelný most, po kterém bezpečně přešli na druhý břeh. Tím ale přelstili samotnou Smrt, která se cítila ošizena o duše, které jí právem náležely. V přestrojení za postavu v kápi se jim zjevila a předstírala vděčnost. Tvrdila, že za jejich dovednost a odvahu jim každému splní jedno přání.</p>
                        <p>Nejstarší z bratrů, Antioch, byl pyšný a toužil po moci. Požádal proto o nejmocnější hůlku, která kdy existovala, a Smrt mu vyřezala hůl z bezového dřeva. Tato hůlka, známá jako Bezová hůl, měla přemoci každého protivníka a stát se symbolem neporazitelnosti. Druhý bratr, Cadmus, truchlil po své mrtvé milé a přál si přivést mrtvé zpět k životu. Smrt mu tedy dala kámen, který dokázal mrtvé znovu přivolat ze záhrobí, ale ne tak, jak si představoval, bytosti se vracely jen jako stín původního života. Nejmladší z bratrů, Ignotus, byl moudrý a pokorný. Nepřál si slávu ani moc, ale bezpečí. Požádal o možnost uniknout smrti, a tak mu Smrt předala plášť, který dokázal svého nositele dokonale ukrýt před zrakem, i před Smrtí samotnou.</p>
                        <p>Každý z bratrů pak odešel svou cestou. Antioch se chlubil svou hůlkou, což vedlo k jeho vraždě a ztrátě relikvie. Cadmus se pokusil žít s duchem své milované, ale její chladná přítomnost ho dohnala k zoufalství a k vlastní smrti. Jen Ignotus použil svůj dar s rozvahou a celý život nosil plášť, dokud nezestárl a dobrovolně ho nepředal dál. Nakonec se setkal se Smrtí jako se starým přítelem a odešel s ní pokojně. Tak se zrodila legenda o Třech relikviích smrti, o třech předmětech, které dohromady tvoří symbol smrti, moci a osudu.</p>
                        <h2>Pochybnosti o příběhu</h2>
                        <p>Příběh o Třech relikviích smrti je často vyprávěn jako pohádka, jejímž cílem je poučit mladé kouzelníky o nebezpečí pýchy, moci a nedůvěry. V této podobě je Smrt zobrazena jako skutečná bytost, která se zjeví třem bratrům a každému z nich předá magický předmět. Někteří učenci, například Albus Brumbál, však zastávají názor, že pohádka není doslovně pravdivá. Domnívají se, že relikvie nevznikly jako dary od personifikované Smrti, ale že si je bratři Peverellové vytvořili sami díky svým výjimečným schopnostem. Tato interpretace přisuzuje vznik relikvií lidskému původu, nikoliv zásahu nadpřirozené síly.</p>
                        <p>Rodina Peverellových je v historii kouzelnického světa považována za mimořádně nadanou a vlivnou. Antioch Peverell bývá považován za prvního známého vlastníka Bezové hůlky. Tato hůlka se následně stala objektem touhy mnoha čarodějů a její krvavá historie ji obestírá tajemstvím a strachem. Cadmus Peverell je zase spojován s Kamenem vzkříšení. Tento předmět se podle záznamů dostal do prstenu, který patřil rodu Gauntů, přímým potomkům Salazara Zmijozela a zároveň předkům Lorda Voldemorta. Prsten se tak stal nejen symbolem relikvie smrti, ale také nositelem kletby a tragického dědictví.</p>
                        <p>Ignotus Peverell, nejmladší z bratrů, vlastnil Neviditelný plášť, který se jako jediná relikvie předával klidně a v rámci rodiny. Tento plášť se uchoval po generace a nakonec se dostal až k Harrymu Potterovi, čímž se spojila minulost s přítomností a pohádka s realitou. Jeho příběh je důkazem, že relikvie skutečně existují a že kořeny legendy o třech bratrech lze najít ve skutečných dějinách kouzelnického světa. Pohádka tak může být spíše alegorií, jejímž základem je reálná událost zkreslená časem a vyprávěním.</p>
                    </div>
                </div>
                    <div class="image-container">
                        <img src="../../images/timeline/peverell_brothers.png" alt="Bratři Peverellové">
                        <h3>Bratři - Antioch, Cadmus a Ignotus Peverellovi</h3>
                    </div>
            </div>

            <!-- Popis relikvií smrti -->
            <h4>Popis Relikvií smrti</h4>
            <div class="another-text">
                <div class="text-content">
                    <h2>Bezová hůlka</h2>
                        <p>Bezová hůlka je nejmocnější čarodějnická hůlka, jaká kdy byla vytvořena. Podle legendy ji dostal nejstarší z bratrů Peverellů, Antioch, jako dar od samotné Smrti. Hůlka je vyrobena z bezového dřeva a její jádro tvoří chlup z ocasního testrála, což je magický tvor, kterého mohou spatřit pouze ti, kdo byli svědky smrti. Tato kombinace ji činí výjimečně silnou a zároveň nebezpečnou. Hůlka je schopna provádět kouzla s větší silou a přesností než běžné hůlky, ale váže se pouze k tomu, kdo přemůže jejího předchozího majitele, ať už zabitím nebo jinou formou porážky. Její moc vedla k mnoha vraždám, protože ti, kdo ji vlastnili, byli často napadeni kvůli její síle. Během historie prošla rukama mnoha mocných kouzelníků, včetně Grindelwalda a Brumbála, než se dostala k Harrymu Potterovi, který se nakonec rozhodl její krvavou historii ukončit a hůlku vrátil do Brumbálova hrobu.</p>
                </div>
                <div class="image-container">
                    <img src="../../images/timeline/elder_wand.png" alt="Relikvie smrti">
                    <h3>Bezová hůlka</h3>
                </div>
            </div>
            <div class="another-text">
                <div class="text-content">
                    <h2>Kámen vzkříšení</h2>
                        <p>Kámen vzkříšení je druhou relikvií smrti a byl údajně darován druhému bratrovi, Cadmovi Peverellovi. Cadmus si přál mít moc přivést své milované zpět ze světa mrtvých a kámen mu umožnil znovu spatřit svou zesnulou snoubenku. Ukázalo se však, že ti, kdo se vrátí, nejsou skutečně živí. Jsou to stíny nebo přízraky, chladní a vzdálení, což Cadmuse nakonec přivedlo k šílenství a sebevraždě. Kámen se později dostal do rukou potomků rodu Gauntů, kde byl zasazen do prstenu a stal se jedním z viteálů lorda Voldemorta. Když jej později našel Albus Brumbál, prsten byl prokletý a Brumbál po jeho doteku utrpěl smrtelné zranění. Kámen nakonec skončil u Harryho Pottera, který jej našel uvnitř Zlatonky a krátce jej použil, aby se rozloučil s duchy svých nejbližších předtím, než se vydal obětovat Voldemortovi. Poté ho nechal ležet v Zapovězeném lese a kámen se navždy ztratil.</p>
                </div>
                <div class="image-container">
                    <img src="../../images/timeline/ressurection_stone.png" alt="Relikvie smrti">
                    <h3>Kámen vzkříšení</h3>
                </div>
            </div>
            <div class="another-text">
                <div class="text-content">
                    <h2>Neviditelný plášť</h2>
                        <p>Neviditelný plášť, třetí a nejmírnější z relikvií, byl darován nejmladšímu z bratrů, Ignotovi Peverellovi. Ten si přál vyhnout se Smrti, a tak mu byl dán plášť, který ho dokázal zcela ukrýt nejen před zrakem lidí, ale i před kouzly a magickými prostředky sledování. Na rozdíl od běžných plášťů s kouzlem neviditelnosti, které časem slábnou, je tento plášť věčný, neopotřebovatelný a odolný vůči jakékoliv magii. Ignotus ho používal po celý život a před svou smrtí jej předal svému synovi, čímž začala rodová linie, v níž se plášť dědil až k Jamesi Potterovi a následně k Harrymu. Harry plášť využíval často při svých dobrodružstvích v Bradavicích, při plnění úkolů i při skrývání se před nepřáteli. Ze všech tří relikvií je právě plášť považován za nejčistší a nejméně zkažený. Je symbolem moudrosti, pokory a schopnosti žít v souladu se smrtí namísto snahy ji přemoci.</p>
                </div>
                <div class="image-container">
                    <img src="../../images/timeline/cloak_of_invisibility.png" alt="Relikvie smrti">
                    <h3>Neviditelný plášť</h3>
                </div>
            </div>




        </section>
    </main>
    <?php require "../../assets/footer.php"; ?>
    <script src="../../js/header.js"></script>
</body>
</html>
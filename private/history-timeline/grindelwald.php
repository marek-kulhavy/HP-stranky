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
    <title>Gellert Grindelwald</title>
</head>
<body>
    <?php require "../../assets/header.php"; ?>

    <main>
   <section class="section">
            <h1>Grindelwaldova vláda</h1>
            <div class="section-image">
                <div class="text-content">
                    <div class="first-paragraph">
                        <p>Období Grindelwaldova vlivu sahá přibližně od konce 19. století do poloviny 20. století. Nejvýrazněji se zapsal do dějin čarodějnického světa mezi lety 1920 až 1945, kdy vedl temné, ale ideologicky motivované tažení za převzetí moci čaroději nad mudly. Byl považován za nejnebezpečnějšího černokněžníka své doby, dokud se o dekády později neobjevil lord Voldemort. Grindelwaldovo působení zasahovalo převážně Evropu, a mnozí čarodějové jej zpočátku obdivovali, než se naplno ukázala temná stránka jeho vize.</p>
                    </div>
                </div>
                <div class="image-container">
                    <img src="../../images/timeline/gellert-grindelwald.png" alt="Gellert Grindelwald">
                    <h3>Gellert Grindelwald</h3>
                </div>
            </div>
            <div class="another-text">
                <div class="text-content">
                    <h2>Gellert Grindelwald</h2>
                    <p>Gellert Grindelwald se narodil kolem roku 1883 a navštěvoval školu čar a kouzel Durmstrang. Tato škola je známá svou otevřeností vůči černé magii, a Grindelwald byl jedním z jejích nejbystřejších, ale zároveň nejvíce nebezpečných studentů. Byl však ze školy vyloučen kvůli krutým experimentům a posedlosti mocí. V mládí byl nesmírně charismatický a vizionářský, což mu umožnilo získávat stoupence. Jeho myšlenky nebyly na první pohled čistě zlé, toužil po lepším světě, kde by čarodějové vedli společnost, ale pod povrchem byla jeho ideologie autoritářská a krutá.</p>
                </div>
            </div>
            <div class="another-text">
                <div class="text-content">
                    <h2>Vztah s Albusem Brumbálem</h2>
                    <p>Po svém vyloučení z Kruvalu odešel Grindelwald do Godrikova dolu, kde se setkal s mladým Albusem Brumbálem. Oba byli v té době mimořádně nadaní a ambiciózní, a rychle si padli do noty jejich přátelství bylo hluboké a zřejmě i romanticky zabarvené, přinejmenším z Brumbálovi strany. Společně snili o nalezení Relikvií smrti a vytvoření nového světového řádu, v němž by čarodějové moudře vládli mudlům. Jejich vize se ale začala měnit ve fanatismus, což vyústilo v osudový konflikt mezi Gellertem, Albusem a Albusovým bratrem Aberforthem. Během následné hádky a souboje tragicky zemřela jejich sestra Ariana, což znamenalo definitivní rozpad jejich vztahu.</p>
                </div>
            </div>
            <div class="another-text">
                <div class="text-content">
                    <h2>Hnutí „pro větší dobro“ a jeho ideologie</h2>
                    <p>Po rozchodu s Brumbálem se Grindelwald pustil do realizace svých plánů bez něj. Jeho filozofie se opírala o myšlenku, že čarodějové by měli vést svět, nejen ve skrytu, ale otevřeně, a to „pro větší dobro“. Tento slogan se stal mottem jeho hnutí a zároveň ospravedlněním násilí, manipulace a smrti. Grindelwald nesdílel Voldemortovu posedlost čistokrevností, ale byl hluboce přesvědčen, že čarodějové jsou nadřazenou vrstvou společnosti. V rámci svého tažení vytvořil pevnost zvanou Nurmengard, která sloužila jako vězení pro jeho odpůrce. Paradoxně zde skončil i on sám po svém pádu.</p>
                </div>
            </div>
            <div class="another-text">
                <div class="text-content">
                    <h2>Relikvie smrti a bezová hůlka</h2>
                    <p>Grindelwald byl posedlý legendou o Relikviích smrti, zejména Bezovou hůlkou, nejmocnější kouzelnickou hůlkou v dějinách. Věřil, že když ji získá, bude prakticky neporazitelný a jeho revoluce se stane nezastavitelnou. Nakonec se mu skutečně podařilo hůlku získat, ukradl ji z hrobu výrobce hůlek Gregoroviče. Tato hůlka mu umožnila porazit mnoho silných protivníků a upevnit svou moc. Symbol tří relikvií (kruh, trojúhelník a čára) se stal znakem jeho hnutí, ačkoliv jeho pravý význam byl veřejnosti většinou neznámý.</p>
                </div>
            </div>
            <div class="another-text">
                <div class="text-content">
                    <h2>Vliv a hrozba pro celý kouzelnický svět</h2>
                    <p>Grindelwaldovy činy hluboce zasáhly mezinárodní společenství kouzelníků. Jeho vliv byl nejcitelnější v Evropě, ale jeho ideje se šířily i dál. V mnohém jeho činnost paralelně kopírovala mudlovskou druhou světovou válku, odehrával se v pozadí této éry jako stínová hrozba. Grindelwald vedl skrytou válku proti Mezinárodní konfederaci kouzelníků a Ministerstvu kouzel v několika zemích. Nebál se vražd, ničení ani šíření strachu. Někteří čarodějové se k němu přidali z přesvědčení, jiní ze strachu.</p>
                </div>
            </div>
            <div class="another-text">
                <div class="text-content">
                    <h2>Duel s Brumbálem a pád v roce 1945</h2>
                    <p>Nakonec byl Gellert Grindelwald zastaven v roce 1945, kdy ho porazil Albus Brumbál v jednom z nejznámějších a nejlegendárnějších kouzelnických duelů v dějinách. Tato událost je často připomínána v učebnicích i ve školách čar a kouzel. Přestože se Brumbál duelu dlouho vyhýbal kvůli jejich osobní historii, nakonec uznal, že je jeho povinností Grindelwalda zastavit. Po porážce byl Grindelwald uvězněn ve své vlastní pevnosti Nurmengard, kde zůstal přes padesát let. V roce 1998 ho navštívil lord Voldemort, aby získal informace o Bezové hůlce, Grindelwald mu ale odmítl posloužit, čímž prokázal možná poslední záblesk cti. Voldemort ho zabil.</p>
                </div>
            </div>






    </main>
    <?php require "../../assets/footer.php"; ?>
    <script src="../../js/header.js"></script>
</body>
</html>
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
    <title>Založení Bradavic</title>
</head>
<body>
    <?php require "../../assets/header.php"; ?>

    <main>
        <section class="section">
                    <h1>Založení Bradavic</h1>
                    <div class="section-image">
                        <div class="text-content">
                            <div class="first-paragraph">
                                <p>Bradavická škola čar a kouzel (Hogwarts School of Witchcraft and Wizardry) byla založena přibližně v 10. století, kolem roku 990 n. l. Přesné datum jejího vzniku není známo, protože rané dějiny čarodějného světa jsou často zahaleny tajemstvím, zkresleny ústním podáním a propleteny s legendami, které se předávaly z generace na generaci. V tomto období nebylo běžné vést písemné záznamy, obzvlášť mezi čaroději, kteří se snažili svou existenci utajit před nekouzelnickým obyvatelstvem.</p>
                                <p>Škola byla založena čtyřmi největšími a nejmocnějšími čaroději a čarodějkami své doby: Godrikem Nebelvírem, Helgou z Mrzimoru, Rowenou z Havraspáru a Salazarem Zmijozelem. Tito zakladatelé sdíleli vizi vytvořit bezpečné místo, kde by mladí kouzelníci a čarodějky mohli rozvíjet své schopnosti, učit se magii a chránit se před vnějším světem, který byl k magii často nepřátelský.</p>
                                <p>Zakladatelé chtěli vytvořit bezpečné místo, kde by se mladí kouzelníci a čarodějky mohli učit kouzla a rozvíjet své schopnosti bez strachu z pronásledování. Každý zakladatel měl svou vlastní představu o tom, jaké vlastnosti by měli studenti mít, což vedlo k vytvoření čtyř kolejí kdy každá kolej odráží hodnoty svého zakladatele.</p>
                                <h2>Spor mezi zakladateli</h2>
                                <p>Zpočátku zakladatelé Bradavic spolupracovali v relativní harmonii, avšak postupem času mezi nimi začaly narůstat neshody, především mezi Salazarem Zmijozelem a zbylými třemi zakladateli. Zmijozel totiž pevně věřil, že výuka magie by měla být vyhrazena pouze čistokrevným kouzelníkům, tedy těm, jejichž oba rodiče byli kouzelníci.</p>
                                <p>Před odchodem se zakladatelé rozhodli, jak zajistit výběr studentů do jednotlivých kolejí i po své smrti. Godrik Nebelvír sundal svůj klobouk, do kterého každý ze zakladatelů vložil svou moudrost a kouzla. Tak vznikl Moudrý klobouk (Sorting Hat), který rozděluje nové studenty do kolejí dodnes.</p>
                                <h2>Umístění školy</h2>
                                <p>Bradavice se nacházejí na skotské Vysočině, skryté kouzly, která zabraňují mudlům školu vidět. Pokud se k ní mudla přiblíží, uvidí pouze zříceninu s varovnými cedulemi jako "Nebezpečí, vstup zakázán." Škola je chráněna mnoha mocnými kouzly a zaklínadly.</p>
                            </div>
                            
                        </div>
                            <div class="image-container">
                                <img src="../../images/timeline/hogwarts-founders.png" alt="Zakladatelé Bradavic">
                                <h3>Škola čar a kouzel v Bradavicích</h3>
                            </div>
                    </div>

                    <!-- Zakladatelé bradavic -->
                    <h4>Zakladatelé Bradavic</h4>
                    <div class="intro-text">
                        <p>Zakladatelé Bradavické školy čar a kouzel byli čtyři výjimeční čarodějové a čarodějky, kteří se rozhodli vytvořit místo, kde by se mladí kouzelníci mohli učit ovládat své schopnosti. Každý z nich měl odlišný pohled na to, jaké vlastnosti by měli mít ideální studenti, což se odrazilo ve vytvoření čtyř kolejí školy, každá nesoucí jméno po jednom zakladateli.</p>
                    </div>

                    <div class="another-text">
                        <div class="text-content">
                            <h2>Godrik Nebelvír</h2>
                            <p>Godric Nebelvír byl statečný a čestný kouzelník, který si nejvíce cenil odvahy, rytířství a ochoty postavit se za to, co je správné. Věřil, že pravý čaroděj nebo čarodějka by neměli být hodnoceni podle původu, ale podle srdce, a proto byl zastáncem rovného přístupu ke vzdělání pro všechny kouzelné děti.</p>
                            <p>Godric stál za ideou otevřenosti a čelil i neshodám s ostatními zakladateli, když šlo o čistotu krve. Jeho kolej, Nebelvír, nese jeho jméno a zrcadlí jeho ideály, váží si odhodlanosti, čestnosti a statečnosti.</p>
                            <p>Godric byl také známý svou výjimečnou schopností vést druhé a inspirovat je k hrdinským činům. Měl vrozený smysl pro spravedlnost a nebál se vystoupit ani proti těm, které měl rád, pokud šlo o ochranu slabších nebo o prosazení dobra. Jeho povaha z něj činila přirozeného vůdce a symbol morální síly, která se přenáší na každého, kdo je součástí jeho odkazu.</p>
                        </div>
                        <div class="image-container">
                            <img src="../../images/timeline/godric_gryffindor.png" alt="Godrik Nebelvír">
                            <h3>Godrik Nebelvír</h3>
                        </div>
                    </div>

                    <div class="another-text">
                        <div class="text-content">
                            <h2>Helga z Mrzimoru</h2>
                            <p>Helga z Mrzimoru byla laskavá, spravedlivá a nesmírně pracovitá čarodějka, která si nejvíce cenila poctivosti, přátelství a ochoty pomáhat ostatním. Věřila, že každý student si zaslouží šanci, pokud je ochoten pracovat a učit se.</p>
                            <p>Helga se výrazně podílela na tom, aby byla Bradavická škola nejen místem učení, ale i bezpečným a příjemným domovem. Její kolej, Mrzimor, je známá svou přívětivostí a důrazem na férovost, spolupráci a loajalitu.</p>
                            <p>Helga byla také výjimečnou čarodějkou v oblasti kouzel spojených s každodenním životem, přičemž mnohé z jejích receptů a magických postupů se používají v Bradavicích dodnes. Často se věnovala kouzelnické gastronomii a traduje se, že právě ona položila základy pro kouzelnickou kuchyni ve školní jídelně. Její magie měla vždy sloužit druhým, a proto je i dnes vnímána jako zosobnění laskavosti a nezištnosti, která činí školu místem, kde se každý může cítit přijatý.</p>
                        </div>
                        <div class="image-container">
                            <img src="../../images/timeline/helga_hufflepuff.png" alt="Helga z Mrzimoru">
                            <h3>Helga z Mrzimoru</h3>
                        </div>
                    </div>

                    <div class="another-text">
                        <div class="text-content">
                            <h2>Rowena z Havraspáru</h2>
                            <p>Rowena z Havraspáru byla mimořádně inteligentní a vynalézavá čarodějka, která si nejvíce cenila moudrosti, učenosti a originálního myšlení. Pro ni byla magie cestou poznání a neustálého objevování.</p>
                            <p>Její kolej, Havraspár, přitahuje ty, kteří se vyznačují intelektem, zvídavostí a touhou rozumět světu kolem sebe. Rowena byla známá nejen svou brilantností, ale i jistým odstupem, kladla důraz na individualitu a duševní sílu.</p>
                            <p>Rowena byla rovněž velkou obdivovatelkou krásy ve všech jejích podobách, ať už šlo o umění, architekturu nebo čistotu myšlenek. Říká se, že byla autorkou mnoha kouzel, která spojují funkčnost s estetikou, a že se významně podílela na kouzelném uspořádání hradu, včetně proměnlivých schodišť a skrytých chodeb. Přestože působila rezervovaně, hluboce věřila ve vnitřní svět každého jednotlivce a v sílu poznání, která může změnit nejen jednotlivce, ale i celý kouzelnický svět.</p>
                        </div>
                        <div class="image-container">
                            <img src="../../images/timeline/rowen_ravenclaw.png" alt="Rowena z Havraspáru">
                            <h3>Rowena z Havraspáru</h3>
                        </div>
                    </div>

                    <div class="another-text">
                        <div class="text-content">
                            <h2>Salazar Zmijozel</h2>
                            <p>Salazar Zmijozel byl mocný, ctižádostivý a silně hrdý čaroděj, který si nejvíce cenil urozeného původu, důvtipu a síly vůle. Věřil, že magická krev má být chráněna, a že jen ti s čistým čarodějnickým dědictvím mají skutečný potenciál.</p>
                            <p>Zmijozelova kolej se soustředí na ctižádost, vynalézavost a schopnost dosáhnout svých cílů za každou cenu. I když je jeho jméno často spojováno s temnější stránkou magie, Salazar byl také vizionář a obratný mág.</p>
                            <p>Salazar byl mistrem hadí řeči, což mu umožňovalo komunikovat s hady, a tato vzácná schopnost jen posilovala jeho pověst tajemného a neobyčejného kouzelníka. Jeho zájem o starou magii a zakázaná kouzla ho často vedl mimo hlavní proud myšlení ostatních zakladatelů. I přes své kontroverzní názory měl hluboké přesvědčení, že magie by měla být uchovávána silnými a odhodlanými jedinci, kteří dokážou čelit těžkostem bez slabosti. Jeho odkaz zůstává složitý a dodnes vyvolává debaty, ale nelze popřít, že byl jednou z nejvlivnějších osobností kouzelnické historie.</p>
                        </div>
                        <div class="image-container">
                            <img src="../../images/timeline/salazar_slytherin.png" alt="Salazar Zmijozel">
                            <h3>Salazar Zmijozel</h3>
                        </div>
                    </div>
        </section>

    </main>
    

    <?php require "../../assets/footer.php"; ?>
    <script src="../../js/header.js"></script>
</body>
</html>
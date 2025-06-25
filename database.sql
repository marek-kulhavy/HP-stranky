-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Stř 25. čen 2025, 12:05
-- Verze serveru: 10.4.32-MariaDB
-- Verze PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `my_hp_sites`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `answer` text NOT NULL,
  `is_correct` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `answer`, `is_correct`) VALUES
(1, 1, 'Lumos', 1),
(2, 1, 'Expelliarmus', 0),
(3, 1, 'Wingardium Leviosa', 0),
(4, 2, 'Kámen mudrců', 0),
(5, 2, 'Neviditelný plášť', 1),
(6, 2, 'Pobertův plánek', 0),
(7, 3, 'Accio', 0),
(8, 3, 'Stupefy', 0),
(9, 3, 'Alohomora', 1),
(10, 4, 'Zlatonka', 0),
(11, 4, 'Myslánka', 1),
(12, 4, 'Deluminátor', 0),
(13, 5, 'Wingardium Leviosa', 1),
(14, 5, 'Reducto', 0),
(15, 5, 'Rictusempra', 0),
(16, 6, 'Accio', 1),
(17, 6, 'Lumos', 0),
(18, 6, 'Obliviate', 0),
(19, 7, 'Kulový blesk', 0),
(20, 7, 'Zameták 7', 0),
(21, 7, 'Nimbus 2000', 1),
(22, 8, 'Avada Kedavra', 0),
(23, 8, 'Expelliarmus', 1),
(24, 8, 'Petrificus Totalus', 0),
(25, 9, 'Obraceč času', 1),
(26, 9, 'Myslánka', 0),
(27, 9, 'Zrcadlo z Erisedu', 0),
(28, 10, 'Imperio', 0),
(29, 10, 'Expecto Patronum', 1),
(30, 10, 'Sectumsempra', 0),
(31, 11, 'Pobertův plánek', 1),
(32, 11, 'Neviditelný plášť', 0),
(33, 11, 'Kámen mudrců', 0),
(34, 12, 'Bezová hůlka', 1),
(35, 12, 'Dračí hůlka', 0),
(36, 12, 'Černá hůlka', 0),
(37, 13, 'Obliviate', 0),
(38, 13, 'Silencio', 1),
(39, 13, 'Confundo', 0),
(40, 14, 'Létající koště', 0),
(41, 14, 'Magický prsten', 0),
(42, 14, 'Hůlku', 1),
(43, 15, 'Reparo', 1),
(44, 15, 'Incendio', 0),
(45, 15, 'Diffindo', 0),
(46, 16, 'Petrificus Totalus', 1),
(47, 16, 'Immobilus', 0),
(48, 16, 'Impedimenta', 0),
(49, 17, 'Medailon Salazara Zmijozela', 0),
(50, 17, 'Deník Toma Raddlea', 1),
(51, 17, 'Prsten z Gauntovy rodiny', 0),
(52, 18, 'Vytvoří iluzi', 0),
(53, 18, 'Ovládá mysl oběti', 0),
(54, 18, 'Umožňuje číst myšlenky nebo vnímat vzpomínky jiného člověka', 1),
(55, 19, 'Kouzlo se odrazí zpět na kouzelníka', 1),
(56, 19, 'Kouzlo neúčinkuje, ale oběť zůstane zraněná', 0),
(57, 19, 'Kouzlo změní svůj účinek a pouze omráčí', 0),
(58, 20, 'Medailon Salazara Zmijozela', 0),
(59, 20, 'Pohár Helgy z Mrzimoru', 1),
(60, 20, 'Diadém Roweny z Havraspáru', 0),
(61, 21, 'Expulso', 0),
(62, 21, 'Protego', 0),
(63, 21, 'Expecto Patronum', 1),
(64, 22, 'Sbírá a znovu rozsvěcuje světlo z okolních zdrojů', 1),
(65, 22, 'Odstraňuje stopy magie', 0),
(66, 22, 'Odhaluje neviditelné objekty', 0),
(67, 23, 'Rictusempra', 0),
(68, 23, 'Expulso', 1),
(69, 23, 'Lumos Maxima', 0),
(70, 24, 'Přenášedlo', 1),
(71, 24, 'Obraceč času', 0),
(72, 24, 'Fénixí pírko', 0),
(73, 25, 'Incendio', 0),
(74, 25, 'Expelliarmus', 0),
(75, 25, 'Protego', 1),
(76, 26, 'Bezová hůlka', 0),
(77, 26, 'Neviditelný plášť', 1),
(78, 26, 'Zrcadlo z Erisedu', 0),
(79, 27, 'Obliviate', 0),
(80, 27, 'Imperio', 0),
(81, 27, 'Rictusempra', 1),
(82, 28, 'Zub baziliška', 1),
(83, 28, 'Meč Godrika Nebelvíra', 0),
(84, 28, 'Dračí dráp', 0),
(85, 29, 'Incendio', 1),
(86, 29, 'Bombarda', 0),
(87, 29, 'Crucio', 0),
(88, 30, 'Myslánka', 0),
(89, 30, 'Zrcadlo z Erisedu', 1),
(90, 30, 'Obraceč času', 0),
(91, 31, 'Obliviate', 1),
(92, 31, 'Confundo', 0),
(93, 31, 'Legilimens', 0),
(94, 32, 'Fideliův kouzelný svazek', 0),
(95, 32, 'Krevní pečeť', 1),
(96, 32, 'Protego Horribilis', 0),
(97, 33, 'Fénixí pero', 0),
(98, 33, 'Chlup jednorožce', 1),
(99, 33, 'Dračí srdce', 0),
(100, 34, 'Incarcerous', 0),
(101, 34, 'Morsemortis', 0),
(102, 34, 'Morsmordre', 1),
(103, 35, 'Nasákne pouze to, co ho posílí', 1),
(104, 35, 'Je neviditelný pro nečistokrevné', 0),
(105, 35, 'Umí rozpoznat lháře', 0),
(106, 36, 'Trofej turnaje', 1),
(107, 36, 'Stará kniha', 0),
(108, 36, 'Zlatonka', 0),
(109, 37, 'Obscurus', 0),
(110, 37, 'Confundus maximus', 0),
(111, 37, 'Repello Muggletum', 1),
(112, 38, 'Blána z baziliška', 0),
(113, 38, 'Fénixí pero', 0),
(114, 38, 'Dračí srdce', 1),
(115, 39, 'Quietus', 0),
(116, 39, 'Muffliato', 1),
(117, 39, 'Silencio', 0),
(118, 40, 'Albus Brumbál', 0),
(119, 40, 'Draco Malfoy', 1),
(120, 40, 'Severus Snape', 0),
(121, 41, 'Vyslovit její jméno', 0),
(122, 41, 'Přemoci současného vlastníka', 1),
(123, 41, 'Vlastnit hůlku po dobu 7 let', 0),
(124, 42, 'Sectumsempra', 1),
(125, 42, 'Crucio Totalus', 0),
(126, 42, 'Exsanguino', 0),
(127, 43, 'Fideliovo zaklínadlo', 1),
(128, 43, 'Protego Totalus', 0),
(129, 43, 'Mors Invisibilis', 0),
(130, 44, 'Deník Albuse Brumbála', 0),
(131, 44, 'Deník Toma Raddlea', 1),
(132, 44, 'Deník Salazara Zmijozela', 0),
(133, 45, 'Umožňoval komunikaci se zemřelým', 0),
(134, 45, 'Způsoboval ztrátu paměti po delším nošení', 0),
(135, 45, 'Způsoboval smrt nebo těžké zranění při kontaktu s kůží', 1),
(136, 46, 'Aragog', 1),
(137, 46, 'Norbert', 0),
(138, 46, 'Fang', 0),
(139, 47, 'Jednorožec', 1),
(140, 47, 'Hipogryf', 0),
(141, 47, 'Kentaur', 0),
(142, 48, 'Tesák', 0),
(143, 48, 'Chloupek', 1),
(144, 48, 'Buck', 0),
(145, 49, 'Skvorejš', 0),
(146, 49, 'Hrabák', 1),
(147, 49, 'Domácí skřítek', 0),
(148, 50, 'Mantichora', 0),
(149, 50, 'Testrál', 0),
(150, 50, 'Drak', 1),
(151, 51, 'Kentaur', 1),
(152, 51, 'Testrál', 0),
(153, 51, 'Hippokampus', 0),
(154, 52, 'Felix', 0),
(155, 52, 'Fawkes', 1),
(156, 52, 'Flitwick', 0),
(157, 53, 'Testrál', 1),
(158, 53, 'Hipogryf', 0),
(159, 53, 'Netopýr', 0),
(160, 54, 'Cornwalský rarach', 1),
(161, 54, 'Skvorejš', 0),
(162, 54, 'Dráždivý šotek', 0),
(163, 55, 'Kazilišek', 0),
(164, 55, 'Kobra černá', 0),
(165, 55, 'Bazilišek', 1),
(166, 56, 'Může kousnout', 1),
(167, 56, 'Vydá se na útěk a zmizí', 0),
(168, 56, 'Okamžitě se promění', 0),
(169, 57, 'Hrdozobec', 0),
(170, 57, 'Klofan', 1),
(171, 57, 'Zubálek', 0),
(172, 58, 'Krysa Prašivka', 1),
(173, 58, 'Sova Hedvika', 0),
(174, 58, 'Žába Trevor', 0),
(175, 59, 'Maďarský trnoocasý', 0),
(176, 59, 'Ukrajinský želenobřichý', 1),
(177, 59, 'Norský ostrohřbetý', 0),
(178, 60, 'Sova jménem Errol', 0),
(179, 60, 'Žába jménem Trevor', 1),
(180, 60, 'Kočka jménem Crookshanks', 0),
(181, 61, 'Ukrajinský želenobřichý', 1),
(182, 61, 'Maďarský trnoocasý', 0),
(183, 61, 'Švédský krátkonosý', 0),
(184, 62, 'Musí mu nabídnout jídlo', 0),
(185, 62, 'Musí vyslovit jméno hipogryfa', 0),
(186, 62, 'Musí se uklonit a počkat, až hipogryf odpoví', 1),
(187, 63, 'Jedovatý žihadlový ocas', 1),
(188, 63, 'Hypnotický zpěv', 0),
(189, 63, 'Zmrazující dech', 0),
(190, 64, 'Kentaur', 0),
(191, 64, 'Testrál', 1),
(192, 64, 'Grifin', 0),
(193, 65, 'Hadí jazyk', 1),
(194, 65, 'Jazyk Zmijozela', 0),
(195, 65, 'Hadí mysl', 0),
(196, 66, 'Skvorejš', 0),
(197, 66, 'Domácí skřítek', 1),
(198, 66, 'Skřítek pokladník', 0),
(199, 67, 'Obří oliheň', 1),
(200, 67, 'Kraken', 0),
(201, 67, 'Vodní drak', 0),
(202, 68, 'Pixie', 0),
(203, 68, 'Hrabák', 0),
(204, 68, 'Větvík', 1),
(205, 69, 'Protože je mohou vidět pouze ti, kdo zažili', 1),
(206, 69, 'Protože jejich vzhled připomíná smrtící draky.', 0),
(207, 69, 'Jsou nebezpeční a používají se při magických bitvách jako bojové tvory.', 0),
(208, 70, 'Norský ostrohřbetý', 0),
(209, 70, 'Maďarský trnoocasý', 1),
(210, 70, 'Čínský ohnivý břichopád', 0),
(211, 71, 'Bazilišek', 0),
(212, 71, 'Bazilišek', 0),
(213, 71, 'Testrál', 1),
(214, 72, 'Dokáže se teleportovat', 0),
(215, 72, 'Jeho pohled zabíjí', 1),
(216, 72, 'Má hypnotické schopnosti', 0),
(217, 73, 'Černý pes', 0),
(218, 73, 'Zlověst', 1),
(219, 73, 'Děsivěn', 0),
(220, 74, 'Bazilišek', 1),
(221, 74, 'Dementor', 0),
(222, 74, 'Mořský had', 0),
(223, 75, 'Šotek', 0),
(224, 75, 'Ohnivák', 1),
(225, 75, 'Doxie', 0),
(226, 76, 'Bubák', 1),
(227, 76, 'Smrtiplášť', 0),
(228, 76, 'Inferius', 0),
(229, 77, 'Smrtiplášť', 1),
(230, 77, 'Mozkomor', 0),
(231, 77, 'Testrál', 0),
(232, 78, '3', 1),
(233, 78, '1', 0),
(234, 78, '5', 0),
(235, 79, 'Hipogryf', 0),
(236, 79, 'Fénix', 0),
(237, 79, 'Jednorožec', 1),
(238, 80, 'Akromantule', 0),
(239, 80, 'Hřímala', 0),
(240, 80, 'Popletalka', 1),
(241, 81, 'Shrake', 0),
(242, 81, 'Moke', 1),
(243, 81, 'Pogrebin', 0),
(244, 82, 'Fwooper', 1),
(245, 82, 'Karkulinka', 0),
(246, 82, 'Auguron', 0),
(247, 83, 'Doxy', 1),
(248, 83, 'Pixie', 0),
(249, 83, 'Imp', 0),
(250, 84, 'Jarvey', 0),
(251, 84, 'Clabbert', 1),
(252, 84, 'Bowtruckle', 0),
(253, 85, 'Murtlap', 0),
(254, 85, 'Mackled Malaclaw', 1),
(255, 85, 'Nundu', 0),
(256, 86, 'Létající kůň', 0),
(257, 86, 'Snasošlap', 1),
(258, 86, 'Škrohňan', 0),
(259, 87, 'Chloupatec', 0),
(260, 87, 'Vrbodlak', 0),
(261, 87, 'Quintaped', 1),
(262, 88, 'Testrál', 0),
(263, 88, 'Vlkodlak', 0),
(264, 88, 'Vodníček', 1),
(265, 89, 'Auguron', 1),
(266, 89, 'Fwooper', 0),
(267, 89, 'Doxy', 0),
(268, 90, 'Nundu', 1),
(269, 90, 'Mantichora', 0),
(270, 90, 'Chiméra', 0);

-- --------------------------------------------------------

--
-- Struktura tabulky `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `difficulty` tinyint(4) DEFAULT NULL COMMENT '1-5, kde 5 je nejtěžší'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `questions`
--

INSERT INTO `questions` (`id`, `question`, `category`, `difficulty`) VALUES
(1, 'Jaké kouzlo se používá k rozsvícení hůlky?', 'Kouzla a kouzelné předměty', 1),
(2, 'Jaký předmět umožňuje neviditelnost svého nositele?', 'Kouzla a kouzelné předměty', 1),
(3, 'Jaké kouzlo se používá k otevření zamčených dveří?', 'Kouzla a kouzelné předměty', 1),
(4, 'Který kouzelný předmět slouží k ukládání vzpomínek?', 'Kouzla a kouzelné předměty', 1),
(5, 'Jaké kouzlo způsobí, že předmět začne levitovat?', 'Kouzla a kouzelné předměty', 1),
(6, 'Jaké kouzlo se používá k přivolání předmětu?', 'Kouzla a kouzelné předměty', 1),
(7, 'Jak se jmenuje koště, na kterém Harry poprvé létal ve famfrpálu?', 'Kouzla a kouzelné předměty', 1),
(8, 'Jaké kouzlo odzbrojí protivníka?', 'Kouzla a kouzelné předměty', 1),
(9, 'Který předmět slouží k cestování v čase?', 'Kouzla a kouzelné předměty', 1),
(10, 'Jaké kouzlo vytvoří ochranného patrona?', 'Kouzla a kouzelné předměty', 1),
(11, 'Jaký předmět odhaluje přítomnost lidí na Bradavickém hradě?', 'Kouzla a kouzelné předměty', 1),
(12, 'Jak se jmenuje hůlka, která je součástí relikvií smrti?', 'Kouzla a kouzelné předměty', 1),
(13, 'Jaké kouzlo utiší zvuk v okolí?', 'Kouzla a kouzelné předměty', 1),
(14, 'Jaký magický předmět si Harry koupil v obchodě u Ollivandera?', 'Kouzla a kouzelné předměty', 1),
(15, 'Jaké kouzlo opraví rozbitý předmět?', 'Kouzla a kouzelné předměty', 1),
(16, 'Jaké kouzlo způsobí, že se člověk na chvíli úplně znehybní?', 'Kouzla a kouzelné předměty', 2),
(17, 'Který z těchto kouzelných předmětů byl zničen v Tajemné komnatě?', 'Kouzla a kouzelné předměty', 2),
(18, 'Jaký je účinek kouzla \"Legilimens\"?', 'Kouzla a kouzelné předměty', 2),
(19, 'Co se stane, když se kouzelník pokusí použít Avada Kedavra na člověka chráněného láskou?', 'Kouzla a kouzelné předměty', 2),
(20, 'Který předmět sloužil Voldemortovi jako viteál, ale byl omylem považován za cennost v trezoru Lestrangeových?', 'Kouzla a kouzelné předměty', 2),
(21, 'Jaké kouzlo je účinné proti mozkomorům?', 'Kouzla a kouzelné předměty', 2),
(22, 'Jaký je účel Deluminátoru, který vlastnil Brumbál?', 'Kouzla a kouzelné předměty', 2),
(23, 'Jaké kouzlo způsobí explozi nebo destrukci?', 'Kouzla a kouzelné předměty', 2),
(24, 'Který kouzelný předmět umožňuje přenos mezi dvěma místy při dotyku?', 'Kouzla a kouzelné předměty', 2),
(25, 'Jaké kouzlo ochrání kouzelníka před kletbami a kouzly?', 'Kouzla a kouzelné předměty', 2),
(26, 'Který předmět byl relikvií smrti a zároveň vlastnictvím Ignota Peverella?', 'Kouzla a kouzelné předměty', 2),
(27, 'Jaké kouzlo způsobí, že oběť dostane křeče od smíchu?', 'Kouzla a kouzelné předměty', 2),
(28, 'Jaký magický artefakt měl schopnost zničit viteály díky své jedinečné jedovatosti?', 'Kouzla a kouzelné předměty', 2),
(29, 'Jaké kouzlo vyvolá oheň?', 'Kouzla a kouzelné předměty', 2),
(30, 'Který předmět umožňuje nahlédnout do nejhlubších přání člověka?', 'Kouzla a kouzelné předměty', 2),
(31, 'Jaké kouzlo použila Hermiona k vymazání vzpomínek svým rodičům?', 'Kouzla a kouzelné předměty', 3),
(32, 'Jaký druh magie byl použit k ochraně medailonu viteálu v jeskyni?', 'Kouzla a kouzelné předměty', 3),
(33, 'Jaké je pravé jádro hůlky Draca Malfoye?', 'Kouzla a kouzelné předměty', 3),
(34, 'Jaké kouzlo se používá k vytvoření Temného znamení?', 'Kouzla a kouzelné předměty', 3),
(35, 'Co je speciální na meči Godrika Nebelvíra?', 'Kouzla a kouzelné předměty', 3),
(36, 'Jaký předmět byl použit k vytvoření přenášedla do Poháru tří kouzelníků?', 'Kouzla a kouzelné předměty', 3),
(37, 'Jak se jmenuje kouzlo, které slouží k zapečetění oblasti, aby do ní nemohli vstoupit lidé?', 'Kouzla a kouzelné předměty', 3),
(38, 'Jaké bylo jádro hůlky Bellatrix Lestrangeové?', 'Kouzla a kouzelné předměty', 3),
(39, 'Jak se jmenuje kouzlo, které funguje jako neviditelná bariéra proti zvuku?', 'Kouzla a kouzelné předměty', 3),
(40, 'Kdo byl poslední známý majitel Bezové hůlky před Harrym Potterem?', 'Kouzla a kouzelné předměty', 3),
(41, 'Co musí kouzelník udělat, aby hůlka zvolila jeho jako pravého pána?', 'Kouzla a kouzelné předměty', 3),
(42, 'Které kouzlo vytvořil Severus Snape a je považováno za velmi nebezpečné?', 'Kouzla a kouzelné předměty', 3),
(43, 'Jaká kouzla byla použita k ochraně domu Harryho rodičů?', 'Kouzla a kouzelné předměty', 3),
(44, 'Jak se jmenoval deník, který byl jedním z viteálů?', 'Kouzla a kouzelné předměty', 3),
(45, 'Jaký efekt měl černý kouzelnický artefakt zvaný „Opálový náhrdelník“, který byl vystaven v obchodu Borgina a Burkese?', 'Kouzla a kouzelné předměty', 3),
(46, 'Jak se jmenuje obří pavouk, který žil v Zapovězeném lese?', 'Kouzelní tvorové', 1),
(47, 'Jaký tvor je známý pro svou stříbrnou krev a čistotu?', 'Kouzelní tvorové', 1),
(48, 'Jak se jmenuje trojhlavý pes, který hlídal vstup do tajné chodby v prvním díle?', 'Kouzelní tvorové', 1),
(49, 'Jaký malý, roztomilý, ale trochu zlomyslný tvor umí ukrást lesklé předměty?', 'Kouzelní tvorové', 1),
(50, 'Co je Norbert za kouzelného tvora?', 'Kouzelní tvorové', 1),
(51, 'Jak se jmenuje tvor, který má tělo koně a horní polovinu lidskou?', 'Kouzelní tvorové', 1),
(52, 'Jak se jmenuje Brumbálův fénix?', 'Kouzelní tvorové', 1),
(53, 'Jaký tvor je neviditelný pro ty, kteří nikdy neviděli smrt?', 'Kouzelní tvorové', 1),
(54, 'Jak se jmenuje malý modrý tvor, který Harrymu a jeho přátelům dělal potíže ve druhém filmu během Lockhartovy hodiny?', 'Kouzelní tvorové', 1),
(55, 'Jaký had byl ukryt v Tajemné komnatě?', 'Kouzelní tvorové', 1),
(56, 'Co udělá přísně chráněný testrál, když se ho někdo snaží pohladit bez opatrnosti?', 'Kouzelní tvorové', 1),
(57, 'Jak se jmenuje hipogryf, kterého Hagrid předvedl ve třetím díle?', 'Kouzelní tvorové', 1),
(58, 'Jaké zvíře je považováno za mazlíčka Rona Weasleyho, než se ukáže, že je to přeměněný kouzelník?', 'Kouzelní tvorové', 1),
(59, 'Jaký druh draka hlídá trezor rodiny Lestrangeových v Gringottově bance?', 'Kouzelní tvorové', 1),
(60, 'Které zvíře patří Nevillovi Longbottomovi?', 'Kouzelní tvorové', 1),
(61, 'Jaký druh draka hlídal vstup do trezoru Lestrangeových v Gringottových bankách?', 'Kouzelní tvorové', 2),
(62, 'Jak se musí kouzelník chovat, než přistoupí k hipogryfovi?', 'Kouzelní tvorové', 2),
(63, 'Jaký je hlavní způsob obrany Mantichory?', 'Kouzelní tvorové', 2),
(64, 'Jaký tvor je neviditelný pro ty, kteří nikdy nezažili smrt z první ruky?', 'Kouzelní tvorové', 2),
(65, 'Jak se nazývá schopnost mluvit hadím jazykem, kterou ovládal například Harry Potter nebo Lord Voldemort?', 'Kouzelní tvorové', 2),
(66, 'Jaký druh kouzelného tvora je Dobby?', 'Kouzelní tvorové', 2),
(67, 'Jak se jmenuje obrovský tvor, který žije ve vodách jezera u Bradavic?', 'Kouzelní tvorové', 2),
(68, 'Jak se jmenuje neškodný, ale velmi nervózní tvor, který hlídá rostliny a je zcela neviditelný, když se schová?', 'Kouzelní tvorové', 2),
(69, 'Který kouzelný tvor dokáže předvídat smrt?', 'Kouzelní tvorové', 2),
(70, 'Který drak je považován za nejnebezpečnější?', 'Kouzelní tvorové', 2),
(71, 'Který tvor byl mylně považován za znamení smrti, ale ve skutečnosti předpovídá déšť?', 'Kouzelní tvorové', 2),
(72, 'Co je hlavní schopností baziliška kromě obří velikosti?', 'Kouzelní tvorové', 2),
(73, 'Který kouzelný tvor dokáže měnit podobu a napodobovat lidi?', 'Kouzelní tvorové', 2),
(74, 'Který kouzelný tvor je známý tím, že pokud se na něj díváte přímo, dokáže vás zabít pohledem, ale pokud ho vidíte v odrazu, pouze vás zkamení?', 'Kouzelní tvorové', 2),
(75, 'Který tvor je známý tím, že krade lesklé předměty a schovává je ve svém hnízdě?', 'Kouzelní tvorové', 2),
(76, 'Jaký tvor může být zneškodněn smíchem?', 'Kouzelní tvorové', 3),
(77, 'Jaký tvor vypadá jako černý plášť a dusí své oběti ve spánku?', 'Kouzelní tvorové', 3),
(78, 'Jaký je maximální známý počet hlav u chiméry podle kouzelnických záznamů?', 'Kouzelní tvorové', 3),
(79, 'Jak se jmenuje tvor, jehož krev má posilující účinky, ale je prokletá?', 'Kouzelní tvorové', 3),
(80, 'Jaký tvor klade vejce do lidského žaludku, pokud je k tomu příležitost?', 'Kouzelní tvorové', 3),
(81, 'Jaký tvor je známý svou schopností zmenšit se tak, aby se vešel do kapsy, a má schopnost zvětšit se zpět na svou původní velikost?', 'Kouzelní tvorové', 3),
(82, 'Který z následujících tvorů je známý svým vysokým, pronikavým zpěvem, který může způsobit šílenství?', 'Kouzelní tvorové', 3),
(83, 'Jaký tvor je často zaměňován s vílou, ale má černá křídla a jedovaté kousnutí?', 'Kouzelní tvorové', 3),
(84, 'Který tvor je známý tím, že vypadá jako kříženec mezi opicí a žábou a žije na stromech?', 'Kouzelní tvorové', 3),
(85, 'Jaký tvor je známý tím, že jeho kousnutí způsobuje vysokou horečku a halucinace?', 'Kouzelní tvorové', 3),
(86, 'Který tvor se živí sny a nočními můrami a je klasifikován jako magizoologická třída XXXX?', 'Kouzelní tvorové', 3),
(87, 'Jaký tvor se podobá zelenému opičákovi s ocasem zakončeným bodcem, kterým vystřeluje střely?', 'Kouzelní tvorové', 3),
(88, 'Který tvor obývá sklenice s vodou a útočí na lidi, pokud jsou znečistění?', 'Kouzelní tvorové', 3),
(89, 'Jaký kouzelný tvor připomíná ptáka, ale létá jen během deště a jeho zpěv ohlašuje smrt?', 'Kouzelní tvorové', 3),
(90, 'Jaký tvor má tělo jako obrovský levhart, ale vydává jedovatý dech a je extrémně smrtící?', 'Kouzelní tvorové', 3);

-- --------------------------------------------------------

--
-- Struktura tabulky `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `second_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `user`
--

INSERT INTO `user` (`id`, `first_name`, `second_name`, `email`, `password`, `role`) VALUES
(1, 'Demo', 'Uživatel', 'demo@hogwarts.demo', '$2y$10$8OWGLqVqkCOrSEhTVHfGweCCMdhrD5f8iQ/FPPXZJ9FxNydznMTYK', 'user');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexy pro tabulku `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;

--
-- AUTO_INCREMENT pro tabulku `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT pro tabulku `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Omezení pro exportované tabulky
--

--
-- Omezení pro tabulku `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

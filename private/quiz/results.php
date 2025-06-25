<?php

require "../../classes/Auth.php";

session_start();

// Kontrola, zda je uživatel přihlášený
if (!Auth::isLoggedIn()) {
    header("Location: /HP-stranky/login.php");
    exit;
}


if (!isset($_SESSION['quiz_data']) || !isset($_SESSION['quiz_settings'])) {
    header("Location: ./quiz/quiz.php");
    exit;
}

$quizData = $_SESSION['quiz_data'];
$settings = $_SESSION['quiz_settings'];
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/general.css">
    <link rel="stylesheet" href="../../css/quiz-results.css">
    <link rel="stylesheet" href="../../query/quiz-results-query.css">
    <link rel="shortcut icon" href="/HP-stranky/images/golden-snitch.png" type="image/x-icon">
    <title>Výsledky kvízu</title>
</head>
<body>
    <header>
        <h1>Výsledky kvízu</h1>
    </header>

    <main>
        <div class="results">
            <h2><?= htmlspecialchars($settings['category']) ?> (úroveň <?= $settings['difficulty'] ?>)</h2>
            
            <p>Získané skóre: <strong><?= $quizData['score'] ?>/<?= count($quizData['questions']) ?></strong></p>
            <p>Úspěšnost: <strong><?= round(($quizData['score']/count($quizData['questions'])*100)) ?>%</strong></p>
            
            <a class="play-again" href="./quiz-process.php?restart=1">Hrát znovu</a>
            <a class="play-new" href="./quiz.php">Vybrat jiný kvíz</a>
        </div>
    </main>
</body>
</html>


<?php
// Vyčištění session po zobrazení výsledků
unset($_SESSION['quiz_data']);
?>
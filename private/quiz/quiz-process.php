<?php 
require "../../classes/Database.php";
require "../../classes/Url.php";
require "../../classes/User.php";
require "../../classes/Auth.php";

session_start();



// Kontrola, zda je uživatel přihlášený
if (!Auth::isLoggedIn()) {
    header("Location: /HP-stranky/login.php");
    exit;
}


// Připojení k databázi
$db = new PDO('mysql:host=127.0.0.1;dbname=my_hp_sites;charset=utf8', 'marek', 'admin123');


// Kontrola, zda bylo nastavení kvízu správně načteno
if (!isset($_SESSION['quiz_settings'])) {
    header("Location: ./quiz/quiz.php");
    exit;
}

$settings = $_SESSION['quiz_settings'];

// Načtení otázek pro kvíz
if (!isset($_SESSION['quiz_data'])) {
    try {
        $stmt = $db->prepare("SELECT id, question FROM questions 
                            WHERE category = ? AND difficulty = ?
                            ORDER BY RAND() LIMIT 8");
        $stmt->execute([$settings['category'], $settings['difficulty']]);
        $questions = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if (empty($questions)) {
            die("Pro zvolenou kombinaci nebyly nalezeny žádné otázky.");
        }
        
        // Načtení odpovědí pro každou otázku
        foreach ($questions as &$question) {
            $stmt = $db->prepare("SELECT id, answer AS text, is_correct 
                                FROM answers WHERE question_id = ?");
            $stmt->execute([$question['id']]);
            $question['answers'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
            shuffle($question['answers']);
        }
        
        $_SESSION['quiz_data'] = [
            'questions' => $questions,
            'current_index' => 0,
            'score' => 0
        ];
        
    } catch (PDOException $e) {
        die("Chyba databáze: " . $e->getMessage());
    }
}

// Zpracování odpovědi
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['answer'])) {
    $quizData = $_SESSION['quiz_data'];
    $question = $quizData['questions'][$quizData['current_index']];
    
    // Kontrola správné odpovědi
    foreach ($question['answers'] as $answer) {
        if ($answer['is_correct'] && $answer['id'] == $_POST['answer']) {
            $_SESSION['quiz_data']['score']++;
            break;
        }
    }
    
    // Posun na další otázku
    $_SESSION['quiz_data']['current_index']++;
    
    // Pokud došly otázky, přesměrujeme na výsledky
    if ($_SESSION['quiz_data']['current_index'] >= count($_SESSION['quiz_data']['questions'])) {
        header("Location: ../quiz/results.php");
        exit;
    }

    header("Location: ./quiz-process.php");
    exit;
}

// Aktuální otázka
$quizData = $_SESSION['quiz_data'];
$currentQuestion = $quizData['questions'][$quizData['current_index']];
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/general.css">
    <link rel="stylesheet" href="../../css/quiz-process.css">
    <link rel="stylesheet" href="../../query/quiz-process-query.css">
    <link rel="shortcut icon" href="/HP-stranky/images/golden-snitch.png" type="image/x-icon">
    <title>Kvíz</title>
</head>
<body>
    <header>
        <h1><?= htmlspecialchars($settings['category']) ?></h1>
    </header>
    <main>
        <div class="question">
            <p>Obtížnost: <?= $settings['difficulty'] ?> | Otázka <?= ($quizData['current_index']+1) ?>/<?= count($quizData['questions']) ?></p>
            
            <h2><?= htmlspecialchars($currentQuestion['question']) ?></h2>
            
            <form method="post">
                <?php foreach ($currentQuestion['answers'] as $answer): ?>
                    <label class="answer">
                        <input type="radio" name="answer" value="<?= $answer['id'] ?>" required>
                        <?= htmlspecialchars($answer['text']) ?>
                    </label>
                <?php endforeach; ?>
                
                <button type="submit">Odeslat odpověď</button>
            </form>
        </div>
    </main>
</body>
</html>
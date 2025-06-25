<?php
require "../../classes/Database.php";
require "../../classes/Auth.php";

session_start();



// Kontrola, zda je uživatel přihlášený
if (!Auth::isLoggedIn()) {
    header("Location: /HP-stranky/login.php");
    exit;
}



// Připojení k databázi
$db = new PDO('mysql:host=127.0.0.1;dbname=my_hp_sites;charset=utf8', 'marek', 'admin123');


// Kontrola vstupních parametrů
if (!isset($_GET['category']) || !isset($_GET['difficulty'])) {
    header("Location: ./quiz/quiz.php");
    exit;
}

$category = trim($_GET['category']);
$difficulty = (int)$_GET['difficulty'];

// Ověření, že zvolená obtížnost existuje v databázi
try {
    $stmt = $db->prepare("SELECT COUNT(*) FROM questions WHERE category = ? AND difficulty = ?");
    $stmt->execute([$category, $difficulty]);
    $questionCount = $stmt->fetchColumn();
    
    if ($questionCount == 0) {
        $_SESSION['error'] = "Pro zvolenou kombinaci neexistují žádné otázky";
        header("Location: ./quiz/quiz.php");
        exit;
    }
    
} catch (PDOException $e) {
    die("Chyba databáze: " . $e->getMessage());
}

// Uložení nastavení kvízu
$_SESSION['quiz_settings'] = [
    'category' => $category,
    'difficulty' => $difficulty
];

// Přesměrování na kvíz
header("Location: ./quiz-process.php");
exit;
?>
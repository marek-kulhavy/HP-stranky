<?php

require "../../classes/Database.php";
require "../../classes/Auth.php";

// Kontrola, zda je uživatel přihlášený
if (!Auth::isLoggedIn()) {
    header("Location: /HP-stranky/login.php");
    exit;
}

// Připojení k databázi
$db = new PDO('mysql:host=127.0.0.1;dbname=my_hp_sites;charset=utf8', 'marek', 'admin123');


try {
    // Získání dostupných kategorií
    $stmt = $db->query("SELECT DISTINCT category FROM questions");
    $categories = $stmt->fetchAll(PDO::FETCH_COLUMN);
    
    // Získání skutečně dostupných obtížností z databáze
    $stmt = $db->query("SELECT DISTINCT difficulty FROM questions ORDER BY difficulty");
    $difficulties = $stmt->fetchAll(PDO::FETCH_COLUMN);
    
} catch (PDOException $e) {
    die("Chyba při načítání dat: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/general.css">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/quiz.css">

    <link rel="stylesheet" href="../../query/header-query.css">
    <link rel="stylesheet" href="../../query/quiz-query.css">
    <link rel="shortcut icon" href="/HP-stranky/images/golden-snitch.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/b535256029.js" crossorigin="anonymous"></script>
    <title>Výběr kvízu</title>
</head>
<body>
    
    <?php require "../../assets/header.php"; ?>

    <main>
        <div class="choose-form">
            <h1>Vyberte si kvíz</h1>
            <form action="./start-quiz.php" method="get">
                <div class="form-group">
                    <label for="category">Téma:</label>
                    <select id="category" name="category" required>
                        <option value="">-- Vyberte téma --</option>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?= htmlspecialchars($category) ?>"><?= htmlspecialchars($category) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="difficulty">Obtížnost:</label>
                    <select id="difficulty" name="difficulty" required>
                        <option value="">-- Vyberte úroveň --</option>
                        <?php foreach ($difficulties as $difficulty): ?>
                            <option value="<?= $difficulty ?>">
                                <?= match($difficulty) {
                                    1 => "Lehká",
                                    2 => "Střední", 
                                    3 => "Těžká",
                                    4 => "Velmi těžká",
                                    5 => "Expert",
                                    default => "Úroveň ".$difficulty
                                } ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <button type="submit">Spustit kvíz</button>
            </form>
        </div>
    </main>

    <?php require "../../assets/footer.php"; ?>
    <script src="../../js/header.js"></script>
</body>
</html>
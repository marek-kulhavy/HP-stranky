<?php
require "../classes/Database.php";
require "../classes/Url.php";
require "../classes/User.php";
require "../classes/Auth.php";


session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $database = new Database(); 
    $connection = $database->connectionDB(); 
    
    try {
        $log_email = trim($_POST["login-email"]);
        $log_password = trim($_POST["login-password"]);
        
        // Speciální demo přihlášení
        if ($log_email === 'demo@hogwarts.demo' && $log_password === 'demo') {
            $sql = "SELECT id, role FROM user WHERE email = 'demo@hogwarts.demo' LIMIT 1";
            $stmt = $connection->query($sql);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($user) {
                session_regenerate_id(true);
                $_SESSION = [
                    "is_logged_in" => true,
                    "logged_in_user_id" => $user['id'],
                    "role" => $user['role']
                ];
                Url::redirectURL("/HP-stranky/index.php");
                exit;
            }
        }
        
        // Normální přihlášení
        if (User::authentication($connection, $log_email, $log_password)) {
            $id = User::getUserId($connection, $log_email);
            
            session_regenerate_id(true);
            $_SESSION["is_logged_in"] = true;
            $_SESSION["logged_in_user_id"] = $id;
            $_SESSION["role"] = User::getUserRole($connection, $id);
            
            Url::redirectURL("/HP-stranky/index.php");
            exit;
        } else {
            throw new Exception("Neplatné přihlašovací údaje");
        }
    } catch (Exception $e) {
        $error = $e->getMessage();
        // Zobrazte chybu uživateli
    }
}
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/HP-stranky/images/golden-snitch.png" type="image/x-icon">	
    <title>Přihlášení</title>
</head>
<body>
    <?php if (!empty($error)): ?>
        <p><?= $error ?></p>
        <a href="../login.php">Zpět na přihlášení</a>
    <?php endif; ?>
</body>
</html>
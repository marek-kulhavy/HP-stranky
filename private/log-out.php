<?php

require "../classes/Url.php";

session_start();

// Vymazání všech dat v aktuální session - nastavení pole $_SESSION na prázdné pole
$_SESSION = array();


// Kontrola, zda jsou pro session používány cookies
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], 
        $params["domain"],
        $params["secure"], 
        $params["httponly"]
    );
}

session_destroy();

// Přesměrování na úvodní stranu
Url::redirectURL("/HP-stranky/index.php");
?>
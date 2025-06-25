<?php

// Ukázková konfigurace - přejmenujte na config.php

// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'hogwarts_demo');
define('DB_USER', 'root');
define('DB_PASS', '');

// Base URL
define('BASE_URL', 'http://localhost/HP-stranky');

// Debug mode
define('DEBUG_MODE', true);

// Session settings
session_set_cookie_params([
    'lifetime' => 86400,
    'path' => '/',
    'domain' => $_SERVER['HTTP_HOST'],
    'secure' => false,    
    'httponly' => true,
    'samesite' => 'Lax'
]);


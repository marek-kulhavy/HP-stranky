<?php 

/**
 * Ověřuje, zda je uživatel přihlášen
 * 
 * @return bool true pokud je uživatel přihlášen, false pokud není
 * 
 * @example if (Auth::isLoggedIn()) { // přístup k chráněným stránkám }
 */


class Auth
{
    private const SESSION_TIMEOUT = 1800; // 30 minut (v sekundách)

    private static function ensureSessionStarted()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function isLoggedIn(): bool
    {
        self::ensureSessionStarted();

        if (!isset($_SESSION["is_logged_in"]) || $_SESSION["is_logged_in"] !== true) {
            return false;
        }

        // Kontrola neaktivity
        if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > self::SESSION_TIMEOUT) {
            self::logout();
            return false;
        }

        // Aktualizace času poslední aktivity
        $_SESSION['last_activity'] = time();

        return true;
    }

    public static function login(int $userId): void
    {
        self::ensureSessionStarted();
        $_SESSION["is_logged_in"] = true;
        $_SESSION["user_id"] = $userId;
        $_SESSION["last_activity"] = time();
    }

    public static function logout(): void
    {
        self::ensureSessionStarted();
        $_SESSION = [];
        session_destroy();
    }

    public static function userId(): ?int
    {
        self::ensureSessionStarted();
        return $_SESSION["user_id"] ?? null;
    }
}


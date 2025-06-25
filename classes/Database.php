<?php

require_once(__DIR__ . '/../config.php');

class Database {
    public function connectionDB() {
        
        try {
            $connection = new PDO(
                "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8",
                DB_USER,
                DB_PASS
            );
            
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
            
        } catch (PDOException $e) {
            if (DEBUG_MODE) {
                die("Database error: " . $e->getMessage());
            } else {
                die("Database connection error");
            }
        }
    }
}
<?php 

class User {
    /**
     * Přidání nového uživatele do databáze
     * 
     * @param object $connection - připojení do databáze
     * @param string $first_name - křestní jméno uživatele
     * @param string $second_name - příjmení uživatele
     * @param string $email - email uživatele
     * @param string $password - heslo uživatele
     * @param string $role - role uživatele
     * 
     * @return integer|null $id - ID nově vytvořeného uživatele nebo null při neúspěchu
     * @throws Exception - pokud vytvoření uživatele selže
     */
    public static function createUser($connection, $first_name, $second_name, $email, $password, $role) {
        $sql = "INSERT INTO user (first_name, second_name, email, password, role)
                VALUES (:first_name, :second_name, :email, :password, :role)";

        $stmt = $connection->prepare($sql);

        $stmt->bindValue(":first_name", $first_name, PDO::PARAM_STR); 
        $stmt->bindValue(":second_name", $second_name, PDO::PARAM_STR); 
        $stmt->bindValue(":email", $email, PDO::PARAM_STR); 
        $stmt->bindValue(":password", $password, PDO::PARAM_STR); 
        $stmt->bindValue(":role", $role, PDO::PARAM_STR); 

        try {
            if($stmt->execute()){
                $id = $connection->lastInsertId();
                return $id;
            } else {
                throw new Exception("Vytvoření uživatele se nezdařilo.");
            }
        } catch (Exception $e){
            error_log("Chyba u funkce createUser, vytvoření uživatele selhalo.\n", 3, "../errors/error.log");
            echo "Typ chyby: " . $e->getMessage();
        }
    }

    /**
     * Ověření uživatele pomocí emailu a hesla
     * 
     * @param object $connection - připojení do databáze
     * @param string $log_email - email z formuláře pro přihlášení
     * @param string $log_password - heslo z formuláře pro přihlášení
     * 
     * @return boolean|null true - pokud je přihlášení úspěšné, 
     *                      false - pokud je neúspěšné,
     *                      null - pokud dojde k chybě
     * @throws Exception - pokud ověření selže
     */
    public static function authentication($connection, $log_email, $log_password){
        $sql = "SELECT password 
                FROM user 
                WHERE email = :email";

        $stmt = $connection->prepare($sql);
        $stmt->bindValue(":email", $log_email, PDO::PARAM_STR);

        try {
            if ($stmt->execute()){
                if($user = $stmt->fetch()){
                    return password_verify($log_password, $user[0]);
                }
                return false;
            } else {
                throw new Exception("Ověření identity se nezdařilo.");
            }
        } catch(Exception $e) {
            error_log("Chyba u funkce authentication, ověření identity se nezdařilo.\n", 3, "../errors/error.log");
            echo "Typ chyby: " . $e->getMessage();
            return null;
        }
    }

    /**
     * Získání ID uživatele na základě emailu
     * 
     * @param object $connection - připojení do databáze
     * @param string $email - email uživatele 
     * 
     * @return int|null ID uživatele nebo null při neúspěchu
     * @throws Exception - pokud získání ID selže
     */
    public static function getUserId($connection, $email){
        $sql = "SELECT id 
                FROM user
                WHERE email = :email";

        $stmt = $connection->prepare($sql);
        $stmt->bindValue(":email", $email, PDO::PARAM_STR);
        
        try {
            if($stmt->execute()){
                $result = $stmt->fetch();
                $user_id = $result[0];
                return $user_id;
            } else {
                throw new Exception("Získání ID uživatele se nezdařilo.");
            }
        } catch (Exception $e){
            error_log("Chyba u funkce getUserId, získání ID uživatele se nezdařilo.\n", 3, "../errors/error.log");
            echo "Typ chyby: " . $e->getMessage();
            return null;
        }
    }

    /**
     * Získání role uživatele na základě ID
     * 
     * @param object $connection - připojení do databáze
     * @param int $id - ID uživatele
     * 
     * @return string|null role uživatele nebo null při neúspěchu
     * @throws Exception - pokud získání role selže
     */
    public static function getUserRole($connection, $id){
        $sql = "SELECT role 
                FROM user
                WHERE id = :id";

        $stmt = $connection->prepare($sql);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        
        try {
            if($stmt->execute()){
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                return $result["role"];
            } else {
                throw new Exception("Získání role uživatele se nezdařilo.");
            }
        } catch (Exception $e){
            error_log("Chyba u funkce getUserRole, získání role uživatele se nezdařilo.\n", 3, "../errors/error.log");
            echo "Typ chyby: " . $e->getMessage();
            return null;
        }
    }
}
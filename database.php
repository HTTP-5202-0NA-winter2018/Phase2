<?php
class Database
{

    private static $user = 'root';
    private static $pass = '';
    private static $dsn = "mysql:host=localhost;dbname=condos";
    private static $db;


    public static function getDb() {
        if(!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn, self::$user, self::$pass);
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include 'database_error.php';
                exit();
            }
        }
        return self::$db;
    }
}
?>

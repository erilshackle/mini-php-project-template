<?php

/**
 * USE
 * @var $db = Database::connection()
 * @var $query = $db->pquery();
 */

class Database
{
    private static ?PDO $pdo = null;

    public static function connection()
    {

        if (!isset(self::$pdo)) {

            $host = DB_HOST;
            $dbname = DB_NAME;
            $user = DB_USER;
            $password = DB_PASS;
            $dsn = "mysql:host=$host;dbname=$dbname";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            try {
                self::$pdo = new PDO($dsn, $user, $password, $options);
            } catch (PDOException $e) {
                throw new PDOException($e->getMessage(), (int) $e->getCode());
            }
        }
        return self::$pdo;
    }

    public static function close(){
        self::$pdo = null;
    }

}
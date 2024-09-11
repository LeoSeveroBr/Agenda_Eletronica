<?php

class Database
{
    protected static $db;

    private function __construct()
    {
        $drive = "mysql";
        $host = "localhost";
        $dbname = "new_agenda";
        $username = "root";


        try {
            self::$db = new PDO("$drive: host=$host; dbname=$dbname", $username);

            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            self::$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

    public static function getConexao()
    {
        if (!self::$db) {
            new Database();
        }

        return self::$db;
    }
}
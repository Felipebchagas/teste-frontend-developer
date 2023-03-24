<?php

namespace Classes;

use PDO;
use Exception;

class DataBase
{

    private static $pdo;
    public static function connect()
    {
        try {
            self::$pdo = new PDO('mysql:host=' . HOST . ';dbname=' . DB, USER, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            echo "Erro ao conectar";
        }

        return self::$pdo;
    }
}

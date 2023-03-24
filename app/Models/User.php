<?php

namespace App\Models;

use Classes\DataBase;


class User {
    
    public static function userExist($email) {
        $pdo = Database::connect()->prepare('SELECT `email` FROM users WHERE `email` = ?');
        $pdo->execute(array($email));

        return ($pdo->rowCount() == 1) ? true : false;
    }
}
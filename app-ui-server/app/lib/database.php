<?php
namespace App\Lib;

use PDO;

class Database
{
    public static function StartUp()
    {
        $dbhost = 'localhost';
        $dbname = 'serprosa_capacitacion';
        $dbuser = 'root';//serprosa_admin';
        $dbpass = '';//'serprosac$2017';
        
            
        $mysql_connect_str = "mysql:host=$dbhost;dbname=$dbname";
        $pdo = new PDO($mysql_connect_str, $dbuser, $dbpass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return $pdo;
    }
}
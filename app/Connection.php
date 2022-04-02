<?php 

declare(strict_types=1);

namespace App;

class Connection
{

    private static ?\PDO $pdo = null;


    public static function connect(): \PDO
    {
        if(static::$pdo == null){
            static::$pdo = new \PDO('sqlite:'. Config::PATH_TO_SQLITE_FILE);
        }

        return static::$pdo;
    }
}
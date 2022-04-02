<?php 

declare(strict_types=1);

namespace App;

class CreateTable 
{
    public static function createUser():string
    {
        $sql = "
        CREATE TABLE IF NOT EXISTS users (
            user_id int PRIMARY KEY,
            f_name varchar(255) DEFAULT null,
            l_name varchar(255) DEFAULT null,
            email varchar(255) ,
            telegram varchar(20) DEFAULT null,
            phone varchar(10) DEFAULT null,
            gender varchar(10),
            education varchar(255) DEFAULT null
        )
        ";
        return $sql;
    }
}
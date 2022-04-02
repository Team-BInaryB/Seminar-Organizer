<?php

declare(strict_types=1);

use App\Connection;
use App\CreateTable;

require __DIR__.'/vendor/autoload.php';

class Main
{

    private ?\PDO $ins;

    public function __construct() {
        $this->ins =  Connection::connect();
        try{
            $this->ins->query('SELECT * FROM users LIMIT 1');
        }catch(\PDOException){
            $this->ins->exec(CreateTable::createUser());
        }
    }
    

    function registerUser(array $data): bool|int
    {
        $f_name = trim(stripslashes($data['f_name']));
        $l_name = trim(stripslashes($data['l_name']));
        $email = trim(stripslashes($data['email']));
        $telegram = trim(stripslashes($data['telegram']));
        $phone = trim(stripslashes($data['phone']));
        $gender = trim(stripslashes($data['gender']));
        $education= trim(stripslashes($data['education']));

        $sql = "INSERT INTO users(user_id, f_name, l_name, email, telegram, phone, gender, education) 
                VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
        $stm = $this->ins->prepare($sql);

        $user_id = $this->ins->query('SELECT user_id FROM users ORDER BY user_id DESC LIMIT 1')->fetch()[0] + 1;
        
        if($stm->execute([$user_id,$f_name, $l_name, $email, $telegram, $phone, $gender, $education])){
            return $user_id;
        }else{
            return false;
        } 
    }

    public function getIns(): \PDO
    {
        return $this->ins;
    }
}

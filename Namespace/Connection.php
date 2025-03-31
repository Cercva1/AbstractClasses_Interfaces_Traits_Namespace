<?php 

namespace App\Database;

class Connection{
    public function connect(){
        return "Connected to the database";
    }
}

namespace App\Models;

class User{
    public function getName(){
        return "Jhon Doe";
    }
}

namespace App\Service;

class UserSerivce{
    public function getUser(){
        return new \App\Models\User();
    }
}


?>
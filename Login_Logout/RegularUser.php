<?php 

namespace App\Models;

use App\core\AbstractUser;
use App\Core\AuthInterface;

class RegularUser extends AbstractUser implements AuthInterface{
    public function userRole(){
        return "Regular User";
    }

    public function login($email, $password){
        if($email === $this -> email && password_verify($password, $this -> password)){
            return "User logged in sucessfully.";
        }
        return "Invalid credentials.";
    }

    public function logout(){
        return "User logged out";
    }

}


?>
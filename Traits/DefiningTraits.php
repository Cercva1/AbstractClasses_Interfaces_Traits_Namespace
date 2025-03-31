<?php 

//Defining traits
trait Logger{
    public function logMessage($message){
        echo "[LOG]: ". $message. "<br>";
    }
}

trait Notifier{
    public function sendNotification($message){
        echo "[NOTIFICATION]: ". $message. "<br>";

    }
}

class User{
    use Logger;

    public function createUser($name){
        echo "User '$name' created. <br>";
        $this -> logMEssage("A new user '$name' has been added");

    }
}

class Order extends User{
    use Logger, Notifier;

    public function createOrder($id){
        echo "Order #id created. <br>";
        $this -> logMessage("Order #id has been logged");
        $this -> sendNotification("Order #id confirmation sent.");
    }

}

//Instantie the class       
$user = new User();
$user -> createUser("JhonDoe");
$order = new Order();
$order -> createOrder(101);

?>
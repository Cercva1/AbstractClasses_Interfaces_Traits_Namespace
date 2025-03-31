<?php 

abstract class Vehicle{
    protected $brand;

    public function __construct($brand){
        $this->brand = $brand;
    }

    public function getBrand(){
        return "Brand: )".$this -> brand;
    }

    abstract public function MaxSpeed();
}

class Car extends Vehicle{
    public function MaxSpeed()
    {
       return "Max speed: 200km/h";  
    } 
}

$myCar = new Car("BMW");
echo "My Car: ( ";
echo $myCar -> getBrand();
echo "<br>";
echo $myCar -> MaxSpeed();
echo "<br>";

class Bike extends Vehicle{
    public function MaxSpeed(){
        return "Max speed 60km/h";
    }
}

$myBike = new Bike("Audi");
echo "My bike: ( ";
echo $myBike -> getBrand();
echo "<br>";
echo $myBike -> MaxSpeed();

?>
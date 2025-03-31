<?php 

interface VehicleInterface{
    public function startEngine();
    public function stopEngine();

}

class Plane implements VehicleInterface{
    private $pilot;
    public function startEngine(){
        return "Plane engine started. ";
    }
    public function stopEngine(){
        return "Plane engine stoped.";
    }
    public function __construct($pilot = "Pilot is ready"){
        $this -> pilot = $pilot;
    }

    public function getPilot($answer){
        if (empty($answer)){
            return $this -> pilot;
        }else if ($answer == 2){
            return "No pilot is not ready";
        }else{
            return "Pilot doesn't exits ;DDD";
        }
    }
}

$myPlane = new Plane();
echo $myPlane -> getPilot("");
echo "<br>";
echo $myPlane -> startEngine();
echo "<br>";
echo "DGDGDGDGDGD....";
echo "<br>";
echo $myPlane -> stopEngine();
echo "<br>";
echo "shshs........";

interface FuealPowerd{
    public function tankFull();
}

class Helicopter extends Plane implements VehicleInterface,FuealPowerd{
    
    public function startEngine(){
        return "Engine start. No problem";
    }
    public function stopEngine(){
        return "Stop engine. fuel low [R] :(";
    }
    public function tankFull(){
        return "Tank is full [1/1] :)";
    }
}

$myhel = new Helicopter();
echo "<br>";
echo "<br>";
echo "<br>";
echo $myhel -> startEngine();
echo "<br>";
echo $myhel -> stopEngine();
echo "<br>";
echo $myhel -> tankFull();
echo "<br>";
echo $myhel -> getPilot("2");

?>
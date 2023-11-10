<?php
    include_once("Vehicle.php");
class Car extends Vehicle{

    public function __destruct(){
        echo $this->brand . "Is dead <br>";
    }
    static function makeNoise(){
        echo "Beep beep...!!! <br>";
    }
}
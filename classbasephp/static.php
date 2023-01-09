<?php
class Car{

    static $wheels =4;
    var $hood = 1;

    function MoveWeels(){
        Car::$wheels = 10;
    }
}

$bmw = new Car();
Car::MoveWeels();
echo Car::$wheels;

?>


<?php

class Car{

    static $mode = 2;
    public $wheels = 4;
    protected $doors = 3; 
    private $hood = 1;
    var $engine = 1;

    // function __construct(){
    //     echo $this->wheels = 10;
    // }

    function MoveWeels($model){
        echo "Weels is moving".$model;
    }
 
    function Modes(){
        Car::$mode = 10;
    }


}



$bmw = new Car();
echo "<br>";
echo "<br>";
$fefe = new Car();
echo "<br>";
echo "<br>";
$fegg = new Car();

echo "<br>";

// to access the static we have to 
echo Car::$mode;

// to access the static varable that change by the function we have to
Car::Modes();

echo Car::$mode;


?>
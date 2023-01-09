
<?php

class Car{

    var $wheels = 4;
    var $doors = 3; 

    function __construct(){
        echo $this->wheels = 10;
    }

    function MoveWeels($model){
        echo "Weels is moving".$model;
    }


}

$bmw = new Car();
echo "<br>";
echo "<br>";
$fefe = new Car();
echo "<br>";
echo "<br>";
$fegg = new Car();


?>
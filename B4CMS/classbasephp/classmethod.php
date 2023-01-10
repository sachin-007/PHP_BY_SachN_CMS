
<?php

class Car{

    var $wheels = 4;
    var $doors = 3; 

    function MoveWeels($model){
        echo "Weels is moving".$model;
    }


}

$bmw = new Car();
$bmw->MoveWeels("BMM");
echo $bmw->wheels;
echo "<br>";
?>
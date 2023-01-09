
<?php

class Car{
    function MoveWeels(){
        echo "Weels is moving";
    }
}

if(method_exists("Car", "MoveWeels")){
    echo "Method MoveWeels exists";
}else{
    echo "Method MoveWeels does not exist";
}

echo "<br>";
echo "<br>";
echo "<br>";

if(class_exists("Car")){
    echo "Class Car exists";
}else{
    echo "Class Car does not exist";
}

?>
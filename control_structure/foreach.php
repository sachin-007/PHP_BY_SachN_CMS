<?php

$lists=array();

$lists = [1,2,3,4,5,6,7,8,9,10];


foreach($lists as $list){
    echo $list . "</br>";
}

echo "</br>";

foreach ($lists as $key => $value) {
    echo $key."=>".$value . "</br>";
}


?>
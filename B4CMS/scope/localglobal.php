<?php


$local = "local outside";

echo "</br>";
echo "</br>";
echo "before making global from inside         =>".$local;
echo "</br>";
echo "</br>";


function localGlobal(){
    global $local;
    $local = "local inside";
    echo $local;
}
echo "</br>";
echo "</br>";
echo "</br>";

localGlobal();

echo "</br>";
echo "</br>";
echo "</br>";

echo "After making global from inside         =>".$local;




?>
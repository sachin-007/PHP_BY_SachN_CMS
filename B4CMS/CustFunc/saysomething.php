<?php

function saySomething(){
    echo "Hello World this is a function for saying something";
}

function sum($a,$b){
    return $a+$b;
}

function init(){
    saySomething();
    echo "</br>";
    $res = sum(3,4);
    echo $res;
}

init();
?>
<?php

// first way to connect to database

$conn = mysqli_connect("localhost","root","","cms");

// if($conn){
//     echo "We are connected";
// }else{
//     echo "Connection failed";
// }

if(!$conn){
    echo "Connection failed";
}

// secound way to connect to database
$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "cms";

foreach($db as $key => $value){
    define(strtoupper($key), $value);
}
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
// if($connection){
//     echo "We are connected";
// }else{
//     echo "Connection failed";
// }


if(!$connection){
    echo "Connection failed";
}

?>
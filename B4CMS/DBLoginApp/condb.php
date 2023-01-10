<?php
        $connection = mysqli_connect('localhost','root','','loginapp');
        $GLOBALS['connection'] = $connection;
        if($connection){
            // echo "We are connected";
        }else{
            die("Database connection failed");
        }
?>
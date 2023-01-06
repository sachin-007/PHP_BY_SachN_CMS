<?php

if(isset($_POST['submit'])){

    $list = array("sachin","saurav","rahul","dravid");

    $username = $_POST['username'];
    $pass = $_POST['pass'];

    // echo "Form Submitted with user name ".$_POST['username'];

    if(strlen($username)<6){
        echo "username should be greater than 6";
    }

    if(!in_array($username,$list)){
        echo "Sorry you are not allowed";
    }else{
        echo "Welcome ".$username;
    }

}

?>

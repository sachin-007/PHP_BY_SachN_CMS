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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="form.php" method="post">
    <input type="text" name="username" placeholder="name"> <br>
    <input type="password" name="pass" placeholder="pass"> <br>
    <input type="submit" name="submit" value="Submit"> 
</form>


</body>
</html>
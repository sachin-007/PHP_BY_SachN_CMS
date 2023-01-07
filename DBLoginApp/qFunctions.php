<?php

function CreateRows(){
    global $connection;


    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
    
        $connection = mysqli_connect('localhost','root','','loginapp');
    
        if($connection){
            echo "We are connected";
        }else{
            die("Database connection failed");
        }
        $query = "INSERT INTO users(username,password)Values('$username','$password')";
    
        $result = mysqli_query($connection,$query);
    
        if(!$result){
            die('Query FAILED'.mysqli_error());
        }else{
            echo "Record Created";
        }
    }
}


function ShowAllData(){
    // include "condb.php";
    global $connection;

    $query = "SELECT * FROM users";

    $result = mysqli_query($connection,$query);

    if(!$result){
        die('Query FAILED'.mysqli_error());
    }

    while($row=mysqli_fetch_assoc($result)){
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }


}



function UpdateTable(){
    // include "condb.php";
    global $connection;

    if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
    
        $query = "UPDATE users SET username='$username', password='$password' WHERE id=$id";
        
        $result= mysqli_query($connection,$query);
    
        if(!$result){
            die("Query Failed".mysqli_error($connection));
        }
    } 
}

function DeleteRows(){
    global $connection;


    if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "DELETE FROM users WHERE id=$id";
        
        $result= mysqli_query($connection,$query);
    
        if(!$result){
            die("Query Failed".mysqli_error($connection));
        }
    } 
}
?>
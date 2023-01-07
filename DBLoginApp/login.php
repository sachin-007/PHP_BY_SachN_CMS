<?php

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
        }
    }

   

?>



<?php include "includes/header.php"; ?>
    <div class="container">
        <div class="col-xs-6">
        <h1 class="text-center">Login</h1>
            
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control"> 
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control"> 
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="LOGIN">
            </form>
        </div>
    </div>
<?php include "includes/footer.php";?>
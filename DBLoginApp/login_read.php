<?php

include "condb.php";


$query = "SELECT * FROM users";

$result = mysqli_query($connection,$query);


if(!$result){
    die('Query FAILED'.mysqli_error());
}



?>





<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="col-xs-6">

            <?php
            while($row = mysqli_fetch_assoc($result)){
            ?>
            <pre>
                <?php
                    print_r($row);
                ?>
            </pre>
            <?php
            }
            ?>
        </div>
    </div>
</body>
</html>
<?php include "condb.php"; ?>
<?php include "qFunctions.php"; ?>

<?php
if(isset($_POST['submit'])){
    DeleteRows();
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
        <h1 class="text-center">Delete</h1>

            <form action="login_delete.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" value='<?php $username?>' name="username" class="form-control"> 
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" value='<?php $password?>' name="password" class="form-control"> 
                </div>

                <div class="form-control">
                    <select name="id" id="">
                        <?php       
                        ShowAllData();
?>   
                    </select>
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="DELETE">
            </form>
        </div>
    </div>
</body>
</html>
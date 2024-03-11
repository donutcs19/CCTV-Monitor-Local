<?php
session_start();
require_once('cont/condb.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/login.css">
    
</head>
<body>
<div class="login-dark">
        <form action="cont/check_login.php" method="POST">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username" required></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" required></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="login">Log In</button></div>
            <a href="index.php" class="forgot">Back to Home</a>
        </form>
            <?php if (isset($_SESSION['error'])){?>
        <div class="alert alert-danger" role="alert" align="center">
            <?php 
            echo $_SESSION['error'];
            unset($_SESSION['error']);
            ?>
    <?php }?>
</div>

    <?php if (isset($_SESSION['success'])){?>
        <div class="alert alert-success" role="alert" align="center">
            <?php 
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
    <?php }?>
</div>

    <?php if (isset($_SESSION['warning'])){?>
        <div class="alert alert-danger" role="alert" align="center">
            <?php 
            echo $_SESSION['warning'];
            unset($_SESSION['warning']);
            ?>
    <?php }?>
           
            
    </div>   
           
   
           


</div>
</body>

</html>



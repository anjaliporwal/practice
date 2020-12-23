<?php
    session_start();
    include 'connection.php';
    include 'functions.php';

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $pwd =$_POST["pwd"];  

        if(!empty($name) && !empty($pwd)&& !empty($email)){

            $query="INSERT INTO user_db(username,email,pwd)values('$name', '$email','$pwd')";
            mysqli_query($conn, $query);

            header("Location: login.php");
            die;
        }else{
            echo "<script type='text/javascript'>alert('Please enter all information');</script>";

        }
    }

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Sign in</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <style>
            h2{
                font-family: Tahoma, Geneva, Verdana, sans-serif;
                font-weight: bold;
                color: rgb(67, 71, 75);
                text-align: center;

            }
        </style>
    </head>
    <body>
        <?php require 'template/navbar.php'; ?>
        <div class="container mt-4">
            <h2>SignUp</h2>
            <form method="post">
                
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
                </div> 
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
                </div>
                <!-- <div class="form-group">
                    <label for="pwd2">Confirm password:</label>
                    <input type="password" class="form-control" id="pwd2" placeholder="Enter password" name="pwd2" required>
                </div>   -->
                <input type="submit" class="btn btn-dark" value="Sign up" name="signup">
                <a href="login.php"><input type="button" class="btn btn-dark" value="Login" name="Login"></a>

            </form>
            
        </div>
        <?php require 'template/footer.php'; ?>
    </body>
</html>


<?php
    session_start();
    include 'connection.php';
    include 'functions.php';

    if(!empty($_POST["remember"])) {
        setcookie ("email",$_POST["email"],time()+ (86400 * 30), "/");
        setcookie ("pwd",$_POST["pwd"],time()+ (86400 * 30), "/");
    } 

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $pwd =$_POST["pwd"];  

        if(!empty($pwd)&& !empty($email)){

            $query="SELECT * FROM user_db where email='$email' limit 1";
            $result= mysqli_query($conn, $query);
            
            if($result)
            {
                if($result && mysqli_num_rows($result)> 0){

                    $user_data= mysqli_fetch_assoc($result);

                    if($user_data['pwd'] === $pwd){
                        $_SESSION['email']= $user_data['email'];      
                        header("Location: index.php");
                        die;
                    }
                    else{
                        echo "<script type='text/javascript'>alert('password mismatch');</script>";
                    }
                }
            }
            echo "<script type='text/javascript'>alert('Invalid information');</script>";
        }else{
            echo "<script type='text/javascript'>alert('Enter email id and password.');</script>";
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
            <br>
            <h2>Login</h2>
            <form method="POST"> 
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; }?>" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" value="<?php if(isset($_COOKIE["pwd"])) { echo $_COOKIE["pwd"]; }?>" required>
                </div>
                <input type="checkbox" name="remember" /> Remember me
                <br><br>
                <input type="submit" class="btn btn-dark" value="Login" name="signup">
                <a href="signin.php"><input type="button" class="btn btn-dark" value="Sign up" name="Sign in"></a>

            </form>
        </div>

        <?php require 'template/footer.php'; ?>

    </body>
</html>
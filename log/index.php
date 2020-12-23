<?php
    session_start();

    include 'connection.php';
    include 'functions.php';

    $user_data = check_login($conn);
?>
<!DOCTYPE html>
<html>
    <head>
        <title> My website </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
        #logout{
            text-align: right;
            font-weight: bold;
            margin: 10px;
        }
        h2{
            text-align: center;
            font-weight: bold;
            margin: 120px;
            font-size: 40px;
            
        }
        .nav{
            float: right;
        }
        </style>

    </head>
    <body>

        <?php require 'template/navbar.php'; ?>
        <ul class="nav"> 
        <li> <a id="logout" href="logout.php">Logout</a> </li> 
        <li> <a id="update" href="update.php">Change password</a> </li> 
        </ul><br><br><br><br><br>

        <h2 > Welcome
        <?php echo $user_data['email']; ?>
        </h2>

        <?php require 'template/footer.php'; ?>


    </body>
</html>


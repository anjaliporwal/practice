<?php
session_start();
if(isset($_SESSION['email'])){
    unset($_SESSION['email']);
}

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
            text-align: center;
            font-weight: bold;
            margin: 130px;
            font-size: 40px;
        }
        </style>

    </head>
    <body>

        <?php require 'template/navbar.php'; ?>

        <p id="logout" >You are logged out.</p>

        <?php require 'template/footer.php'; ?>


    </body>
</html>
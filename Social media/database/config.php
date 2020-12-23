<?php
    ob_start();
    session_start();

    $conn= mysqli_connect("localhost","root","","media");

    if(mysqli_connect_errno()){
        echo "Failed to connect: " . mysqli_connect_errno(); 
    }
    else{
        echo "We are connected successfully...";
    }



?>

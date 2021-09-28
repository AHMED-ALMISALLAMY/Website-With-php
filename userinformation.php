<?php 
    // connect database
    $host = "localhost";
    $user = "root";
    $pass = '';
    $db = "...";  // database name
    $connect = mysqli_connect($host , $user , $pass , $db);  // connect to database


    $user = $_POST['username'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = "INSERT INTO `...`('user' , 'email' , 'message') VALUES ('$user' , '$email' , '$message') "; 
    mysqli_query($connect , $query);

    echo "Message Is Sent";
?>
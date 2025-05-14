<?php

    $servername="localhost";
    $user="root";
    $pass="";
    $database="test";

    $conn=mysqli_connect($servername,$user,$pass,$database);
    if(!$conn){
        die("Connection error!".mysqli_connect_error());
    }
?>
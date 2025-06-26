<?php
    session_start();
    include "config.php";

    if(isset($_POST['viewbutton'])){
        $id=$_SESSION['id']; 
        $query="SELECT users.id,users.name,details.profession,details.company,details.city FROM users JOIN details ON users.id=details.userid WHERE users.id=$id";
        $queryresult=mysqli_query($conn,$query);
        $listarr=mysqli_fetch_assoc($queryresult);

        if($listarr) {
            header("location: list.php");
            die();
        }
        else{
            header("location: profilesetup.php");
            die();
        }
    }
    if(isset($_POST['savebtn'])){
        $id=$_SESSION['id'];
        $profession=$_POST["profession"];
        $company=$_POST["company"];
        $city=$_POST["city"];

        $sql="INSERT INTO details (userid,profession,company,city) VALUES ($id,'$profession','$company','$city')";
        
        if(mysqli_query($conn,$sql)){
            header("location: dashboard.php");
            die();
        }
        else{
            echo "Error: ".mysqli_error($conn);
        }
    }
    mysqli_close($conn);
?>
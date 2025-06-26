<?php
    session_start();
    include "config.php";

    $id=$_SESSION['id']; 
    $sql="SELECT users.id,users.name,details.profession,details.company,details.city FROM users JOIN details ON users.id=details.userid WHERE users.id=$id";
    $queryresult=mysqli_query($conn,$sql);
    if($queryresult){
        $record=mysqli_fetch_assoc($queryresult);
        if($record){
            echo json_encode($record);
        }
        else{
            echo json_encode(['error'=>'The profile is not set yet']);
        }
    }else
    echo mysqli_error($conn);    
?>
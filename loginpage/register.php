
<?php
    include "config.php";
    session_start();

    $name=$_POST["username"];
    $password=$_POST["password"];    
   
    $sql1="INSERT INTO users(name,password) values ('$name','$password')";
    $sql2="SELECT * FROM users WHERE name='$name'";
    $result1=mysqli_query($conn,$sql1);
    $result2=mysqli_query($conn,$sql2);

    if($result2){
        $record=mysqli_fetch_assoc($result2);
        $_SESSION['id']=$record['id'];
        header("location: dashboard.php");
        die();
    }
    else echo "No record of $name found";
    mysqli_close($conn);
?>

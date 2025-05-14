<?php        
    include "config.php";
    
    $name=$_POST["username"];
    $password=$_POST["password"];

    $sql="SELECT * FROM users WHERE name= '$name'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $id=$row['id'];
    
    if($row){
        if ($row["password"]==$password){
            header("location: dashboard.php?id=$id");// here get request is passed with a parameter username so that the redirected page can have access and further process it
            die();
        }else{
            die("<h3>Invalid Password</h3>");
        }
    }
    else die("<h3>Invalid username</h3>");

    mysqli_close($conn);
?>
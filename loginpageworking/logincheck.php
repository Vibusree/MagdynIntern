<?php   

    session_start();
    include "config.php";

    $name=$_POST["username"];    // htmlspecialchars converts special HTML characters into their HTML entity equivalents to prevent code injection (especially XSS).
    $password=$_POST["password"];

    // $pdo = new PDO("mysql:host=$servername;dbname=$database", $user, $pass);

    // // Use prepared statement
    // $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    // $stmt->execute([$username]);

    // // Fetch results
    // $user = $stmt->fetch();

    $sql="SELECT * FROM users WHERE name= '$name'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);

    if($row){
        $id=$row['id'];
        if ($row["password"]==$password){
            $_SESSION['id']=$id;
            header("location: dashboard.php");// here get request is passed with a parameter username so that the redirected page can have access and further process it
            die();
        }else{
            echo "Invalid password";
            die();
        }
    }
    else {
        echo "Invalid username";
        die();
    }

    mysqli_close($conn);
?>
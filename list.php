<?php
    include "config.php";

    $id=$_GET['id']; // value of viewbutton will be stored in id
    $sql="SELECT users.id,users.name,details.profession,details.company,details.city FROM users JOIN details ON users.id=details.userid WHERE users.id=$id";
    $queryresult=mysqli_query($conn,$sql);
    $record=mysqli_fetch_assoc($queryresult);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

</head>
<body class="d-flex justify-content-center align-items-center  min-vh-100 ">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <div class="container w-2">
        <table class="table table-striped">
        <thead>
            <tr>
            <th  scope="col">Key</th>
            <th  scope="col">Value</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($record as $key=>$value):
                    echo "<tr>";
                    echo "<th scope=\"row\">$key</th>";
                    echo "<td>$value</td>";
                    echo "</tr>";
                endforeach;
            ?>
        </tbody>
        </table>
    </div>
</body>
</html>
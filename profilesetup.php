<?php
    $id=$_GET['id'] //this id global and is from get request of profilecheck.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Setup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body class="d-flex justify-content-center align-items-center min-vh-100">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <form action="profileverify.php" method="POST">
    <div class="card text-center shadow p-3 mb-5 bg-body-tertiary rounded" >
        <div class="card-body d-flex flex-column" >  
          <h3 class="card-title text-center">Profile Setup</h3>
          <label class="text-start" for="profession">Profession</label>
          <input type="text" name="profession" required><br/>
          <label class="text-start" for="company">Company</label>
          <input type="text" name="company" required><br/>
          <label class="text-start" for="city">City</label>
          <input type="text" name="city" required><br/>
          <button  class="btn btn-primary" name="savebtn" value="<?php echo $id;?>" >Save</button>
        </div>
    </div>
    </form>
</body>
</html>

<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <!-- customize css -->
    <link rel="stylesheet" href="./assets/css/style.css" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
</head>
<body>
    <div class="heading">
        <h2 class="text-primary p-2">PHP CRUD Application Using jQuary Ajax</h2>
      </div>
      <div class="container">
      <h3>ADD USER</h3>
        <form method="POST">
            <div class="mb-3">
                <label for="uname" class="form-label">User Name</label>
                <input type="text" class="form-control" id="uname" name="uname" required>
              </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Phone No:</label>
              <input type="number" class="form-control" id="phone" name="phone" required>
            </div>
            <button type="reset" class="btn btn-primary">Reset</button>
              <button
                type="button"
                class="btn btn-primary"
                data-bs-dismiss="modal"
                onclick="location.href='index.php';">
                Cancle
              </button>
            <button type="submit" class="btn btn-primary">Add User</button>
          </form>
      </div>
    <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $uname=$_POST["uname"];
      $email=$_POST["email"];
      $phone=$_POST["phone"];
    
      $sql = "INSERT INTO User_info (id, uname, email, phone)
             VALUES (NULL, '$uname', '$email', '$phone')";
      $result = $con->query($sql); 
      if ($result) { 
        header("location:./index.php"); 
      }else{
         echo "error";
       }
     }
    ?> 

    <!-- bootstrap js -->
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
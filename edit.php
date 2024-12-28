<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- customize css -->
    <link rel="stylesheet" href="./assets/css/style.css" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <title>edit</title>
  </head>
  <body>
    <?php
        if(isset($_GET['id'])){
          $id = $_GET['id'];
          $sql = "SELECT * FROM User_info WHERE id = $id";
          $result = $con->query($sql);
          $row = $result->fetch_assoc()
          ?>

      <div class="heading">
        <h2 class="text-primary p-2">PHP CRUD Application Using jQuary Ajax</h2>
      </div>
      <div class="container">
        <h3>Edit Informtion</h3>
        <form method="POST">
            <div class="mb-3">
                <label for="uname" class="form-label">User Name</label>
                <input type="text" class="form-control" id="uname" name="uname" require value="<?php echo $row['uname']; ?>">
              </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" require value="<?php echo $row['email']; ?>">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Phone No:</label>
              <input type="number" class="form-control" id="phone" name="phone" require value="<?php echo $row['phone']; ?>">
            </div>
            <div class="mb-3">
              <input type="hidden" class="form-control" id="id" name="id" require value="<?php echo $row['id']; ?>">
            </div>
            <button type="reset" class="btn btn-primary">Reset</button>
              <button
                type="button"
                class="btn btn-primary"
                data-bs-dismiss="modal"
                onclick="location.href='index.php';">
                Cancle
              </button>
            <button type="submit" class="btn btn-primary" name="edit">Edit</button>
          </form>
      </div>
    
    <?php
        } 
        if(isset($_POST['edit'])){
          $id=$_GET['id'];
          $uname=$_POST['uname'];
          $email=$_POST['email'];
          $phone=$_POST['phone'];

          $sql = "UPDATE `user_info` SET `uname` = '$uname' , `email` = '$email' , `phone` = '$phone' WHERE `id` = $id";
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

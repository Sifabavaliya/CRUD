<?php
  include 'connection.php';
      if(isset($_POST['yes'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM User_info WHERE id = $id";
        if ($con->query($sql) === TRUE) {
          header("location:./index.php");
        }else {
            echo "Error: " . $con->error;
        }
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>delete</title>
  <!-- customize css -->
  <link rel="stylesheet" href="./assets/css/style.css" />
    <!-- bootstrap css -->
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
</head>
<body>
    <!-- Modal-->
     <div class="delete-modal">
      <div class="modal-heading">
        <h5>Delete Confirmation</h5>
      </div>
          <div class="modal-body">
          <p>Are you sure you want to delete user with ID <?php echo $_GET['id']; ?> </p>
          </div>
          <div class="modal-footer">
            <form action="" method="POST">
              <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
              <input type="Button" name="no" value="No" class="btn btn-secondary" onclick="location.href='index.php';">
              <input type="submit" name="yes" value="Yes" class="btn btn-primary">
            </form>
          </div>
    </div> 
      <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

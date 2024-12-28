<?php
  include 'connection.php';
      $id = $_GET['id'];
      $sql = "DELETE FROM User_info WHERE id = $id";
      if ($con->query($sql) === TRUE) {
        header("location:./index.php");
      } else {
          echo "Error: " . $conn->error;
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


<script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

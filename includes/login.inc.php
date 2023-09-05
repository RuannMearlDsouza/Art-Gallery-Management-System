<?php

if(isset($_POST{'login'})) {

  require 'dbh.inc.php';

  $email = $_POST['email'];
  $password = $_POST['password'];

  if(empty($email) || empty($password)) {
    header("location: ../login.php?error=emptyFields");
    exit();
  }
  else {
    $sql = "SELECT * FROM customer WHERE email=?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)) {
      header("location: ../login.php?error=sqlerror");
      exit();
    }
    else {

      mysqli_stmt_bind_param($stmt, "s", $email);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
          if($password!==$row['password']) {
          header("location: ../login.php?error=invalidPassword");
          exit();
        }
        else if($password==$row['password']) {
          session_start();
          $_SESSION['usrId'] = $row['cus_id'];
          $_SESSION['usrName'] = $row['name'];
          $_SESSION['usrType'] = "customer";
          header("location: ../gallery.php?login=success");
          exit();
        }
        else {
          header("location: ../login.php?error=invalidPassword");
          exit();
        }
      }
      else {
        header("location: ../login.php?erro=invalid_user");
        exit();
      }
    }
  }


}
else {
  header("location: ../login.php");
  exit();
}

























 ?>

<?php

if(isset($_POST{'login'})) {

  require 'dbh.inc.php';

  $email = $_POST['email'];
  $password = $_POST['password'];

  if(empty($email) || empty($password)) {
    header("location: ../artist.php?error=emptyFields");
    exit();
  }
  else {
    $sql = "SELECT * FROM artist WHERE email=?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)) {
      header("location: ../artist.php?error=sqlerror");
      exit();
    }
    else {

      mysqli_stmt_bind_param($stmt, "s", $email);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
          if($password!==$row['password']) {
          header("location: ../artist.php?error=invalidPassword");
          exit();
        }else if($row['approved']=="false")
        {
          echo 'Account is not yet approved';
          exit();
        }
        else if($password==$row['password']) {
          if(!isset($_SESSION))
          {
            session_start();
          } 


          $_SESSION['usrId'] = $row['id'];
          $_SESSION['usrName'] = $row['name'];
          $_SESSION['usrType'] = "artist";
          header("location: ../gallery.php?login=success");
          exit();
        }
        else {
          header("location: ../artist.php?error=invalidPassword");
          exit();
        }
      }
      else {
        header("location: ../artist.php?erro=invalid_user");
        exit();
      }
    }
  }


}
else {
  header("location: ../artist.php");
  exit();
}

























 ?>

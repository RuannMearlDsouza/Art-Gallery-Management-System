<?php

if(isset($_POST['submit'])){

	require 'dbh.inc.php';

  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $password_1=$_POST['password1'];
  $password_2=$_POST['password2'];
  $gender=$_POST['gender'];

  if($password_1 !== $password_2){
  		header("location: ../art_register.inc.php?error=passwordMismatch");
  		exit();
  }


  $sql = "SELECT email FROM artist WHERE email=?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt,$sql)) {
  		header("location: ../art_register.inc.php?error=sqlerror");
  }
  else {
  	mysqli_stmt_bind_param($stmt, "s",$email);
  	mysqli_stmt_execute($stmt);
  	mysqli_stmt_store_result($stmt);
  	$resultCheck = mysqli_stmt_num_rows($stmt);
  	if ($resultCheck>0) {
  			header("location: ../art_register.inc.php?error=emailtaken");
  			exit();
  	}
    else {
      $sql = "INSERT INTO artist (name,phone,gender,email,password,approved) VALUES (?,?,?,?,?,?)";
  		$stmt = mysqli_stmt_init($conn);
  		if (!mysqli_stmt_prepare($stmt,$sql)) {
  				header("location: ../art_register.inc.php?error=sqlerror");
  		}
  		else {
        $approved='false';
  			mysqli_stmt_bind_param($stmt, "ssssss",$name,$phone,$gender,$email,$password_1,$approved);
  			mysqli_stmt_execute($stmt);
        include("popup.php");

  			exit();
  		}
    }
	}
}

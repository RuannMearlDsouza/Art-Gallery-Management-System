<?php
include "includes/dbh.inc.php";

if(!isset($_SESSION))
{
  session_start();
}

if(!(isset($_SESSION['usrName']) && $_SESSION['usrName']=="Admin"))
{
  header("location: index.php?noAccess");
  exit();
}

$url = $_SERVER['REQUEST_URI'];

echo '<p>'.$url.'</p>';

$url_components = parse_url($url);

parse_str($url_components['query'],$params);

$artistId = $params['id'];

$sql = "UPDATE artist set approved='true' WHERE id=$artistId";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
  exit();
}
else {
  mysqli_stmt_execute($stmt);
  $url = "admin.php?approved_id=$artistId";
  header("Location: $url");
  }










 ?>

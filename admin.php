<?php

if(!isset($_SESSION))
{
  session_start();
}

if(!(isset($_SESSION['usrName']) && $_SESSION['usrName']=="Admin"))
{
  header("location: index.php?noAccess");
  exit();
}


 ?>



<?php include "header.php";
      include "includes/dbh.inc.php"?>

<h1>Welcome Admin</h1>
    <h2>Approve Pending</h2>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT id,name,phone,gender,email,approved FROM artist where approved='false';";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                  exit();
                }
                else {
                  mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);
                  while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>{$row["name"]}</td><td>{$row["phone"]}</td><td>{$row["gender"]}</td><td>{$row["email"]}</td><td><button onClick=\"window.location.href= 'approve_id.php?id=$row[id]'\" type=\"button\">Approve</button> </td></tr>" ;
                  }
                }


                 ?>




            </tbody>
        </table>
    </div>
    <h2>Approved Artist</h2>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
              <?php
              $sql = "SELECT id,name,phone,gender,email,approved FROM artist where approved='true';";
              $stmt = mysqli_stmt_init($conn);
              if(!mysqli_stmt_prepare($stmt,$sql)){
                exit();
              }
              else {
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                while($row = mysqli_fetch_assoc($result)) {
                  echo "<tr><td>{$row["name"]}</td><td>{$row["phone"]}</td><td>{$row["gender"]}</td><td>{$row["email"]}</td><td>Approved</td></tr>" ;
                }
              }


               ?>
            </tbody>
        </table>

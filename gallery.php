<?php
if(!isset($_SESSION))
{
  session_start();
}

if(!isset($_SESSION['usrId']))
{
  header("location: ../index.php");
  exit();
}


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900|Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <a href="index.php" class="header-brand">art-gallery</a>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
        </ul>
        <a href="includes/logout.inc.php" class="header-cases">Logout</a>
      </nav>
    </header>
    <main>
      <section class="gallery-links">
        <div class="wrapper">
          <?php

                if($_SESSION['usrType']=="customer")
                echo '<h1> Welcome Customer '.$_SESSION['usrName'].'<br>';
                else {
                  echo '<h1> Welcome Artist '.$_SESSION['usrName'].'<br>';
                }

           ?>
          <h2>Gallery</h2>

          <div class="gallery-container">
            <?php
            include_once 'includes/dbh.inc.php';

            $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              echo "SQL statement failed!";
            } else {
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);


              while ($row = mysqli_fetch_assoc($result)) {

                $artistId=$row['art_id'];
                $sql1="SELECT name,phone,email FROM artist WHERE id=$artistId;";
                $stmt2=mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt2, $sql1);
                mysqli_stmt_execute($stmt2);
                $result1 = mysqli_stmt_get_result($stmt2);
                $row1 = mysqli_fetch_assoc($result1);

                echo '<a href="#">
                  <div style="background-image: url(img/gallery/'.$row["imgFullNameGallery"].');"></div>
                  <h3>'.$row["titleGallery"].'</h3>
                  <p>'.$row["descGallery"].'</p>
                  <p>Artist: '.$row1["name"].'</p>
                  <p>Phone: '.$row1["phone"].'</p>
                  <p>Email: '.$row1["email"].'</p>
                </a>';
              }
            }
            ?>
          </div>

          <?php
          if (isset($_SESSION['usrName'])&& ($_SESSION['usrType']=='artist')) {
            echo '<div class="gallery-upload">
              <h2>Upload</h2>
              <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
                <input type="text" name="filename" placeholder="File name...">
                <input type="text" name="filetitle" placeholder="Image title...">
                <input type="text" name="filedesc" placeholder="Image description...">
                <input type="file" name="file">
                <button type="submit" name="submit">UPLOAD</button>
              </form>
            </div>';
          }
          ?>

        </div>
      </section>

    </main>

  </body>
</html>

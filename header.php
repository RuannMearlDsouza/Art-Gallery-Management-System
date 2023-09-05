<?php

if(!isset($_SESSION))
{
  session_start();
}


 ?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Art Gallery</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="assets/css/Basic-fancyBox-Gallery-v2.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar-1.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar-2.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar.css">
    <link rel="stylesheet" href="assets/css/dh-navbar-inverse.css">
    <link rel="stylesheet" href="assets/css/Filterable-Gallery-with-Lightbox.css">
    <link rel="stylesheet" href="assets/css/gallery.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/WOWSlider-about-us-1.css">
    <link rel="stylesheet" href="assets/css/WOWSlider-about-us-2.css">
    <link rel="stylesheet" href="assets/css/WOWSlider-about-us.css">
</head>

<body style="background-size: cover;">
    <div></div>
    <?php
    if(!isset($_SESSION))
    {
      session_start();
    } if(!(isset($_SESSION['usrName']) && $_SESSION['usrName']=="Admin"))
    echo '<div class="login-dark" style="background-image: url(&quot;assets/img/art-materials-1850856_1920.jpg&quot;);">'
    ?>

        <nav class="navbar navbar-light navbar-expand-md navigation-clean navbar-inverse navbar-fixed-top">
            <div class="container">

                <div><a class="navbar-brand" style="padding:0px;margin-left:0px;height:78px;" href="#"> <img class="img-fluid" src="assets/img/art-materials-1850856_1920.jpg"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto" style="margin-top:13px;">
                        <li class="nav-item" role="presentation"><a class="nav-link" uk-scroll="offset:50" href="index.php">Home </a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" uk-scroll="offset:100" href="about.php">ABout</a></li>
                        <?php
                        if(isset($_SESSION['usrName']) && $_SESSION['usrName']=='Admin')
                        {
                          echo'<li class="nav-item" role="presentation"><a class="nav-link" uk-scroll="offset:100" href="admin.php">Admin Page</a></li>';
                        }


                         ?>
                        <?php
                        if(isset($_SESSION['usrName'])) {
                          echo'<li class="nav-item" role="presentation"><a class="nav-link" uk-scroll="offset:100" href="gallery.php">Gallery</a></li>';
                          echo'<li class="nav-item" role="presentation"><a class="nav-link" uk-scroll="offset:50" href="includes/logout.inc.php">Logout</a></li>';
                        }
                        else {
                          echo'<li class="nav-item" role="presentation"><a class="nav-link" uk-scroll="offset:100" href="login.php">customer login</a></li>';
                          echo'<li class="nav-item" role="presentation"><a class="nav-link" uk-scroll="offset:50" href="artist.php">artist login</a></li>';
                          echo'<li class="nav-item" role="presentation"><a class="nav-link" uk-scroll="offset:100" href="admin_login.php">admin login</a></li>';
                        }


                         ?>

                    </ul>
            </div>
    </div>
    </nav>

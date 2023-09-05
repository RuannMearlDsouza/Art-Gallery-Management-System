<?php

if(!isset($_SESSION))
{
  session_start();
}





 if(isset($_SESSION['usrName']))
 {
   header("location: ../index.php?loggedIn=true");
   exit();
 }
?>





<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Artist Register</title>
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

<body style="background-image: url(&quot;assets/img/paper-3204064_1920.jpg&quot;);background-size: cover;background-position: top;background-repeat: no-repeat;">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean navbar-inverse navbar-fixed-top">
        <div class="container">
            <div><a class="navbar-brand" style="padding:0px;margin-left:0px;height:78px;" href="#"> <img class="img-fluid" src="assets/img/art-materials-1850856_1920.jpg"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>

            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto" style="margin-top:13px;">
                    <li class="nav-item" role="presentation"><a class="nav-link" uk-scroll="offset:50" href="index.php">Home </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" uk-scroll="offset:100" href="about.php">ABout</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" uk-scroll="offset:100" href="login.php">customer login</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" uk-scroll="offset:50" href="artist.php">artist login</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" uk-scroll="offset:100" href="admin_login.php">admin login</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <form action="includes/art_register.inc.php" method="post" class="custom-form" style="background-color: rgba(255,255,255,0);">
                <h1>Artist Register</h1>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Name </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="name"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="email" name="email" inputmode="email"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Phone</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="phone" inputmode="numeric"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Password </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="password" required="" name="password1"minlength="6" maxlength="20"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">Confirm Password </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="password" required="" name="password2" minlength="6" maxlength="20"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="dropdown-input-field">Gender</label></div>
                    <div class="col" style="padding-left: 0px;padding-right: 0px;margin-top: 7px;margin-right: 0px;margin-left: -75px;">
                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="gender" value="male"><label class="form-check-label" for="formCheck-1" style="padding-top: 4px;">Male</label></div>
                    </div>
                    <div class="col" style="width: 0px;margin-top: 7px;margin-left: -180px;">
                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" style="padding-top: 0;" name="gender" value="female"><label class="form-check-label" for="formCheck-1" style="padding-top: 3px;">Female</label></div>
                    </div>
                </div><button class="btn btn-light submit-button" type="submit" name="submit">Register</button></form>
        </div>
    </div>
    <?php include 'footer.php';?>

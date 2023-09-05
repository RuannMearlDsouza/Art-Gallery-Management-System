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




<?php include "header.php" ?>
    <form method="post" action="includes/admin_login.inc.php" style="background-color: rgba(30,40,51,0.82);">
        <h2 class="sr-only">Login Form</h2><label style="margin-left: 63px;">Welcome Admin!&nbsp;</label>
        <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
        <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" inputmode="email"></div>
        <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" minlength="6" maxlength="20"></div>
        <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="login">Log In</button></div><!--<a class="forgot" href="#">Forgot your email or password?</a><a class="forgot" href="register.php">New User? Register Here.</a>--></form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
    <script src="assets/js/Filterable-Gallery-with-Lightbox.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.js"></script>
    <script src="assets/js/WOWSlider-about-us.js"></script>
</body>

</html>

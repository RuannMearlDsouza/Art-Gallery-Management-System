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


<?php include 'header.php'; ?>
    <div class="container-fluid">
        <div class="row mh-100vh">
            <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block" style="background-image: url(&quot;assets/img/star-sky.jpg&quot;);">
                <div class="m-auto w-lg-75 w-xl-50">
                    <h2 class="text-info font-weight-light mb-5"><i class="fa fa-paint-brush"></i>&nbsp;Welcome Artist</h2>
                    <form action="includes/artist_login.inc.php" method="post">
                        <div class="form-group"><label class="text-secondary">Email</label><input class="form-control" type="text" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$" inputmode="email" name="email"></div>
                        <div class="form-group"><label class="text-secondary">Password</label><input class="form-control" type="password" required="" name="password"></div><button class="btn btn-info mt-2" name="login" type="submit">Log In</button>
                        <p class="mt-3 mb-0"><a class="text-info small" href="artist_register.php">Register as Artist</a></p></form>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background-image: url(&quot;assets/img/mona-lisa-74050_1920.jpg&quot;);background-size: cover;background-position: center center;">
                <p class="ml-auto small text-dark mb-2"><em>Photo by&nbsp;</em><a class="text-dark" href="https://unsplash.com/photos/v0zVmWULYTg?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText" target="_blank"><em>Aldain Austria</em></a><br></p>
            </div>
        </div>
    </div>
  <?php include 'footer.php';?>

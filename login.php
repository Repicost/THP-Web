<!DOCTYPE html>
<html lang="en">


<style>
.div1 {
    -webkit-column-count: 2; /* Chrome, Safari, Opera */
    -moz-column-count: 2; /* Firefox */
    column-count: 2;
    -webkit-column-gap: 40px; /* Chrome, Safari, Opera */
    -moz-column-gap: 40px; /* Firefox */
    column-gap: 40px;
}
</style>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>
<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
    <a href = "index.php" >
      <img src="thp.png" alt="Trulli" width="100" height="55">
    </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation begin -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Booking.php">Booking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>

            <!--dropdown begin-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Other Pages
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="Login.php">Login</a>
                <a class="dropdown-item" href="signup.php">signup</a>
                <a class="dropdown-item" href="History.php">History</a>
              </div>
            </li>
            <!--dropdown end-->
          </ul>
        </div>

      </div>
    </nav>
    <!-- navigation end -->
      <div class="container" style="padding: 50px;">
        <form method="post" action="<?php echo BASE_URL;?> login">
          <div   class="formClass" style="border-right: solid">
            <div class="rows">
              <h1> LOGIN </h1>
            </div>
              <div class = "rows">
                <h6> Email </h6>
                 <input type="email" name="Email" class="form-control">
              </div>
              <div class="rows">
                <h6> Password </h6>
                <input type="password" name="password" class="form-control">
              </div>
              <a href="#" class="text-center">Forgot Password?</a>
              <div class="container" style="margin-left: -30px; margin-top: 20px;">
                <div class="col-sm-4">
                  <button type="submit" name="login_user" class="btn-lg btn-danger active" style="float:left;">SIGN-IN</button>
                </div>
                <div class="col-sm-4" style="float:right; margin-top:-2px;">
                  <button type="submit" name="login_user" class="btn-lg btn-primary active" style="float:left;">SIGN-UP</button>
                  <!-- <a href="<?php echo BASE_URL;?>sign-up" class="btn-lg btn-primary active" role="button" style="text-decoration:none;">SIGN-UP</a> -->
                </div>
              </div>
          </div>
        </form>
    </div>
    <!-- <div class = "col-sm-6">
      <div class="rows">
        <p class="text-center">Don't have an account yet?</p>
       </div>
       <div class="rows">
          <center><a href="<?php echo BASE_URL;?>sign-up" class="btn-lg btn-primary" role="button" style="text-decoration:none;">SIGN-UP</a><center>
       </div>
    </div> -->


    <!-- Footer -->
    <footer class="py-5 bg-dark" style="padding:200px;">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>

  </body>


</html>

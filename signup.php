<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome Style-sheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

    <div class="container" style="padding:100px;">
      <div class="rows">
        <h1>SIGNUP</h1>
      </div>

      <div class="row">
        <div class="col-sm-6">
          <form method="post" action="views/requires/register.php">
     				<div class="rows">
     					<div class="contianer">
     						<div class="rows">
     							<h6> Email </h6>
     							<input type="text" name="Email" class="form-control" id="email">
     						</div>
     						<div class="rows">
     							<h6> Password </h6>
     							<input type="password" name="Password" class="form-control">
     						</div>
     						<div class="rows">
     							<h6> Retype password </h6>
     							<input type="password" name="secondPword"class="form-control">
     						</div>
     						<div class="rows" style="margin-left: -15px; padding-bottom: 70px;">
     							<div class="col-sm-6">
     								<h6> First Name </h6>
     								<input type="text" name="fName" class="form-control">
     							</div>
     							<div class="col-sm-6">
     								<h6> Last Name </h6>
     								<input type="text" name="lName" class="form-control">
     							</div>
     						</div>
     						<div class="rows">
     							<h6> Contact Number </h6>
     							<input type="text" name="contactNo" class="form-control">
     						</div>
     						<div class="rows">
     							<h6> Address </h6>
     							<input type="text" name="address" class="form-control">
     						</div>
     					</div>
     				</div>
     				<div class="rows">
     					<div class="col-sm-6" style="margin-left: -20px; margin-top: 20px;">
     						<button type="submit" name="register" class="btn-lg btn-danger active" value="Submit data">REGISTER</button>
     					</div>
     				</div>
     			</form>
        </div>
        <div class="col-sm-6">
          <h1>
            <i class="fa fa-address-card fa-9x"></i>
          </h1>
       </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

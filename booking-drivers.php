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

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
      <a href = "index.html" >
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
            <a class="dropdown-item" href="Login.php">Login </a>
            <a class="dropdown-item" href="signup.php">Sign Up</a>
            <a class="dropdown-item" href="History.php">History</a>
          </div>
        </li>
        <!--dropdown end-->
      </ul>
    </div>

  </div>
</nav>

 <div class="container">
		<div class = "col-sm-11">
			<?php
				$email = $_SESSION['Email'];
				$dbc = mysqli_connect('localhost', 'root', '', 'thp') or die("Unable to connect to Database.");
				$sql = "SELECT firstname, lastname, address FROM user WHERE email = '$email'";

				$result = mysqli_query($dbc, $sql);
				$row = mysqli_fetch_array($result);

				echo "<p>" . $row["lastname"] . ", " . $row["firstname"] . "</p>";
				echo "<p>" . $row["address"] . "</p>";

				echo "<p> YOUR ASSIGNED DRIVER IS:";
				
				

?>

<input type="text" readonly> 
<br>
<br>
<b>Location:</b>


<?php

$dbc = mysqli_connect('localhost', 'root', '', 'thp') or die("Unable to connect to Database.");
$sql = "SELECT des_location FROM destination";

$result = mysqli_query($dbc, $sql);
$row = mysqli_fetch_array($result);
							
	echo "<p>" . $row["des_location"] . "</p>";
   //<input type='text' placeholder='Destination Address' class='searchBar' name='dropOffPoint'>
		
?>
<br>

	
	<a href='payment.php'
	class='btn-lg btn-primary' type='button' name='BtnNext' 
	style='text-decoration:none'>NEXT</a>

	
			</div>
		</div>
	 		  

</div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
    <!-- /.container -->

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

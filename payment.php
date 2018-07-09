

<!DOCTYPE html>
<html lang="en">

<style>
.myClass{
    background-color:white;
    width:900px;
    height:350px;
    box-shadow:10px 10px 40px grey;  
	position:relative;
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
<!-- navigation end -->
<br>

      <!-- Page Heading/Breadcrumbs -->
  <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">About
        <small>THP Transport Services</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Payment</li>
      </ol>

    <!-- Page Content -->

 <br>
<b>Date:</b> &nbsp; 
<script>

var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();

if(dd<10) {
    dd = '0'+dd
} 

if(mm<10) {
    mm = '0'+mm
} 

today = mm + '/' + dd + '/' + yyyy;
document.write(today);

</script>
&nbsp; &nbsp; 
 <b>Total: </b> 
 <br>

<br>
  <div class="myClass">
  <br>

 &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <b> Pay with my PayPal account </b> 
 &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 
 &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 
 &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 
 &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 
 &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 
 &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 
 &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 
 &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 
 &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 
 &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 

 <img src='paypal2.png' height="50px">
 <br>
 &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; login to your PayPal account to complete the transaction
<br>
<br>
&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; Email
<br>
&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input type="text">
<br>
&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; PayPal password
<br>
&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input type="text">

	<br>
	<br>
	&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
	<a href='paypal.php'
	class='btn-lg btn-primary' type='button' name='BtnNext' 
	style='text-decoration:none'>Log In</a>

	

	
	
	
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
		

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

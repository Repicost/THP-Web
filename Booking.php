<!DOCTYPE html>
<html lang="en">
<style>
input[type=text],select {
    width: 20%;
    padding: 10px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=date],select {
    width: 17%;
    padding: 10px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.myClass{
    background-color:white;
    width:1000px;
    height:610px;
    box-shadow:20px 20px 50px grey;
}
.div7{
	position: relative;
	left:600px;
	width: 320px;
    padding: 10px;
    border: 5px solid gray;
    margin: 0;
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


<br>

<?php

	$host = "localhost";
	$user = "root";
	$password = "";
	$dbname = "thp";
	$con = mysqli_connect($host,$user,$password,$dbname) or die("Error " . mysqli_error($con));

if(isset($_POST['BtnNext'])){
    //$des_id = $_POST['des_id'];
	$des_location = $_POST['des_location'];
	$des_location = $_POST['des_pickup'];
	$des_location = $_POST['des_dropoff'];
	$des_cription = $_POST['des_cription'];
	$des_rate = $_POST['des_rate'];
	$des_date = $_POST['des_date'];
    $des_lastDate = $_POST['des_lastDate'];

	if($des_location=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the location')</script>";
	exit();//this use if first is not work then other will not show
    }
   if($des_pickup=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the pick-up point')</script>";
	exit();//this use if first is not work then other will not show
    }
	if($des_dropoff=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the drop-off point')</script>";
	exit();//this use if first is not work then other will not show
    }
	if($des_cription=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter additional information')</script>";
	exit();//this use if first is not work then other will not show
    }
	if($des_date=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the date of departure')</script>";
	exit();//this use if first is not work then other will not show
    }
	if($des_lastDate=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the date of arrival')</script>";
	exit();//this use if first is not work then other will not show
    }


	$query= "INSERT INTO `destination`(`des_location`,`des_pickup`, `des_dropoff`,
	`des_cription`, `des_rate`, `des_date`, `des_lastDate`)
	VALUES ('$des_location','$des_pickup','$des_dropoff','$des_cription','$des_rate','$des_date','$des_lastDate')";
	$result=mysqli_query($con,$query) or die ('ff');
		echo "<script>alert('Processed Successfully!')</script>";
		echo "<script>setTimeout(\"location.href='history.php';\",0);</script>";
}

?>


<div class="container" style="padding:100px;">


<div class ="rows">
				<?php
				$email = $_SESSION['Email'];
				$dbc = mysqli_connect('localhost', 'root', '', 'thp') or die("Unable to connect to Database.");
				$sql = "SELECT firstname, lastname, address FROM user WHERE email = '$email'";
				mysqli_select_db($dbc,"dropdown");

				$result1 = mysqli_query($dbc, $sql);
				$row = mysqli_fetch_array($result1);

				echo "<p>" . $row["lastname"] . ", " . $row["firstname"] . "</p>";
				echo "<p>" . $row["address"] . "</p>";

?>

  <div class="myClass">


  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

  <script type="text/javascript">
  $(document).ready(function() {
    $('#des_location').change(function(){
      if($('#des_location').val() === 'NAIA')
         {
         $('#other').show();
         }
      else
         {
         $('#other').hide();
         }
    });
  });
  </script>

  <script type="text/javascript">
  $(document).ready(function() {
  $('#des_location').change(function(){
  if($('#des_location').val() === 'MANILA')
     {
     $('#other1').show();
     }
  else
     {
     $('#other1').hide();
     }
  });
  });


  </script>

  <form method="post"  enctype="multipart/form-data">
	&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;  &nbsp;
	<td>

			<script language="JavaScript">
			<!--

			function changeValue() {
			  var values = ['No Item Selected', '₱2,500.00', '₱3,500.00', '₱3,600.00', '₱3,600.00','₱4,000.00',
			  '₱3,500.00', '₱3,600.00', '₱3,700.00','₱4,700.00','₱4,900.00','₱4,200.00','₱4,500.00','₱5,000.00',
			  '₱4,800.00','₱5,000.00','₱5,500.00','₱5,200.00','₱5,700.00','₱5,300.00','₱5,500.00','₱4,800.00',
			  '₱4,400.00','₱4,200.00','₱4,100.00','₱4,200.00','₱4,500.00','₱4,600.00','₱5,000.00','₱5,300.00',
			  '₱5,700.00','₱6,200.00','₱5,700.00','₱6,200.00','₱6,200.00','₱6,500.00','₱6,700.00','₱6,300.00',
			  '₱6,700.00','₱6,000.00','₱5,500.00','₱5,500.00','₱7,000.00','₱7,500.00','₱7,900.00','₱6,400.00 ',
			  '₱6,300.00 ','₱6,200.00 ','₱7,400.00','₱7,500.00','₱8,300.00','₱7,800.00','₱8,600.00','₱9,500.00',
			  '₱10,200.00','₱11,200.00','₱14,500.00','₱12,000.00','₱13,400.00',

			  '₱3,500.00','₱3,500.00','₱5,500.00','₱5,500.00','₱5,500.00','₱5,500.00','₱5,500.00','₱5,500.00',
			  '₱5,500.00','₱5,500.00','₱5,500.00','₱6,000.00','₱7,500.00','₱6,500.00','₱8,000.00','₱6,500.00',
			  '₱8,000.00','₱6,500.00','₱8,000.00','₱12,000.00','₱4,500.00','₱5,000.00','₱6,500.00','₱6,500.00',
			  '₱6,500.00','₱7,500.00','₱ 10,000.00','₱8,000.00','₱12,000.00','₱10,000.00','₱8,000.00','₱10,000.00',
			  '₱8,500.00','₱11,500.00','₱10,000.00','₱10,000.00','₱12,000.00','₱14,500.00','₱20,000.00','₱21,000.00',
			  '₱15,500.00','₱18,000.00','₱22,000.00','₱20,000.00','₱22,000.00'];
			  document.getElementById('des_rate').value = values[document.getElementById('des_location').selectedIndex];
			 }
            </script>

<!DOCTYPE html>

<html>

    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;  &nbsp;&nbsp; &nbsp; From Metro Manila to :
&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;&nbsp; &nbsp; &nbsp; Price:
<br>
<form>
	&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <select name='des_location' id='des_location' onchange='changeValue();'>
		<option value=''>Select location</option>
		<option value="NAIA">NAIA to Any Hotel in Metro Manila</option>
		<option value="MANILA">Metro Manila</option>
		<option value=''>Kawit,Cavite</option>
		<option value=''>Kawit,Noveleta </option>
		<option value=''>Kawit,Rosario</option>
		<option value=''>Kawit,Bacoor</option>
		<option value=''>Kawit,Imus</option>
		<option value=''>Kawit,Gen Tria</option>
		<option value=''>Kawit,Dasmariñas</option>
		<option value=''>Kawit,Trece Martires</option>
		<option value=''>Kawit,Tanza</option>
		<option value=''>Kawit,Naic</option>
		<option value=''>Kawit,Ternate </option>
		<option value=''>Kawit,Maragondon </option>
		<option value=''>Kawit,Indang </option>
		<option value=''>Kawit,Mendez </option>
		<option value=''>Kawit,Amadeo </option>
		<option value=''>Kawit,Alfonzo</option>
		<option value=''>Kawit,Bailen </option>
		<option value=''>Kawit,Magallanes</option>
		<option value=''>Kawit,Silang</option>
		<option value=''>Kawit,Carmona</option>
		<option value=''>Laguna,San Pedro</option>
		<option value=''>Laguna,Splash Island</option>
		<option value=''>Laguna,Biñan</option>
    <option value=''>Laguna,Sta.Rosa</option>
		<option value=''>Laguna,Cabuyao</option>
		<option value=''>Laguna,Calamba</option>
		<option value=''>Laguna,Los Baños</option>
		<option value=''>Laguna,Calauan</option>
		<option value=''>Laguna,Pandin Lake</option>
    <option value=''>Laguna,Alaminos</option>
		<option value=''>Laguna,San Pablo</option>
		<option value=''>Laguna,Sta.Cruz</option>
		<option value=''>Laguna,Nagcarlan</option>
		<option value=''>Laguna,Majayjay</option>
		<option value=''>Laguna,Pagsanjan</option>
		<option value=''>Laguna,Lumban</option>
		<option value=''>Laguna,Paete</option>
		<option value=''>Laguna,Pangil</option>
		<option value=''>Laguna,Famy</option>
		<option value=''>Quezon,Real</option>
		<option value=''>Quezon,Infanta</option>
		<option value=''>Quezon,Mauban</option>
		<option value=''>Quezon,Dolores</option>
		<option value=''>Quezon,Tiaong </option>
		<option value=''>Quezon,Villa Escudero</option>
		<option value=''>Quezon,Candelaria	 </option>
		<option value=''>Quezon,Sariaya</option>
		<option value=''>Quezon,Lucena</option>
		<option value=''>Quezon,Tayabas</option>
		<option value=''>Quezon,Pagbilao</option>
		<option value=''>Quezon,Atimonan</option>
		<option value=''>Quezon,Gumaca</option>
		<option value=''>Quezon,Gen.Luna</option>
		<option value=''>Quezon,San Andres Port</option>
		<option value=''>Quezon,Calauag </option>
		<option value=''>Quezon,San Narciso</option>

	  <option value=''>Enchanted Kingdom</option>
		<option value=''>Bulacan</option>
	  <option value=''>Pansol,Laguna(day tour)</option>
		<option value=''>Tagaytay(day tour)</option>
	  <option value=''>Nasugbu(day tour)</option>
		<option value=''>Ternate(day tour)</option>
	  <option value=''>Pico de Loro(day tour)</option>
		<option value=''>Batulao,Batangas(day tour)</option>
	  <option value=''>Gulugod,Batangas(day tour)</option>
		<option value=''>Cuenca,Batangas(day tour)</option>
	  <option value=''>Maculot,Batangas(day tour)</option>
		<option value=''>Laiya,San Juan(day tour)</option>
	  <option value=''>Laiya,San Juan(overnight)</option>
		<option value=''>Lucban(day tour)</option>
		<option value=''>Lucban(2 days 1 night)</option>
		<option value=''>Pagbilao(day tour)</option>
		<option value=''>Pagbilao(2 days 1 night)</option>
	  <option value=''>Kwebang Lagpas(day tour)</option>
		<option value=''>Kwebang Lagpas(2 days 1 night)</option>
		<option value=''>Mauban Port,Borawan,Real,Jomalig(2 days 1 night)</option>
	  <option value=''>Mt. Batolusong,Mt. Cayabo,Mt. Maynobo,Tanay,Rizal(day tour)</option>
		<option value=''>Mt. Daraitan,Masungi Georeserve(day tour)</option>
		<option value=''>Subic(day tour)</option>
		<option value=''>Las Casas(day tour)</option>
	  <option value=''>Bagac(day tour)</option>
		<option value=''>Tarak(Mariveles, Morong)(day hike)</option>
		<option value=''>Tarak(Mariveles, Morong)(overnight)</option>
	  <option value=''>Dingalan,Minalungao,Mt. Sawi(day tour)</option>
		<option value=''>Baler,Dipacutan(2 days 1 night)</option>
	  <option value=''>Tarlac,Hundred Islands,Bolinao,Patar,La Union(day tour) </option>
		<option value=''>San Antonio,Potipot,Pundaquit,Nagsasa Cove,Candelaria,Zambales(day tour)</option>
		<option value=''>San Antonio,Potipot,Pundaquit,Nagsasa Cove,Candelaria,Zambales(2 days, 1 night)</option>
	  <option value=''>Palauig,Tapulao,Iba(day hike)</option>
		<option value=''>Palauig,Tapulao,Iba(overnight)</option>
		<option value=''>Magalawa Island(2 days, 1 night)</option>
	  <option value=''>Baguio,Benguet,La Preza,La Trinidad,Mt.Ulap,Mt. Purgatory,Mt. Pulag(day tour)</option>
		<option value=''>Baguio,Benguet,La Preza,La Trinidad,Mt.Ulap,Mt. Purgatory,Mt. Pulag(2 days, 1 night)</option>
		<option value=''>Mt. Ugo(2 days, 1 night)</option>
	  <option value=''>Sagada, Banaue, Kalinga, Buscalan(3 days,2 nights)</option>
		<option value=''>Ilocos Tour(3 days, 2 nights)</option>
		<option value=''>Calaguas(2 days, 1 night)</option>
		<option value=''>Sabang Port(2 days, 1 night)</option>
	  <option value=''>Caramoan(3 days,2 nights)</option>
		<option value=''>Albay(3 days, 2 nights)</option>
	  <option value=''>Matnog(3 days, 2 nights)</option>

		<!--option value=''>Item 8</item-->
		</select>

	 &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <td><input type='text' id='des_rate' name='des_rate' value='No location Selected' readonly>
		</form>


	 &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 <b><input type="text" id="other" name="other" value="+250 per waiting hour" style="display: none;"/readonly></b>
     <b><input type="text" id="other1" name="other1" value="3500 for 10 hrs plus 200 per hour in OT " style="display: none;"/readonly></b>

	<br>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
  <td> <input type="text" id="des_pickup" placeholder="Pick-up point" name="des_pickup"></td>

	<tr>
	</tr>
	<tr>

	&nbsp; &nbsp;  &nbsp; &nbsp;<td> <input type="text" height="24px" id="des_dropoff" placeholder="Drop-off point" name="des_dropoff"></td>
	<tr>
	</tr>
	<tr>
	<br>
	<br>

	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
												<textarea cols='66' rows='7' placeholder="Other details"></textarea>

	</tr>
	<tr>
	<td>
	<br>

	&nbsp; &nbsp; &nbsp;  &nbsp; From: <input type="date" id="des_date" value="0000-00-00" name="des_date"></td>
	</tr>
	<tr>
	<td> &nbsp; &nbsp; &nbsp; &nbsp; To: <input type="date" id="des_lastDate" value="0000-00-00" name="des_lastDate"> </td>
	</tr>
<br>
<br>

	<!--<td style="align:center;"> <br> <br> <center><button type="submit" name="BtnNext">Next</button>    </td>
    -->
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;

	<a href='booking-drivers.php'
	class='btn-lg btn-primary' type='button' name='BtnNext'
	style='text-decoration:none'>NEXT</a>

	<!--button type="submit" name="BtnNext">Submit</button-->

	</form>
	</tr>

	</div>

</div>
</center>


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

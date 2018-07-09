

<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;
    height: 600px;

}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 600px;
}




body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 650px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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
                <a class="nav-link" href="Gallery.php">Gallery</a>
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
                  <a class="dropdown-item" href="login.php">Full Width Page</a>
                  <a class="dropdown-item" href="signup.php">Sidebar Page</a>
                  <a class="dropdown-item" href="Become a driver.php">FAQ</a>
                </div>
              </li>
              <!--dropdown end-->
            </ul>
          </div>

        </div>
      </nav>
      <!-- navigation end -->






<body>







<?php



require_once('connect.php');
$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);// or die ('Error to connect mysql');;


$update = "select * from destination"; 
$updateResult = mysqli_query($dbc,$update);



?>


<div class="container" style="padding:100px;">


<div name= "div1" style="width:1000px;border:1px dotted #B4AFAA;" ><B><font size="4.9px">&nbsp; History of Trips</font></B></div>



<!--table style="width:100%"-->

<!DOCTYPE html>
<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th {
    background-color: #9B997F;
    color: white;
}
th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}
</style>
</head>
<body>



<br>

 <?php

// Establish Connection to the Database
	$host = "localhost";
	$user = "root";
	$password = "";
	$dbname = "thp";
	$con = mysqli_connect($host,$user,$password,$dbname) or die("Error " . mysqli_error($con));
	
$per_page=4;

if (isset($_GET["page"])) {

$page = $_GET["page"];

}

else {

$page=1;

}

// Page will start from 0 and Multiple by Per Page
$start_from = ($page-1) * $per_page;

//Selecting the data from table but with limit
$query = "SELECT * FROM destination LIMIT $start_from, $per_page";
$result = mysqli_query ($con, $query);
                   
?>  
  <div style="width:1000px;  padding-left:5px; padding-right:5px;"> 
<table id="myTable">
<thead>
    <tr>
		<th></th>
	  <th>ID</th>
      <th>Destination</th>
	  <th>Pick-up point</th>
	  <th>Drop-off point</th>
      <th>Destination information</th>
      <th>Rate</th>
      <th>Date of departure</th>
      <th>Date of arrival</th>	  
   
	  <th> </th>

   
    </tr>
</thead>
<tbody>



    <?php
	
	
	$cnt = 1;
   while($updateRow = mysqli_fetch_array($updateResult))
   {
 
	    echo"<tr>
	 	<td>".$cnt++."</td>
		<td>".$updateRow['des_id']."</td> 
		<td>".$updateRow['des_location']."</td>
		<td>".$updateRow['des_pickup']."</td>
		<td>".$updateRow['des_dropoff']."</td>
		<td>".$updateRow['des_cription']."</td>		
        <td> ₱".$updateRow['des_rate']."</td>
   	    <td>".$updateRow['des_date']."</td>
   	    <td>".$updateRow['des_lastDate']."</td>

		
	
	

		

		
		
		
		 <td><center>
		
		
	 </tr>";
	}

	?>
	</tbody>
	</table>
	</body>
	</html>

 <!--<form method="post" action="export.php">
 <td style="align:center;"> <br> <br> <center><button type="submit" name="export" class= "btn btn-success" value="Export" >Export</button>    </td>

    </form>-->
	<br>
	<br>
	
	
	
	



<?php
/*
    <input type="submit" name="export" class="btn btn-success" value="Export" />
	
	
	
//Now select all from table
$query = "select * from student_tbl2";
$result = mysqli_query($con, $query);

// Count the total records
$total_records = mysqli_num_rows($result);

//Using ceil function to divide the total records on per page
$total_pages = ceil($total_records / $per_page);

//Going to first page
echo "<center><a href='table.php?page=1' style='text-decoration:none'><font color='black'>".'First Page'."</font></a> ";

for ($i=1; $i<=$total_pages; $i++) {

echo "<a href='table.php?page=".$i."' style='text-decoration:none'><font color='black'>".$i."</font></a> ";
};
// Going to last page
echo "<a href='table.php?page=$total_pages' style='text-decoration:none'><font color='black'>".'Last Page'."</a></font></center>";
*/
?>
   <!-- <tr>
    </tr>
	</table>
    </div></center>
    
    <div id="id01" class="modal">
<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

<center>
<div style="width:50%; background-color:white;">

		<tr>
    <center>
	
	 <td><center><button type='submit' onclick='delStud(" . $updateRow[0] . ")' name='delbtn' value='Remove'>Remove</button>
		&nbsp;&nbsp;&nbsp;<a onclick='editStud' name= 'editbtn' value='edit' href='UPDATE_INFO.php?id=" . $updateRow[0] ."'>Edit</a></center></td>
  

-->
</div>
</center>
</form>



 <script>


/*
		function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
*/

$(document).ready(function() {
    $('#myTable').DataTable( {
        "scrollX": true
    } );
} );
</script>   



</div>
</body>
</html>
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


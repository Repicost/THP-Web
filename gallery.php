<!DOCTYPE html>
<html lang="en">


  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

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

      <h1>Gallery</h1>

        <div class="tab">
          <button class="tablinks" onclick="openCity(event, 'Pictures')" id="defaultOpen">Pictures</button>
          <button class="tablinks" onclick="openCity(event, 'Videos')">Videos</button>
      	 </div>
      <div id="Pictures" class="tabcontent">

      <br>
      <br>
        <br>
      <div class="row">
        <div class="column">
          <img src="sample/coleen_wide.jpg" style="width:90%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
        </div>
        <div class="column">
          <img src="sample/foreigners_wide.jpg" style="width:90%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
        </div>
        <div class="column">
          <img src="sample/ilocos_wide.jpg" style="width:90%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
        </div>
        <div class="column">
          <img src="sample/baler_wide.jpg" style="width:90%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
        </div>
      </div>

      <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">

          <div class="mySlides">
            <div class="numbertext">1 / 4</div>
            <img src="sample/coleen_wide.jpg" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">2 / 4</div>
            <img src="sample/foreigners_wide.jpg" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">3 / 4</div>
            <img src="sample/ilocos_wide.jpg" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">4 / 4</div>
            <img src="sample/baler_wide.jpg" style="width:100%">
          </div>

          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>

          <div class="caption-container">
            <p id="caption"></p>
          </div>


        </div>
      </div>

      </div>

      <div id="Videos" class="tabcontent">
      			<video width="300" height="300" controls>
        		  <source src="img/Videos/THP_VID1.mp4" type="video/mp4">
        		  <source src="THP_VID1.ogg" type="video/ogg">
      		  </video>

      	&nbsp; &nbsp; &nbsp;
      			<video width="250" height="300" controls>
        		  <source src="img/Videos/THP_VID2.mp4" type="video/mp4">
        		  <source src="THP_VID2.ogg" type="video/ogg">
      		  </video>
      	&nbsp; &nbsp; &nbsp;

            <video width="300" height="300" controls>
      			  <source src="img/Videos/THP_VID3.mp4" type="video/mp4">
      			   <source src="THP_VID3.ogg" type="video/ogg">
      			</video>
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

    <script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }


    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();

    </script>

    <script>
    function openModal() {
      document.getElementById('myModal').style.display = "block";
    }

    function closeModal() {
      document.getElementById('myModal').style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }
    </script>

  </body>

</html>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no, user-scalable=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="CSS/style.css">

  <!--Browser tab icon and title-->
  <link rel="icon" href="res/img/AFIcon.png">
  <title>BSU_Bulldogs</title>

  <!--load database credentials for sql access-->
  <?php
  require('db.php');
  ?>
</head>

<body>
	<!--bootstrap container-->
<div class="container">

	<!--Top row for logo and cover photo slideshow-->
  <div class="row">
    <!--logo-->
    <div class="col-sm-12 col-md-3 col-lg-3">
      <a href="index.php" id="logo"><img class="d-block w-100" src="res/img/bulldogslogo.png"></a>
    </div>

    <!--cover using bootstrap carousel-->
    <div class="d-none d-md-block col-md-9">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

          <div class="carousel-item active">
            <img class="d-block carousel-image" src="res/img/cover/bulldogscover1.png" alt="First slide">
          </div>

          <div class="carousel-item">
            <img class="d-block carousel-image" src="res/img/cover/bulldogscover2.png" alt="Second slide">
          </div>

          <div class="carousel-item">
            <img class="d-block carousel-image" src="res/img/cover/bulldogscover3.png" alt="Third slide">
          </div>

        </div>
      </div>
    </div>

  </div>


  <!--Lower row for menu and page content-->
  <div class="row">
    <!--menu display when screen medium or bigger-->
    <div class="d-none d-md-block col-md-2" id="menu">
      <a href="index.php">Home</a>
      <a href="playerProfiles.php">Player Profiles</a>
      <a href="planner.php">Planner</a>
      <a href="blog.php">Blog</a>
      <a href="gallery.php">Gallery</a>
      <a id="current">Connect</a>
      <a id="login" href="PPCreate.php">Log In</a>
    </div>

    <!--menu display when screen small or smaller-->
    <div class="d-sm-block col-sm-12 d-md-none w-100" id="menu-collapsed">
      <nav class="navbar navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">

            <a href="index.php">Home</a>
            <a href="playerProfiles.php">Player Profiles</a>
            <a href="planner.php">Planner</a>
            <a href="blog.php">Blog</a>
            <a href="gallery.php">Gallery</a>
            <a id="current">Connect</a>
            <a id="login" href="PPCreate.php">Log In</a>

          </ul>
        </div>

      </nav>
    </div>

      
    <!--Connect page content-->
    <div class="col-xs-12 col-md-10" id="pageBody">

    	<!--Each social media link is contained within .contactDiv for 75% width and background colours,
    		then each div contains media logo and text link-->
      <div class="contactDiv">
        <img class="contactImg" src="res/img/Facebook.png">
        <a href="https://www.facebook.com/bulldogsbathspa/" target="_blank" class="connectText">@bulldogsbathspa</a>
      </div>

      <div class="contactDiv">
        <img class="contactImg" src="res/img/Insta.png">
        <a href="https://www.instagram.com/officialbathspabulldogsteam/?hl=en" target="_blank" class="connectText">@officialbathspabulldogsteam</a>
      </div>

      <div class="contactDiv">
        <img class="contactImg" src="res/img/snapcode.png">
        <a href="#" class="connectText">@bathspabulldogs</a>
      </div>

      <div class="contactDiv">
        <img class="contactImg" src="res/img/gmail.png">
        <a href="#" class="connectText">officialbathspabulldogs@gmail.com</a>
      </div>

    </div>

  </div>



</div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- My JS -->
    <script src='JS/script.js'></script>

</body>
</html>
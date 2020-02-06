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
      <a id="current">Player Profiles</a>
      <a href="planner.php">Planner</a>
      <a href="blog.php">Blog</a>
      <a href="gallery.php">Gallery</a>
      <a href="connect.php">Connect</a>
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
            <a id="current">Player Profiles</a>
            <a href="planner.php">Planner</a>
            <a href="blog.php">Blog</a>
            <a href="gallery.php">Gallery</a>
            <a href="connect.php">Connect</a>
            <a id="login" href="PPCreate.php">Log In</a>

          </ul>
        </div>
      </nav>
    </div>

      
    <!--Player Profiles content-->
    <div class="col-xs-12 col-md-10" id="pageBody">
      <div class="container playersCont">
      	<!--column contains players search bar-->
        <div class="row justify-content-center">
          <div class="col-xs-12 col-md-7 text-center">
            <!--player search bar-->
        	  <span class="float-md-right">
        	  	<!--input search word-->
  	          <input type="text" class="typeahead" id="input" placeholder="Search">
  	          	<!--categories in which the search word will look-->
  	          	<select name="category" id="category" required>
      						<option value="Name">Name</option>
      						<option value="Number">Number</option>
      						<option value="Position">Position</option>
      						<option value="College">College</option>
      						<option value="nflTeam">NFL Team</option>
      						<option value="nflPlayer">NFL Player</option>
  						  </select>
				    </span>
			    </div>
			    <div class="col-xs-12 col-md-5 text-center">
				    <span class="float-md-left">
				<!--Search and Clear buttons-->
          		<input type="button" id="search" value="Submit">
          		<input type="button" id="clear" value="Clear">
          	</span>
        	</div>
        </div>
        <!--Output searched player profiles from ajax.php-->
        <div class="row" id="playerProfiles"></div>
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
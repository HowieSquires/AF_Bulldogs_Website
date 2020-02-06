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
      <a id="current">Blog</a>
      <a id="login" href="writeBlog.php">Write Post</a>
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
            <a href="playerProfiles.php">Player Profiles</a>
            <a href="planner.php">Planner</a>
            <a id="current">Blog</a>
            <a id="login" href="writeBlog.php">Write Post</a>
            <a href="gallery.php">Gallery</a>
            <a href="connect.php">Connect</a>
            <a id="login" href="PPCreate.php">Log In</a>
          </ul>
        </div>
      </nav>
    </div>

      
    <!--Blog content accessed from database-->
    <div class="col-xs-12 col-md-10" id="pageBody">
    <?php
    	/*SQL command to select all content from the blog table*/
      $sql1 = "SELECT * FROM blog";

      /*if SQL command is executed successfully, and there are more than one results returned,
      while data from each row creates a new array,
      output the data inside the "blog" div*/
      if($result = mysqli_query($connection, $sql1)){ 
        if(mysqli_num_rows($result) > 0){
          while($row = mysqli_fetch_array($result)){
            echo "<div id=\"blog\"> <h4>Author: <i>" . $row['author'] . "</i></h4><br>" .
                   "<h4>Date: <i>" . $row['blogDate'] . "</i></h4>" .
                   "<h2 style=\"text-align: center\"><u>" . $row['blogTitle'] . "</u></h2>" .
                  "<p>" . $row['blogText'] . "</div>";            
          }
        }
        /*if no results are returned then apologise for no data*/
        else{
          echo "<div id=\"blog\"><h4>Sorry no blog posts available at this time</h4></div>";
        }
      }
    ?>
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
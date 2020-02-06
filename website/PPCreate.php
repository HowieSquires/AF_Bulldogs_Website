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
      <a href="connect.php">Connect</a>
      <a id="current">Log In</a>
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
            <a href="connect.php">Connect</a>
            <a id="current">Log In</a>

          </ul>
        </div>
      </nav>
    </div>


    <!--Create a player profile and data loaded to "users" table-->
    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 h-100" id="pageBody">
      <div class="container playersCont">
        <h2><u> Make my Profile </u></h2><br>
      <?php
      	/*if user has clicked "submit" button, then set the variables required for the SQL query*/
        if(isset($_POST["submit"])){

          $name = $_POST['username'];
          $number = $_POST['jNumber'];
          $position = $_POST['position'];
          $college = $_POST['college'];
          $nflTeam = $_POST['nflTeam'];
          $nflPlayer = $_POST['nflPlayer'];

          $image = $_FILES['image']['name'];
          $source = $_FILES['image']['tmp_name'];
          $target = "res/img/pp/" . basename($image);

          /*if the connection to the database fails, apologise to user*/
          if($connection === false){
            die("ERROR: Could not connect!" . mysqli_connect_error());
          } 
          /*if connection is successful then create the SQL query using above variables from the form at bottom of page*/
          else{
            $sql = "INSERT INTO players (Name, Number, Position, College, NFL_Team, NFL_Player, image) VALUES 
                (\"$name\", 
                \"$number\",
                \"$position\",
                \"$college\",
                \"$nflTeam\",
                \"$nflPlayer\",
                \"$image\");";

            /*if the SQL query is successful then move the user uploaded image into the player profile images folder*/
            if(mysqli_query($connection, $sql)){
              if(move_uploaded_file($source, $target)){
      ?>
                <div>
                  <h2>Player Profile Created!</h2>
                  <h3>Welcome <?php echo"$name" ?> to the Bath Spa Bulldogs website</h3>
                </div>

              <?php
              	/*SQL query to display the profile user has just created*/
                $sql = "SELECT * FROM players WHERE number = $number";

                /*if the query is successful and there is at least one returned result*/
                if($result = mysqli_query($connection, $sql)){
                  if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){

              ?>    <!--Display player profile just made using data from the database-->
                      <div class="row justify-content-center">
                        <div class="col-xs-12 col-md-4">
                          <div id="playerProfile">

                          <?php  
                            echo "<img width=\"100%\" src=\"res/img/pp/" . $row['image'] ."\">";
                          ?>

                            <div id="playerData">
                              <h4> <?php echo $row['Number'] . " - " . $row['Name'] ?> </h4>
                              <div id="playerData">
                                <h5>Position: </h5> <?php echo $row['Position'] ?>
                              </div>
                              <div id="playerData">
                                <h5>College: </h5> <?php echo $row['College'] ?>
                              </div>
                              <div id="playerData">
                                <h5>NFL Team: </h5> <?php echo $row['NFL_Team'] ?>
                              </div>
                              <div id="playerData">
                                <h5>NFL Player: </h5> <?php echo $row['NFL_Player'] ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

        <?php
                    }
                  }
                }
                /*if the SQL query was unsuccessful then apologise*/
                else{
                  echo "<div>ERROR: Could not execute $sql" . mysqli_error($connection) . "</div>";
                }
              }
              /*if the image upload was unsuccessful, ask to try again*/
              else{ ?>
                <div>
                  <h2>IMAGE UPLOAD FAILED... PLEASE TRY AGAIN!</h2>
                </div>
              <?php
              }
            }
          }
        }
        else{
        ?>
          <!--Form for building a player profile-->
          <form id="regForm" method="post" action="" enctype="multipart/form-data">

          	<!--Player name-->
            <div class="row">
              <div class="col-xs-12 col-md-6">
                <h3 class="text-center">Name: </h3>
              </div>
              <div class="col-xs-12 col-md-6 text-center">
                <span class="float-md-left">
                  <input type="text" name="username" required>
                </span>
              </div>
            </div> 
            <br>

            <!--Player number-->
            <div class="row">
              <div class="col-xs-12 col-md-6">
                <h3 class="text-center">Jersey Number: </h3>
              </div>
              <div class="col-xs-12 col-md-6 text-center">
                <span class="float-md-left">
                  <input type="number" name="jNumber" required>
                </span>
              </div>
            </div>
            <br>
            
            <!--Player position-->
            <div class="row">
              <div class="col-xs-12 col-md-6">
                <h3 class="text-center">Position: </h3>
              </div>
              <div class="col-xs-12 col-md-6 text-center">
                <span class="float-md-left">
                  <input type="text" name="position" required>
                </span>
              </div>
            </div>
            <br>
           	
           	<!--Player's college-->
            <div class="row">
              <div class="col-xs-12 col-md-6">
                <h3 class="text-center">College: </h3>
              </div>
              <div class="col-xs-12 col-md-6 text-center">
                <span class="float-md-left">
                  <input type="text" name="college" required>
                </span>
              </div>
            </div>
            <br>
            
            <!--Player's supported NFL team-->
            <div class="row">
              <div class="col-xs-12 col-md-6">
                <h3 class="text-center">NFL Team: </h3>
              </div>
              <div class="col-xs-12 col-md-6 text-center">
                <span class="float-md-left">
                  <input type="text" name="nflTeam" required>
                </span>
              </div>
            </div>
            <br>

            <!--Player's favourite NFL player-->
            <div class="row">
              <div class="col-xs-12 col-md-6">
                <h3 class="text-center">NFL Player: </h3>
              </div>
              <div class="col-xs-12 col-md-6 text-center">
                <span class="float-md-left">
                  <input type="text" name="nflPlayer" required>
                </span>
              </div>
            </div>
            <br>

            <!--Players chosen photo for profile image-->
            <div class="row">
              <div class="col-xs-12 col-md-6">
                <h3 class="text-center">Picture: </h3>
              </div>
              <div class="col-xs-12 col-md-6 text-center">
                <span class="float-md-left">
                  <input type="file" name="image" id="image" required>
                </span>
              </div>
            </div>
            <br>
            
            <!--Form submit button-->
            <div class="row justify-content-center">
              <div class="col-12 text-center">
                <input class="text-center" type="submit" name="submit" value="Complete!">
              </div>
            </div>
            <br>

          </form> 
      <?php
        }
      ?>
      
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
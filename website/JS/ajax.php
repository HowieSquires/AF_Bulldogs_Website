<!-- AJAX search data to display on PlayerProfiles.php -->

<?php

//Include the database credentials for access
include("../db.php");

//Set the category and keyword variable from the "Player Profiles search"
$category = $_GET['category'];
$search = $_GET['key'];

//Create SQL query for the database search
$sql = "SELECT * FROM players WHERE $category LIKE '%$search%';";

?>

<?php
//If the SQL query is successful and there are more than 1 result 
if($result = mysqli_query($connection, $sql)){
	if(mysqli_num_rows($result) > 0){
		//Variable incremented for every profile displayed for the drop down button target to work
    	$countPlayers = 0;
        while($row = mysqli_fetch_array($result)){    

        	//Div each player profile inside a new column and playerProfile div
        	echo "<div class=\"col-xs-12 col-md-4\">
                  <div id=\"playerProfile\">

                  	<!-- Load player profile image -->
                  	<img width=\"100%\" src=\"res/img/pp/" . $row['image'] ."\">

                  		<!-- Player number and name -->
                    	<div id=\"playerData\">
                        	<h4>" . $row['Number'] . " - " . $row['Name'] . "</h4>

                        	<!-- Drop down menu to display rest of player data -->
                            <nav class=\"navbar-light\">
                            	<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#PlayerProfileInfo" . $countPlayers . "\">
                                	<span class=\"navbar-toggler-icon\"></span>
                                </button>

                                <div class=\"collapse navbar-collapse\" id=\"PlayerProfileInfo" . $countPlayers . "\">
                                	<ul class=\"navbar-nav mr-auto\">

                                	<!-- REST OF PLAYER DATA IN DIVS -->
                                	<div id=\"playerData\">
                                    	<h5>Position: </h5>" . $row['Position'] .
                                  	"</div>
                                 	 <div id=\"playerData\">
                                    	<h5>College: </h5>" . $row['College'] .
                                  	"</div>
                                  	<div id=\"playerData\">
                                    	<h5>NFL Team: </h5>" . $row['NFL_Team'] .
                                  	"</div>
                                  	<div id=\"playerData\">
                                    	<h5>NFL Player: </h5>" . $row['NFL_Player'] .
                                  	"</div>

                                </ul>
                        	</div>

                    	</nav>

                	</div>

            	</div>
            </div>";

        	$countPlayers++;
    	}
    }
    //if user search Query returns no results, apologise
    else{
        echo "<div class=\"col-xs-12 float-left d-inline-block\">
              	<div id=\"blog\">
              		<h4>Sorry no profiles available at this time</h4>
              	</div>
            </div>";
	}
}
//If SQL query failed then display message
else{
    echo "<div class=\"col-xs-12 float-left d-inline-block\">
          	<div id=\"blog\">
          		<h4>Sorry no profiles available at this time</h4>
          	</div>
          </div>";

        }
  ?>


<?php

mysqli_close($connection);

?>

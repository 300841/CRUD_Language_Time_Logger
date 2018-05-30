<?php
//process.php
	/*$language = $_POST["language"];
	echo"$language";*/
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {//Check it is coming from a form
    
		//mysql credentials
    require_once 'login.php';
	
	//delcare PHP variables
	
	$language = $_POST["language"];
	$date = $_POST["date"];
	$timein = $_POST["timein"];
	$timeout = $_POST["timeout"];
	
	//Open a new connection to the MySQL server
	//see https://www.sanwebe.com/2013/03/basic-php-mysqli-usage for more info
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
	
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}   
	
		$statement = $mysqli->prepare("INSERT INTO languages (Language, Date, Time_In, Time_Out) VALUES(?, ?, ?, ?)"); //prepare sql insert query
		//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
		$statement->bind_param('siii', $language, $date, $timein, $timeout); //bind value
		if($statement->execute())
			{
				//print output text
				echo nl2br("You have now added a "." ". $language . " session on ". $date.  " from ". $timein ." to ". $timeout . ".", false);
			}
			else{
					print $mysqli->error; //show mysql error if any 
				}
echo"<br><form action= 'update_delete.php' method = 'get'>";
echo "<input name = 'action'   type = 'submit' value = 'Go Back'></form>";
         }
else{
    echo ("error");
    }         
?>
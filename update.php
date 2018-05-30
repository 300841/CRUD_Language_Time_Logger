<?php
//update.php
if ($_SERVER["REQUEST_METHOD"] == "POST")	//Check it is coming from a form
    {
        require_once 'login.php';				//mysql credentials

	    //delcare PHP variables
	    $sessionID = $_POST["id_update"];
	    $language = $_POST["language_update"];			//The values in the $_POST must match the names given from the HTML document
	    $date = $_POST["date_update"];
	    $timein = $_POST["timein_update"];
	    $timeout = $_POST["timeout_update"];
	    
        $mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
        if ($mysqli->connect_error) 
            {
		        die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	        }   
        if ($_POST['language_update']!= "")
            {
                
	
		$statement = $mysqli->prepare("UPDATE languages SET Language= ?, Date= ?, Time_In= ?, Time_Out= ? WHERE SessionID = ?"); 
		//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
		$statement->bind_param('siiis', $language, $date, $timein, $timeout, $sessionID); //bind value
		if($statement->execute())
			{
				//print output text
				echo nl2br("You have updated "." ". $sessionID . " information to;\r\n language " . $language." on ". $date ." from " .$timein." to " .$timeout.".", false);
			}
			else{
					print $mysqli->error; //show mysql error if any 
				}
                
            }
    }
?>
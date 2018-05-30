<?php
//read.php
require_once 'login.php';
$conn = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	
$sql = "SELECT * FROM languages WHERE Language='" . $_POST['language'] . "'";
$result = $conn->query($sql);

$SessionID = $row[0];
$Language = $row[1];
$Date = $row[2];
$TimeIn = $row[3];
$TimeOut = $row[4];

// HTML to display the form on this page.
echo"<HEAD> <link rel='stylesheet' href='style.css'></HEAD><BODY>";
echo nl2br("<H2>Here are the search results for "." ". $_POST['language']."</H2>");

if ($result->num_rows > 0)//will only do this if there is something to be returned from the above line
	{	echo"<HEAD> <link rel='stylesheet' href='style.css'></HEAD>";
		echo "<TABLE><TR><TH>Session ID</TH><TH>Language</TH><TH>Date</TH><TH>Time In</TH><TH>Time Out</TH></TR>";

	while($row = $result->fetch_assoc())
		{
			// The following few lines store information from specific cells in the data about a session
			echo "<TR>";
			echo "<TD>".$row['SessionID']. "</TD><TD>". $row['Language']. "</TD><TD>". $row['Date']. "</TD><TD>". $row['TimeIn']. "</TD><TD>". $row['TimeOut']. "</TD>";
			echo "</TR>";
		}
	echo "</TABLE>";
	echo"<br><br> Return to homescreen: <form action= 'Languages.html' method = 'get'>";
	echo "<input name = 'action'   type = 'submit' value = 'Back'>";
	echo "</FORM>";
	}
	else{
		echo "<br> 0 results";
		}
		echo '</body>';
	
?>
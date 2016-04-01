
<?php
//name localhost, this is username roots, password

$conn =mysql_connect("localhost", "hervefeze","");
mysql_select_db("scouts");
session_start();

//replace $conn-> error with false===$conn
if (false===$conn) {
	die("Connection failed: ".$conn->connect_error);
}
?>
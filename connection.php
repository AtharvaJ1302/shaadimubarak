<?php
$username = "root";
$password = "";
$server = "localhost";
$dbname = "shaadi_mubarak";
$conn = mysqli_connect($server, $username, $password, $dbname);
if($conn){
	//echo "Connected successfully!!";
	mysqli_select_db($conn,$dbname);
} else {
	echo "Not connected with the database";
}
?>
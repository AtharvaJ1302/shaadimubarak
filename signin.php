<?php
session_start();
if(isset($_POST["signin"])){
	$email=$_POST["email"];
	$pwd=$_POST["pwd"];
	$loginname=strip_tags($email);
	$loginpassword=strip_tags($pwd);
	$loginpassword=md5($loginpassword);
	include "connection.php";
	$sql = "SELECT * FROM users WHERE email ='$loginname' AND password = '$loginpassword'";
	$result = mysqli_query($conn,$sql);
	if(!$result){
		die("data not found! ".mysqli_error($conn));
		//die("SIGN UP TO CONTINUE");
		header("index.php");
	}
	//reading the data from the $result array
	$cnt = mysqli_num_rows($result);
	if($cnt == 1){
		$row=mysqli_fetch_array($result, MYSQLI_ASSOC);	
		$_SESSION["myname"] = $row["name"];
		$_SESSION["user_id"] = $row["id"];
		header("Location: index.php");
	} else {
		echo "Username and or password incorrect. Check again";
	}
} else {
	//header("Location: form.html");
}
?>
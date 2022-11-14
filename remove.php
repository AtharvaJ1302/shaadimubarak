<?php 
session_start();
$user=$_SESSION["user_id"];
include("connection.php");
if(isset($_POST["submit"])){
  $c=$_POST["remove"];
  echo $c;
  if($c=="sound")
    $c="sound and lights";
  $sql="DELETE FROM ongoing_orders WHERE user_id='$user' AND category='$c'";
  $result=mysqli_query($conn,$sql);
  if(!$result){
    echo "Cannot find";
  }else{
    header("Location:cart.php");
  }
}
?>
<?php
session_start();
include("connection.php");
$receipt=$_SESSION["receipt"];
$sql="SELECT * FROM transactions WHERE receipt_id='$receipt'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
if($row["pending"]==0){
    include("wait.php");
}else{
    header("Location:invoice.php");
}
?>
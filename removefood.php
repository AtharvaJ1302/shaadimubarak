<?php
session_start();
include("connection.php");
if(isset($_POST["submit"])){
    $user=$_SESSION["user_id"];
    echo $user;
    $id=$_POST["remove"];
    $sql="DELETE FROM ongoing_orders WHERE category='food' AND item_id='$id' AND user_id='$user'";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("Location:cart.php");
    }else{
        echo "not removed";
    }
}
?>
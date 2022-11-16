<?php
session_start();
include("connection.php");
if(isset($_POST["submit"])){
    $food=(int)$_POST["Food"];
    echo $food;
    $tran=(int)$_POST["Transport"];
    echo $tran;
    $user=$_SESSION["user_id"];
    $sql="SELECT * FROM guest WHERE user_id='$user'";
    $result=mysqli_query($conn,$sql);
    $cnt=mysqli_num_rows($result);
    if($cnt==1){
        $sql="UPDATE guest SET food_guest='$food' WHERE user_id='$user'";
        $result=mysqli_query($conn,$sql);
        $sql="UPDATE guest SET tran_guest='$tran' WHERE user_id='$user'";
        $result=mysqli_query($conn,$sql);
        if($result){
            $_SESSION["guest_check"]=1;
            header("Location:destinations.php");
        }else{
            echo "not working count 1";
        }
    }else{
        $sql="INSERT INTO guest(user_id,food_guest,tran_guest) VALUES('$user','$food','$tran')";
        $result=mysqli_query($conn,$sql);
        if($result){
            $_SESSION["guest_check"]=1;
            header("Location:destinations.php");
        }else{
            echo "not working count 0";
        }
    }
}
?>
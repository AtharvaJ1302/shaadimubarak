<?php
session_start();
if(isset($_POST["signup"])){
    $name=strip_tags($_POST["loginName"]);
    $email=strip_tags($_POST["loginEmail"]);
   // $contact=strip_tags($_POST["contact"]);
    $pwd=strip_tags($_POST["loginPassword"]);
    $cpwd=strip_tags($_POST["loginPasswordConfirm"]);
    if($pwd!=$cpwd){
        die("Password entered not same!");
    }
    $pwd=md5($pwd);
    include "connection.php";
    $sql="INSERT INTO users (id,name,email,password) VALUES (id, '$name', '$email', '$pwd')";
    if(mysqli_query($conn,$sql)){
        header("Location:index.php");
    }else{
        echo "record not saved";
    }

}
?>


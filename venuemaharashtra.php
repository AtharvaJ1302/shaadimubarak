<?php
session_start();
if(isset($_POST["venue1"])){
    $_SESSION["venue"]="GCC Hotel and Club";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue2"])){
    $_SESSION["venue"]="Eskay Resorts";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue3"])){
    $_SESSION["venue"]="Novotel";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue4"])){
    $_SESSION["venue"]="The Tamarind Tree";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue5"])){
    $_SESSION["venue"]="The Groves";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue6"])){
    $_SESSION["venue"]="Arena100 Sports and Recreation";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue7"])){
    $_SESSION["venue"]="Conrad Pune";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue8"])){
    $_SESSION["venue"]="Dhepe Wada";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue9"])){
    $_SESSION["venue"]="Prathamesh Resorts";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue10"])){
    $_SESSION["venue"]="TouchWood Resort";
    $_SESSION["venue_price"]=1;
}
header("Location:")
?>
<?php
session_start();
if(isset($_POST["venue1"])){
    $_SESSION["venue"]="Laxmi Vilas Palace Banquets";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue2"])){
    $_SESSION["venue"]="Aam Bagan";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue3"])){
    $_SESSION["venue"]="Thaker Farm";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue4"])){
    $_SESSION["venue"]="Maple Farm";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue5"])){
    $_SESSION["venue"]="Crowne Plaza";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue6"])){
    $_SESSION["venue"]="Narayani Heights";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue7"])){
    $_SESSION["venue"]="The House of MG";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue8"])){
    $_SESSION["venue"]="The Gateway Hotel Athwalines";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue9"])){
    $_SESSION["venue"]="Green YMCA Banquets & Lawn";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue10"])){
    $_SESSION["venue"]="Jade Luxury Banquets";
    $_SESSION["venue_price"]=1;
}
header("Location:")
?>
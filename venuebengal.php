<?php
session_start();
if(isset($_POST["venue1"])){
    $_SESSION["venue"]="Hyatt Regency";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue2"])){
    $_SESSION["venue"]="Taj Bengal";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue3"])){
    $_SESSION["venue"]="ITC Sonar";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue4"])){
    $_SESSION["venue"]="The Oberoi Grand Hotel";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue5"])){
    $_SESSION["venue"]="P C Chandra Garden";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue6"])){
    $_SESSION["venue"]="Vedic Village";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue7"])){
    $_SESSION["venue"]="Club Verde Vista";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue8"])){
    $_SESSION["venue"]="Mangalam Banquets";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue9"])){
    $_SESSION["venue"]="Royal Bengal Room";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue10"])){
    $_SESSION["venue"]="Smriti Banquets";
    $_SESSION["venue_price"]=1;
}
header("Location:dummyfood.html");
?>
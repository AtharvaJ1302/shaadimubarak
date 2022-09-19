<?php
session_start();
if(isset($_POST["venue1"])){
    $_SESSION["venue"]="Stallone Manor";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue2"])){
    $_SESSION["venue"]="Grand Wedding Villa";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue3"])){
    $_SESSION["venue"]="Bath Castle";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue4"])){
    $_SESSION["venue"]="Hyatt Regency";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue5"])){
    $_SESSION["venue"]="JW Marriott";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue6"])){
    $_SESSION["venue"]="Vivanta by Taj";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue7"])){
    $_SESSION["venue"]="Hyatt";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue8"])){
    $_SESSION["venue"]="Kingsville Resort";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue9"])){
    $_SESSION["venue"]="Marrievilla Resorts";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue10"])){
    $_SESSION["venue"]="B.R. Resorts";
    $_SESSION["venue_price"]=1;
}
header("Location:")
?>
<?php
session_start();
if(isset($_POST["venue1"])){
    $_SESSION["venue"]="Calista Resort";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue2"])){
    $_SESSION["venue"]="Veda Farms";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue3"])){
    $_SESSION["venue"]="Amrai Farms";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue4"])){
    $_SESSION["venue"]="Solitaire Garden and Banquet";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue5"])){
    $_SESSION["venue"]="Araliayas Resort";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue6"])){
    $_SESSION["venue"]="Ramada Resort";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue7"])){
    $_SESSION["venue"]="Yadu Greens";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue8"])){
    $_SESSION["venue"]="Mohan Vilaas";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue9"])){
    $_SESSION["venue"]="Elden Ring Motel And Resorts";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue10"])){
    $_SESSION["venue"]="Hilltop Greens";
    $_SESSION["venue_price"]=1;
}
header("Location: ")
?>
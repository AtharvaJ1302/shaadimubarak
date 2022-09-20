<?php
session_start();
if(isset($_POST["venue1"])){
    $_SESSION["venue"]="Trident, Cochiin";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue2"])){
    $_SESSION["venue"]="Mayfair Banquets";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue3"])){
    $_SESSION["venue"]="Ramada Resort, Kochi";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue4"])){
    $_SESSION["venue"]="Southern Panorama Indriya Resort & Spa";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue5"])){
    $_SESSION["venue"]="Emarald Ayurvedic Resort, Perinthalmanna";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue6"])){
    $_SESSION["venue"]="Lalit Resort, Kochi";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue7"])){
    $_SESSION["venue"]="Vasco Dagama Beach Resort, Kozhikode";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue8"])){
    $_SESSION["venue"]="he Lalit Resort & Spa Bekal";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue9"])){
    $_SESSION["venue"]="The Raviz Kadavu";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue10"])){
    $_SESSION["venue"]="Summit Hampton Hotel";
    $_SESSION["venue_price"]=1;
}
header("Location:dummyfood.html");
?>
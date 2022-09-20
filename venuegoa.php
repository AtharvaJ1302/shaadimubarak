<?php
session_start();
if(isset($_POST["venue1"])){
    $_SESSION["venue"]="Bay 15 Waterfront";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue2"])){
    $_SESSION["venue"]="Silva Heritage";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue3"])){
    $_SESSION["venue"]="Prainha Beach Resort";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue4"])){
    $_SESSION["venue"]="DoubleTree by Hilton, Panaji";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue5"])){
    $_SESSION["venue"]="Radisson Blu Resort Goa, Cavelossim Beach";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue6"])){
    $_SESSION["venue"]="Taj Fort Aguada Resort & Spa, Goa";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue7"])){
    $_SESSION["venue"]="The Fort Ramgarh";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue8"])){
    $_SESSION["venue"]="Redwood Resorts";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue9"])){
    $_SESSION["venue"]="Kanha Banquet Hall";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue10"])){
    $_SESSION["venue"]="Dos Equis Exotic Lounge, Bardez";
    $_SESSION["venue_price"]=1;
}
header("Location:dummyfood.html")
?>
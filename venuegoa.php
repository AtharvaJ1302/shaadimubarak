<?php
session_start();
if(isset($_POST["venue1"])){
    $_SESSION["venue"]="Odxel Beach, Dona Paula, Panaji, Goa";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue2"])){
    $_SESSION["venue"]="Silva Heritage, Cana, Benaulim, Goa, India";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue3"])){
    $_SESSION["venue"]="Silva Heritage, Cana, Benaulim, Goa, India";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue4"])){
    $_SESSION["venue"]="Kadamba Plateau Panjim, Old Goa Rd, Goa Velha, Goa";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue5"])){
    $_SESSION["venue"]="Cavelossim, Beach, Mobor Beach, Goa";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue6"])){
    $_SESSION["venue"]="Beach Sinquerim, Candolim, Goa";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue7"])){
    $_SESSION["venue"]="The Fort Ramgarh, National Highway";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue8"])){
    $_SESSION["venue"]="Morni Road";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue9"])){
    $_SESSION["venue"]="Kanha Banquet Hall IMA Bhawan, Karamtoli Chowk";
    $_SESSION["venue_price"]=1;
}else if(isset($_POST["venue10"])){
    $_SESSION["venue"]="Arrao Road, Olaulim-Pomburpa, Bardez, Goa";
    $_SESSION["venue_price"]=1;
}
header("Location:")
?>
<?php
session_start();
if(isset($_SESSION["light1"])){
    $_SESSION["light"]="Absolute Lime";
    $_SESSION["light_price"]=1;
}else if(isset($_SESSION["light2"])){
    $_SESSION["light"]="D&S Djs";
    $_SESSION["light_price"]=1;
}else if(isset($_SESSION["light3"])){
    $_SESSION["light"]="Dj Ganesh";
    $_SESSION["light_price"]=1;
}else if(isset($_SESSION["light4"])){
    $_SESSION["light"]="Dj Santosh";
    $_SESSION["light_price"]=1;
}else if(isset($_SESSION["light5"])){
    $_SESSION["light"]="Dj Vibes";
    $_SESSION["light_price"]=1;
}else if(isset($_SESSION["light6"])){
    $_SESSION["light"]="Dj Wale Babu";
    $_SESSION["light_price"]=1;
}else if(isset($_SESSION["light7"])){
    $_SESSION["light"]="Elite Dj Planners";
    $_SESSION["light_price"]=1;
}else if(isset($_SESSION["light8"])){
    $_SESSION["light"]="Miami Djs";
    $_SESSION["light_price"]=1;
}else if(isset($_SESSION["light9"])){
    $_SESSION["light"]="Royal Djs";
    $_SESSION["light_price"]=1;
}else if(isset($_SESSION["light10"])){
    $_SESSION["light"]="RP Dj Wale";
    $_SESSION["light_price"]=1;
}
header("Location:dummyreceipt.html"); 
?>
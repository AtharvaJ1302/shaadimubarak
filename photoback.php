<?php
session_start();
if(isset($_POST["photo1"])){
    $_SESSION["photographer"]="90'sBlack";
    $_SESSION["photographer_price"]=1;
}else if(isset($_POST["photo2"])){
    $_SESSION["photographer"]="Banga Studio";
    $_SESSION["photographer_price"]=1;
}else if(isset($_POST["photo3"])){
    $_SESSION["photographer"]="Daas Photography";
    $_SESSION["photographer_price"]=1;
}else if(isset($_POST["photo4"])){
    $_SESSION["photographer"]="Light Chamber";
    $_SESSION["photographer_price"]=1;
}else if(isset($_POST["photo5"])){
    $_SESSION["photographer"]="Parak Studio";
    $_SESSION["photographer_price"]=1;
}else if(isset($_POST["photo6"])){
    $_SESSION["photographer"]="Photo by the Wedding Ties";
    $_SESSION["photographer_price"]=1;
}else if(isset($_POST["photo7"])){
    $_SESSION["photographer"]="Suraj Studio";
    $_SESSION["photographer_price"]=1;
}else if(isset($_POST["photo8"])){
    $_SESSION["photographer"]="Technovision";
    $_SESSION["photographer_price"]=1;
}else if(isset($_POST["photo9"])){
    $_SESSION["photographer"]="Varun Gavli Studio";
    $_SESSION["photographer_price"]=1;
}else if(isset($_POST["photo10"])){
    $_SESSION["photographer"]="Vijayeesam Photography";
    $_SESSION["photographer_price"]=1;
} 
header("Location:sound-lights.html");
?>
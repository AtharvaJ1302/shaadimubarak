<?php
session_start();
function check()
{
    if(empty($_SESSION))
    {
        echo "<script>
alert('Signin To Start Booking!');
window.location.href='kerela.php';
</script>";
return false;
    }else{return true; }
}
if(isset($_POST["venue1"])){
    if(check()){
        $_SESSION["venue"]="Trident, Cochin";
        $_SESSION["venue_price"]=320000;
        header("Location:food.php");
    }
}else if(isset($_POST["venue2"])){
    if(check()){
        $_SESSION["venue"]="Mayfair Banquets";
        $_SESSION["venue_price"]=350000;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue3"])){
    if(check()){
        $_SESSION["venue"]="Ramada Resort, Koch";
        $_SESSION["venue_price"]=250000;
        header("Location:food.php");
    }
}else if(isset($_POST["venue4"])){
    if(check()){
        $_SESSION["venue"]="Southern Panorama Indriya Resort & Spa";
        $_SESSION["venue_price"]=180000;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue5"])){
    if(check()){
        $_SESSION["venue"]="Emarald Ayurvedic Resort, Perinthalmanna";
        $_SESSION["venue_price"]=135000;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue6"])){
    if(check()){
        $_SESSION["venue"]="Lalit Resort, Kochi";
        $_SESSION["venue_price"]=125000;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue7"])){
    if(check()){
        $_SESSION["venue"]="Vasco Dagama Beach Resort, Kozhikode";
        $_SESSION["venue_price"]=98000;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue8"])){
    if(check()){
        $_SESSION["venue"]="The Lalit Resort & Spa Bekal";
        $_SESSION["venue_price"]=150000;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue9"])){
    if(check()){
        $_SESSION["venue"]="The Raviz Kadavu";
        $_SESSION["venue_price"]=180000;
        header("Location:food.php");
    }

}else if(isset($_POST["venue10"])){
    if(check()){
        $_SESSION["venue"]="Summit Hampton Hotel";
        $_SESSION["venue_price"]=200000;
        header("Location:food.php");
    }
    
}
    
?>
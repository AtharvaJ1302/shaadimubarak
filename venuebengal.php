<?php
session_start();
function check()
{
    if(empty($_SESSION))
    {
        echo "<script>
alert('Signin To Start Booking!');
window.location.href='bengal.php';
</script>";
return false;
    }else{return true; }
}
if(isset($_POST["venue1"])){
    if(check()){
        $_SESSION["venue"]="Hyatt Regency";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
}else if(isset($_POST["venue2"])){
    if(check()){
        $_SESSION["venue"]="Taj Bengal";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue3"])){
    if(check()){
        $_SESSION["venue"]="ITC Sonar";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
}else if(isset($_POST["venue4"])){
    if(check()){
        $_SESSION["venue"]="The Oberoi Grand Hotel";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue5"])){
    if(check()){
        $_SESSION["venue"]="P C Chandra Garden";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue6"])){
    if(check()){
        $_SESSION["venue"]="Vedic Village";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue7"])){
    if(check()){
        $_SESSION["venue"]="Club Verde Vista";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue8"])){
    if(check()){
        $_SESSION["venue"]="Mangalam Banquets";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue9"])){
    if(check()){
        $_SESSION["venue"]="Royal Bengal Room";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }

}else if(isset($_POST["venue10"])){
    if(check()){
        $_SESSION["venue"]="Smriti Banquets";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}
    
?>
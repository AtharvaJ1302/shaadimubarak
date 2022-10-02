<?php
session_start();
function check()
{
    if(empty($_SESSION))
    {
        echo "<script>
alert('Signin To Start Booking!');
window.location.href='goa.php';
</script>";
return false;
    }else{return true; }
}
if(isset($_POST["venue1"])){
    if(check()){
        $_SESSION["venue"]="Bay 15 Waterfront";
        $_SESSION["venue_price"]=80000;
        header("Location:food.php");
    }
}else if(isset($_POST["venue2"])){
    if(check()){
        $_SESSION["venue"]="Silva Heritage";
        $_SESSION["venue_price"]=92000;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue3"])){
    if(check()){
        $_SESSION["venue"]="Prainha Beach Resort";
        $_SESSION["venue_price"]=100000;
        header("Location:food.php");
    }
}else if(isset($_POST["venue4"])){
    if(check()){
        $_SESSION["venue"]="DoubleTree by Hilton, Panaji";
        $_SESSION["venue_price"]=85000;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue5"])){
    if(check()){
        $_SESSION["venue"]="Radisson Blu Resort Goa, Cavelossim Beach";
        $_SESSION["venue_price"]=98000;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue6"])){
    if(check()){
        $_SESSION["venue"]="Taj Fort Aguada Resort & Spa, Goa";
        $_SESSION["venue_price"]=120000;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue7"])){
    if(check()){
        $_SESSION["venue"]="The Fort Ramgarh";
        $_SESSION["venue_price"]=130000;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue8"])){
    if(check()){
        $_SESSION["venue"]="Redwood Resorts";
        $_SESSION["venue_price"]=99000;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue9"])){
    if(check()){
        $_SESSION["venue"]="Kanha Banquet Hall";
        $_SESSION["venue_price"]=100000;
        header("Location:food.php");
    }

}else if(isset($_POST["venue10"])){
    if(check()){
        $_SESSION["venue"]="Dos Equis Exotic Lounge, Bardez";
        $_SESSION["venue_price"]=110000;
        header("Location:food.php");
    }
    
}
    
?>
<?php
session_start();
function check()
{
    if(empty($_SESSION))
    {
        echo "<script>
alert('Signin To Start Booking!');
window.location.href='punjab.php';
</script>";
return false;
    }else{return true; }
}
if(isset($_POST["venue1"])){
    if(check()){
        $_SESSION["venue"]="Stallone Manor";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
}else if(isset($_POST["venue2"])){
    if(check()){
        $_SESSION["venue"]="Grand Wedding Villa";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
    
}else if(isset($_POST["venue3"])){
    if(check()){
        $_SESSION["venue"]="Bath Castle";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
}else if(isset($_POST["venue4"])){
    if(check()){
        $_SESSION["venue"]="Hyatt Regency";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
    
}else if(isset($_POST["venue5"])){
    if(check()){
        $_SESSION["venue"]="JW Marriott";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
    
}else if(isset($_POST["venue6"])){
    if(check()){
        $_SESSION["venue"]="Vivanta by Taj";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
    
}else if(isset($_POST["venue7"])){
    if(check()){
        $_SESSION["venue"]="Hyatt";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
    
}else if(isset($_POST["venue8"])){
    if(check()){
        $_SESSION["venue"]="Kingsville Resort";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
    
}else if(isset($_POST["venue9"])){
    if(check()){
        $_SESSION["venue"]="Marrievilla Resorts";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }

}else if(isset($_POST["venue10"])){
    if(check()){
        $_SESSION["venue"]="B.R. Resorts";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
    
}
    
?>
<?php
session_start();
function check()
{
    if(empty($_SESSION))
    {
        echo "<script>
alert('Signin To Start Booking!');
window.location.href='jk.php';
</script>";
return false;
    }else{return true; }
}
if(isset($_POST["venue1"])){
    if(check()){
        $_SESSION["venue"]="Unique Resorts Banquet Hall";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
}else if(isset($_POST["venue2"])){
    if(check()){
        $_SESSION["venue"]="Windmill Resorts";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue3"])){
    if(check()){
        $_SESSION["venue"]="Kolu Group Of Houseboats";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
}else if(isset($_POST["venue4"])){
    if(check()){
        $_SESSION["venue"]="The Wedding University";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue5"])){
    if(check()){
        $_SESSION["venue"]="KC Emporia, Jammu";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue6"])){
    if(check()){
        $_SESSION["venue"]="Blue Moon Banquets";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue7"])){
    if(check()){
        $_SESSION["venue"]="G R Resort";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue8"])){
    if(check()){
        $_SESSION["venue"]="Fortune Resort Heaven";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue9"])){
    if(check()){
        $_SESSION["venue"]="Kingsville - Banquet & Resort";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }

}else if(isset($_POST["venue10"])){
    if(check()){
        $_SESSION["venue"]="Mascot Houseboats";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}
    
?>
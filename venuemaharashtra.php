<?php
session_start();
function check()
{
    if(empty($_SESSION))
    {
        echo "<script>
alert('Signin To Start Booking!');
window.location.href='maharashtra.php';
</script>";
return false;
    }else{return true; }
}
if(isset($_POST["venue1"])){
    if(check()){
        $_SESSION["venue"]="GCC Hotel and Club";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
}else if(isset($_POST["venue2"])){
    if(check()){
        $_SESSION["venue"]="Eskay Resorts";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue3"])){
    if(check()){
        $_SESSION["venue"]="Novotel";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
}else if(isset($_POST["venue4"])){
    if(check()){
        $_SESSION["venue"]="The Tamarind Tree";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue5"])){
    if(check()){
        $_SESSION["venue"]="The Groves";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue6"])){
    if(check()){
        $_SESSION["venue"]="Arena100 Sports and Recreation";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue7"])){
    if(check()){
        $_SESSION["venue"]="Conrad Pune";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue8"])){
    if(check()){
        $_SESSION["venue"]="Dhepe Wada";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue9"])){
    if(check()){
        $_SESSION["venue"]="Prathamesh Resorts";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }

}else if(isset($_POST["venue10"])){
    if(check()){
        $_SESSION["venue"]="TouchWood Resort";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}
    
?>
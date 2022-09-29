<?php
session_start();
function check()
{
    if(empty($_SESSION))
    {
        echo "<script>
alert('Signin To Start Booking!');
window.location.href='gujarat.php';
</script>";
return false;
    }else{return true; }
}
if(isset($_POST["venue1"])){
    if(check()){
        $_SESSION["venue"]="Laxmi Vilas Palace Banquets";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
}else if(isset($_POST["venue2"])){
    if(check()){
        $_SESSION["venue"]="Aam Bagan";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
    
}else if(isset($_POST["venue3"])){
    if(check()){
        $_SESSION["venue"]="Thaker Farm";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
}else if(isset($_POST["venue4"])){
    if(check()){
        $_SESSION["venue"]="Maple Farm";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
    
}else if(isset($_POST["venue5"])){
    if(check()){
        $_SESSION["venue"]="Crowne Plaza";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
    
}else if(isset($_POST["venue6"])){
    if(check()){
        $_SESSION["venue"]="Narayani Heights";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
    
}else if(isset($_POST["venue7"])){
    if(check()){
        $_SESSION["venue"]="The House of MG";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
    
}else if(isset($_POST["venue8"])){
    if(check()){
        $_SESSION["venue"]="The Gateway Hotel Athwalines";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
    
}else if(isset($_POST["venue9"])){
    if(check()){
        $_SESSION["venue"]="Green YMCA Banquets & Lawn";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }

}else if(isset($_POST["venue10"])){
    if(check()){
        $_SESSION["venue"]="Jade Luxury Banquets";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
    
}
    
?>
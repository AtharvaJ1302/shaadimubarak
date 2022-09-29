<?php
session_start();
function check()
{
    if(empty($_SESSION))
    {
        echo "<script>
alert('Signin To Start Booking!');
window.location.href='rajasthan.php';
</script>";
return false;
    }else{return true; }
}
if(isset($_POST["venue1"])){
    if(check()){
        $_SESSION["venue"]="Umaid Bhawan Palace";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
}else if(isset($_POST["venue2"])){
    if(check()){
        $_SESSION["venue"]="ITC Rajputana";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
    
}else if(isset($_POST["venue3"])){
    if(check()){
        $_SESSION["venue"]="The Ummed";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
}else if(isset($_POST["venue4"])){
    if(check()){
        $_SESSION["venue"]="Indana Hotels";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
    
}else if(isset($_POST["venue5"])){
    if(check()){
        $_SESSION["venue"]="Taj Aravali Resort";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
    
}else if(isset($_POST["venue6"])){
    if(check()){
        $_SESSION["venue"]="Welcom hotel Khimsar Fort and Dunes";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
    
}else if(isset($_POST["venue7"])){
    if(check()){
        $_SESSION["venue"]="Rambagh Palace";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
    
}else if(isset($_POST["venue8"])){
    if(check()){
        $_SESSION["venue"]="Udai Kothi";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
    
}else if(isset($_POST["venue9"])){
    if(check()){
        $_SESSION["venue"]="Shahpura House";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }

}else if(isset($_POST["venue10"])){
    if(check()){
        $_SESSION["venue"]="Shakun Hotel & Resorts";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
    
}
    
?>
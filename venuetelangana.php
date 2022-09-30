<?php
session_start();
function check()
{
    if(empty($_SESSION))
    {
        echo "<script>
alert('Signin To Start Booking!');
window.location.href='telangana.php';
</script>";
return false;
    }else{return true; }
}
if(isset($_POST["venue1"])){
    if(check()){
        $_SESSION["venue"]="Taj Falaknuma Palace";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
}else if(isset($_POST["venue2"])){
    if(check()){
        $_SESSION["venue"]="Chowmahalla Palace";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue3"])){
    if(check()){
        $_SESSION["venue"]="Fort Grand";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
}else if(isset($_POST["venue4"])){
    if(check()){
        $_SESSION["venue"]="Taj Krishna";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue5"])){
    if(check()){
        $_SESSION["venue"]="Courtyard by Marriot";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue6"])){
    if(check()){
        $_SESSION["venue"]="The Golkonda Resorts";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue7"])){
    if(check()){
        $_SESSION["venue"]="Aalankrita Resort";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue8"])){
    if(check()){
        $_SESSION["venue"]="Sri Venkateswara Garden";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue9"])){
    if(check()){
        $_SESSION["venue"]="Imperial Gardens";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }

}else if(isset($_POST["venue10"])){
    if(check()){
        $_SESSION["venue"]="Summer Green Resort Palm Groves";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}
    
?>
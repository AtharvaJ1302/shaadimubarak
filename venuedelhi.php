<?php
session_start();
function check()
{
    if(empty($_SESSION))
    {
        echo "<script>
alert('Signin To Start Booking!');
window.location.href='delhi.php';
</script>";
return false;
    }else{return true; }
}
if(isset($_POST["venue1"])){
    if(check()){
        $_SESSION["venue"]="Calista Resort";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
}else if(isset($_POST["venue2"])){
    if(check()){
        $_SESSION["venue"]="Veda Farms";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue3"])){
    if(check()){
        $_SESSION["venue"]="Amrai Farms";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
}else if(isset($_POST["venue4"])){
    if(check()){
        $_SESSION["venue"]="Solitaire Garden and Banquet";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue5"])){
    if(check()){
        $_SESSION["venue"]="Araliayas Resort";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue6"])){
    if(check()){
        $_SESSION["venue"]="Ramada Resort";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue7"])){
    if(check()){
        $_SESSION["venue"]="Yadu Greens";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue8"])){
    if(check()){
        $_SESSION["venue"]="Mohan Vilaas";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}else if(isset($_POST["venue9"])){
    if(check()){
        $_SESSION["venue"]="Elden Ring Motel And Resorts";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }

}else if(isset($_POST["venue10"])){
    if(check()){
        $_SESSION["venue"]="Hilltop Greens";
        $_SESSION["venue_price"]=1;
        header("Location:food.php");
    }
    
}
    
?>
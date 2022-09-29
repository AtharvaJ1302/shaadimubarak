<?php
session_start();
function check()
{
    if(empty($_SESSION))
    {
        echo "<script>
alert('Signin To Start Booking!');
window.location.href='photography.php';
</script>";
return false;
    }else{return true; }
}
if(isset($_POST["venue1"])){
    if(check()){
        $_SESSION["venue"]="90'sBlack";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
}else if(isset($_POST["venue2"])){
    if(check()){
        $_SESSION["venue"]="Banga Studio";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
    
}else if(isset($_POST["venue3"])){
    if(check()){
        $_SESSION["venue"]="Daas Photography";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
}else if(isset($_POST["venue4"])){
    if(check()){
        $_SESSION["venue"]="Light Chamber";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
    
}else if(isset($_POST["venue5"])){
    if(check()){
        $_SESSION["venue"]="Parak Studio";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
    
}else if(isset($_POST["venue6"])){
    if(check()){
        $_SESSION["venue"]="Photo by the Wedding Ties";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
    
}else if(isset($_POST["venue7"])){
    if(check()){
        $_SESSION["venue"]="Suraj Studio";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
    
}else if(isset($_POST["venue8"])){
    if(check()){
        $_SESSION["venue"]="Technovision";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
    
}else if(isset($_POST["venue9"])){
    if(check()){
        $_SESSION["venue"]="Varun GAvli Studio";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }

}else if(isset($_POST["venue10"])){
    if(check()){
        $_SESSION["venue"]="Vijayeesam Photography";
        $_SESSION["venue_price"]=1;
        header("Location:dummyfood.html");
    }
    
}
    
?>
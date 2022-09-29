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
if(isset($_POST["photo1"])){
    if(check()){
        $_SESSION["photographer"]="90'sBlack";
        $_SESSION["photographer_price"]=1;
        header("Location:sound-light.php");
    }

}else if(isset($_POST["photo2"])){
    if(check()){
        $_SESSION["photographer"]="Banga Studio";
        $_SESSION["photographer_price"]=1;
        header("Location:sound-light.php");
    }
}else if(isset($_POST["photo3"])){
    if(check()){
        $_SESSION["photographer"]="Daas Photography";
        $_SESSION["photographer_price"]=1;
        header("Location:sound-light.php");
    }
}else if(isset($_POST["photo4"])){
    if(check()){
        $_SESSION["photographer"]="Light Chamber";
        $_SESSION["photographer_price"]=1;
        header("Location:sound-light.php");
    }
}else if(isset($_POST["photo5"])){
    if(check()){
        $_SESSION["photographer"]="Parak Studio";
        $_SESSION["photographer_price"]=1;
        header("Location:sound-light.php");
    }
}else if(isset($_POST["photo6"])){
    if(check()){
        $_SESSION["photographer"]="Photo by the Wedding Ties";
        $_SESSION["photographer_price"]=1;
        header("Location:sound-light.php");
    }
}else if(isset($_POST["photo7"])){
    if(check()){
        $_SESSION["photographer"]="Suraj Studio";
        $_SESSION["photographer_price"]=1;
        header("Location:sound-light.php");
    }
}else if(isset($_POST["photo8"])){
    if(check()){
        $_SESSION["photographer"]="Technovision";
        $_SESSION["photographer_price"]=1;
        header("Location:sound-light.php");
    }
}else if(isset($_POST["photo9"])){
    if(check()){
        $_SESSION["photographer"]="Varun Gavli Studio";
        $_SESSION["photographer_price"]=1;
        header("Location:sound-light.php");
    }
}else if(isset($_POST["photo10"])){
    if(check()){
        $_SESSION["photographer"]="Vijayeesam Photography";
        $_SESSION["photographer_price"]=1;
        header("Location:sound-light.php");
    }
} 

?>
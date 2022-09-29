<?php
session_start();
{
    if(empty($_SESSION))
    {
        echo "<script>
alert('Signin To Start Booking!');
window.location.href='sound-light.php';
</script>";
return false;
    }else{return true; }
}
if(isset($_SESSION["light1"])){
    if(check()){
        $_SESSION["light"]="Absolut Lime";
        $_SESSION["light_price"]=1;
        header("Location:dummyreceipt.html");
    }

}else if(isset($_SESSION["light2"])){
    if(check()){
        $_SESSION["light"]="D&S Djs";
        $_SESSION["light_price"]=1;
        header("Location:dummyreceipt.html");
    }

}else if(isset($_SESSION["light3"])){
    if(check()){
        $_SESSION["light"]="Dj Ganesh";
        $_SESSION["light_price"]=1;
        header("Location:dummyreceipt.html");
    }

}else if(isset($_SESSION["light4"])){
    if(check()){
        $_SESSION["light"]="Dj Santosh";
        $_SESSION["light_price"]=1;
        header("Location:dummyreceipt.html");
    }

}else if(isset($_SESSION["light5"])){
    if(check()){
        $_SESSION["light"]="Dj Vibes";
        $_SESSION["light_price"]=1;
        header("Location:dummyreceipt.html");
    }

}else if(isset($_SESSION["light6"])){
    if(check()){
        $_SESSION["light"]="Dj Wale Babu";
        $_SESSION["light_price"]=1;
        header("Location:dummyreceipt.html");
    }

}else if(isset($_SESSION["light7"])){
    if(check()){
        $_SESSION["light"]="Elite Dj Planners";
        $_SESSION["light_price"]=1;
        header("Location:dummyreceipt.html");
    }

}else if(isset($_SESSION["light8"])){
    if(check()){
        $_SESSION["light"]="Miami Djs";
        $_SESSION["light_price"]=1;
        header("Location:dummyreceipt.html");
    }

}else if(isset($_SESSION["light9"])){
    if(check()){
        $_SESSION["light"]="Royal Djs";
        $_SESSION["light_price"]=1;
        header("Location:dummyreceipt.html");
    }

}else if(isset($_SESSION["light10"])){
    if(check()){
        $_SESSION["light"]="RP Dj Wale";
        $_SESSION["light_price"]=1;
        header("Location:dummyreceipt.html");
    }

}
 
?>
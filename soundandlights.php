<?php
session_start();
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
if(isset($_SESSION["light1"])){
    if(check()){
        $_SESSION["light"]="";
        $_SESSION["light_price"]=1;
        header("Location:dummyreceipt.html");
    }

}else if(isset($_SESSION["light2"])){
    if(check()){
        $_SESSION["light"]="";
        $_SESSION["light_price"]=1;
        header("Location:dummyreceipt.html");
    }

}else if(isset($_SESSION["light3"])){
    if(check()){
        $_SESSION["light"]="";
        $_SESSION["light_price"]=1;
        header("Location:dummyreceipt.html");
    }

}else if(isset($_SESSION["light4"])){
    if(check()){
        $_SESSION["light"]="";
        $_SESSION["light_price"]=1;
        header("Location:dummyreceipt.html");
    }

}else if(isset($_SESSION["light5"])){
    if(check()){
        $_SESSION["light"]="";
        $_SESSION["light_price"]=1;
        header("Location:dummyreceipt.html");
    }

}else if(isset($_SESSION["light6"])){
    if(check()){
        $_SESSION["light"]="";
        $_SESSION["light_price"]=1;
        header("Location:dummyreceipt.html");
    }

}else if(isset($_SESSION["light7"])){
    if(check()){
        $_SESSION["light"]="";
        $_SESSION["light_price"]=1;
        header("Location:dummyreceipt.html");
    }

}else if(isset($_SESSION["light8"])){
    if(check()){
        $_SESSION["light"]="";
        $_SESSION["light_price"]=1;
        header("Location:dummyreceipt.html");
    }

}else if(isset($_SESSION["light9"])){
    if(check()){
        $_SESSION["light"]="";
        $_SESSION["light_price"]=1;
        header("Location:dummyreceipt.html");
    }

}else if(isset($_SESSION["light10"])){
    if(check()){
        $_SESSION["light"]="";
        $_SESSION["light_price"]=1;
        header("Location:dummyreceipt.html");
    }

}
 
?>
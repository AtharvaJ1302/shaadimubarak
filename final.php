<?php
session_start();
include("connection.php");
function runsql(string $sql){
    include("connection.php");
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
    return $row;
}
if(isset($_POST["cart"])){
    $sql="SELECT * FROM ongoing_orders WHERE category IN ('venues','photography','sound and lights')";
    $result=mysqli_query($conn,$sql);
    $cnt=mysqli_num_rows($result);
    if($cnt==3){
        $user=(int)$_SESSION["user_id"];
        $s="SELECT * FROM guest WHERE user_id='$user'";
        $res=mysqli_query($conn,$s);
        $r=mysqli_fetch_array($res,MYSQLI_ASSOC);
        $t=$r["tran_guest"];
        $g=$r["food_guest"];
        //$food=$_SESSION["food"];
        $food_price=0;
        $venue=$photo=$sound=$mehendi=$invi=$tran="none";
        $venue_price=$photo_price=$sound_price=$mehendi_price=$invi_price=$tran_price=0;
        //venue
        $sql="SELECT * FROM ongoing_orders WHERE user_id='$user' AND category='venues'";
        $row=runsql($sql);
        if(is_array($row)){
            $venue=$row["name"];
            $venue_price=(int)$row["price"];
        }
        //photography
        $sql="SELECT * FROM ongoing_orders WHERE user_id='$user' AND category='photography'";
        $row=runsql($sql);
        if(is_array($row)){
            $photo=$row["name"];
            $photo_price=(int)$row["price"];
        }
        //sound and lights
        $sql="SELECT * FROM ongoing_orders WHERE user_id='$user' AND category='sound and lights'";
        $row=runsql($sql);
        if(is_array($row)){
            $sound=$row["name"];
            $sound_price=(int)$row["price"];
        }
        //mehendi
        $sql="SELECT * FROM ongoing_orders WHERE user_id='$user' AND category='mehendi'";
        $row=runsql($sql);
        if(count($row)){
            $mehendi=$row["name"];
            $mehendi_price=(int)$row["price"];
        }
        //transportation
        $sql="SELECT * FROM ongoing_orders WHERE user_id='$user' AND category='transport'";
        $row=runsql($sql);
        if(is_array($row)){
            $tran=$row["name"];
            $tran_price=(int)$row["price"];
            $tran_price=$tran_price*$t;
        }
        //invitation cards
        $sql="SELECT * FROM ongoing_orders WHERE user_id='$user' AND category='invitation cards'";
        $row=runsql($sql);
        if(is_array($row)){
            $invi=$row["name"];
            $invi_price=(int)$row["price"];
        }
        //food 
        $sql="SELECT * FROM ongoing_orders WHERE user_id='$user' AND category='food'";
        $result=mysqli_query($conn,$sql);
        $foodstr="";
        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $foodstr.=$row["item_id"]."|";
            $food_price+=$row["price"];
        }
        $food_price=$food_price*$g;
        $time=time();
        $receipt=$user.$time;
        $receipt_id=(int)$receipt;
        $_SESSION["receipt"]=$receipt_id;
        $pending=0;
        
        $sql="INSERT INTO transactions(receipt_id,venue_name,venue_price,light_name,light_price,photo_name,photo_price,food_id,food_total,mehendi_name,mehendi_price,inv_card_name,inv_card_price,tran_name,tran_price,id_user,pending) VALUES('$receipt_id','$venue','$venue_price','$sound','$sound_price','$photo','$photo_price','$foodstr','$food_price','$mehendi','$mehendi_price','$invi','$invi_price','$tran','$tran_price','$user','$pending')";
        $result=mysqli_query($conn,$sql);
        if($result){
            $sql="DELETE FROM ongoing_orders WHERE user_id='$user'";
            $result=mysqli_query($conn,$sql);
            if($result){
                header("Location:receipt.php");
            }
            
        }else{echo "not working";}
    }else{
        echo "<script>
            alert('Venue,Photograhy,Sound And Lights Are Compulsory fields , please select!');
         
            window.location.href='cart.php';
            </script>"; 
    }
    

}
?>
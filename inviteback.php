<?php
session_start();
function check()
{
    if(empty($_SESSION))
    {
        echo "<script>
        alert('Signin To Start Booking!');
        window.location.href='invite.php';
        </script>";
return false;
    }
    else
    {
        return true; 
    }
}
if(isset($_POST["submit"]))
{
    if(check()){
        include("connection.php");
        $user=$_SESSION["user_id"];
        $item=$_POST["photo"];
        //check venue is selected or not if no : redirect with alert if yes: fetch from master_list
        $sql1="SELECT * FROM ongoing_orders WHERE user_id='$user' AND category='invitation cards'";
        $result1=mysqli_query($conn,$sql1);
        $cnt = mysqli_num_rows($result1);
        if($cnt>=1){
            echo "<script>
        alert('Invitation Card  already selected, check in cart!');
     
        window.location.href='invite.php';
        </script>";
        }else{
            $card=$_POST["card"];
            //insert into ongoing_order table
            $sql="INSERT INTO ongoing_orders(user_id,item_id,category,name,price) VALUES('$user','00','invitation cards','$card','500')";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                header("Location:cart.php");
            }
            
            
            //check counter
    
            //if 0 :redirect to next page
            //if 1: go to cart
    
        }
        
        
    }
}

?>
<?php
session_start();
include("connection.php");
function check()
{
    if(empty($_SESSION))
    {
        echo "<script>
alert('Please Sign in to Start Booking!');
window.location.href='food.php';
</script>";
return false;
    }else{return true; }
}
if(isset($_POST["submit"])){
    if(check()){
        $food_list=$_POST["food"];
        //convert each value to integer so we can fetch from database
        $food=array();
        for($i=0;$i<count($food_list);$i++)
        {
            $food[$i]=(int)$food_list[$i];
        }
        //pass values to session variable
        $_SESSION["food"]=$food;
        //head to next page
        $user=$_SESSION["user_id"];
        foreach($food as $f){
            $sql="SELECT * FROM food WHERE food_id='$f'";
            $result=mysqli_query($conn,$sql);
            if($result){
                $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                $name=$row["food_name"];
                $price=$row["food_price"];
                $id=$row["food_id"];
                $sql="INSERT INTO ongoing_orders(user_id,item_id,category,name,price) VALUES('$user','$id','food','$name','$price')";
                $result=mysqli_query($conn,$sql);
            }
        }
                header("Location:photography.php"); 
        
    }


}
?>
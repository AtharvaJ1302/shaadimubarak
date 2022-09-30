<?php
sesssion_start();
if(isset($_POST["submit"])){
    $food_list=$_POST["food"];
    //convert each value to integer so we can fetch from database
    $food=array();
    for($i=0;$i<count($food_list);$i++)
    {
        $food[$i]=(int)$food_list[$i]
    }
    //pass values to session variable
    $_SESSION["food"]=$food;
    
    //check if valus passed to session variable 
    // foreach($_SESSION["food"] as $val )
    // {
    //     echo $val."<br>";
    // }

    //head to next page

    //header("Location:photography.php");

}
?>
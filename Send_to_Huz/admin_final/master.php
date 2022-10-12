<?php

session_start();

include('dbcon.php');
include('functions.php');

if(isset($_POST['add']))
{
    $cat=$_POST['cat'];
    $name=$_POST['name'];
    $desc=$_POST['desc'];
    $price=$_POST['price'];
    $venue=$_POST['venue'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $f_cat=$_POST['f_cat'];
    $f_type=$_POST['f_type'];
    $img_url=$_POST['img_url'];
    $status=$_POST['status'];

    $master_query = "INSERT INTO master_list(item_category, item_name, item_description, price, venue, state, city, food_category, food_type, images, status) VALUES ('$cat','$name','$desc','$price','$venue','$state','$city','$f_cat','$f_type','$img_url','$status')";
    $run = mysqli_query($con, $master_query);

    if($master_query)
    {
        header("Location:add_item.php");
    }

    
    if(!$master_query)
    {
        redirect("add_item.php", "Something went wrong!");
    }
}
?>
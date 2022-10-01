<?php
session_start();
include("connection.php");
$venue=$_SESSION["venue"];
$venue_price=$_SESSION["venue_price"];
$food=array();
$food=$_SESSION["food"];
$photo=$_SESSION["photographer"];
$photo_price=$_SESSION["photographer_price"];
$light=$_SESSION["light"];
$light_price=$_SESSION["light_price"];


//generate receipt id user_id+timestamp
$time=time();
$receipt_id=strval($_SESSION["user_id"]).strval($time);
$user_id=$_SESSION["user_id"];

//calculate total food amount
$food_total=0;
foreach($food as $f)
{
    $sql="select * from food where food_id='$f'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
    $food_total+=$row["food_price"];
}
//calculate total
$total=$venue_price+$photo_price+$light_price+$food_total;

//save values into database

$sql="INSERT INTO transaction(receipt_id,venue_name,venue_price,light_name,light_price,photo_name,photo_price,food_total,id_user) VALUES('$receipt_id','$venue','$venue_price','$light','$light_price','$photo','$photo_price','$food_total','$user_id') ";
mysqli_query($conn,$sql);
?>
<html>
    <head>
    <title>Receipt</title>
</head>
    <body>
        <h1>RECEIPT</h1>
        <table border-width="3">
        <tr>
        <td>Venue</td>
        <td><?php echo $venue."<br>"; ?></td>
        <td><?php echo $venue_price."<br>";?></td>
        </tr>

        <tr>
        <td>Photography</td>
        <td><?php echo $photo."<br>"; ?></td>
        <td><?php echo $photo_price."<br>";?></td>
        </tr>
        

        

        <tr>
        <td>Sound And Lights</td>
        <td><?php echo $light."<br>"; ?></td>
        <td><?php echo $light_price."<br>";?></td>
        </tr>
        

        <tr><td colspan="3">FOOD</td></tr>
        

            <tr>
            <th>Food name</th>
            <th>Food Price</th>
            <th>Food type</th>
            </tr>
            <?php
            $food_total=0;
            foreach($food as $f)
            {
                $sql="select * from food where food_id='$f'";
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
                $food_total+=$row["food_price"]; ?>
            <tr>
                <td><?php echo $row["food_name"]; ?></td>
                <td><?php echo $row["food_price"] ?> </td>
                <td><?php echo $row["type"] ?> </td>
            </tr>
            <?php }?>
            </table>
            <h4>FoodTotal<h4>
            <?php echo $food_total."<br>"; ?>
            <h2>Total<h2>
            <?php echo $total."<br>"; ?>
</body>
</html>




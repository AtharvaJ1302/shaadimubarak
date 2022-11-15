<?php
if(isset($_POST["sub"])){
    include("dbcon.php");
    $receipt=$_POST["update"];
    $pending=1;
    $sql="UPDATE transactions SET pending='$pending' WHERE receipt_id='$receipt'";
    $result=mysqli_query($con,$sql);
    if($result){
        header("Location:orders.php");
    }else{echo "Could not update"; }
}
?>
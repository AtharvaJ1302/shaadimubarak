<?php
session_start();
include("connection.php");
require('mc_table.php');
$pdf=new PDF_MC_Table();
$pdf->AddPage();
$pdf->SetFont('Arial',"",15);
$pdf->Image('logo.jpeg',10,10,30,30);
$pdf->SETXY(100,23);
$pdf->Cell(50,5,'INVOICE',0,0);
$receipt=$_SESSION["receipt"];
//echo $receipt;
$user=$_SESSION["user_id"];
$s="SELECT * FROM guest WHERE user_id='$user'";
        $res=mysqli_query($conn,$s);
        $r=mysqli_fetch_array($res,MYSQLI_ASSOC);
        $t=$r["tran_guest"];
        $g=$r["food_guest"];
$sql="SELECT * FROM transactions WHERE receipt_id='$receipt'";
$result=mysqli_query($conn,$sql);
if(!$result) {
    die('data not found.');
} 
$pdf->SetWidths(array(75,35,30));
$mc_array=array('Description','Unit Price','Total');
$pdf->SetXY(10,70);
$pdf->Row($mc_array,0);

$grandtotal=0;
while($row=mysqli_fetch_array($result, MYSQLI_ASSOC) ) {
 
          $cusname=$_SESSION["myname"];
          $cusemail=$_SESSION["email"];
          $cusinvoice=$row["receipt_id"];
          $venue_name=$row["venue_name"];
          $venue_price=$row["venue_price"];
          $light_name=$row["light_name"];
          $light_price=$row["light_price"];
          $photo_name=$row["photo_name"];
          $photo_price=$row["photo_price"];
          $food_total=$row["food_total"];
          $mehendi_name=$row["mehendi_name"];
            $mehendi_price=$row["mehendi_price"];
            $inc_name=$row["inv_card_name"];
            $inc_price=$row["inv_card_price"];
            $tran_name=$row["tran_name"];
            $tran_price=$row["tran_price"];
            $food=$row["food_id"];
            $food_arr=explode("|",$food);
         $grandtotal=$grandtotal+$venue_price+$light_price+$photo_price+$food_total+$mehendi_price+$inc_price+$tran_price;

$pdf->SetXY(10,40);
$pdf->Cell(60,5,'Invoice Number: '.$cusinvoice,0,0); // receipt number= userid + timestamp
$pdf->SetXY(150,40);
$pdf->Cell(20,5,'Date: '.date('d/m/Y'),0,0);
$pdf->SetXY(10,50);
$pdf->Cell(120,5,'Customer Name: '.$cusname,0,0);
$pdf->SetXY(10,60);
$pdf->Cell(120,5,'Customer Email-id: '.$cusemail,0,0); 
$n=77;
$mc_array=array($venue_name,$venue_price,$venue_price);
$pdf->SetXY(10,$n);
$pdf->Row($mc_array,0);

$n=$n+7;
$mc_array=array($light_name,$light_price,$light_price);
$pdf->SetXY(10,$n);
$pdf->Row($mc_array,0);


$n=$n+7;
$mc_array=array($photo_name,$photo_price,$photo_price);
$pdf->SetXY(10,$n);
$pdf->Row($mc_array,0);

foreach($food_arr as $f){
    if($f!=null){
        $id=(int)$f;
        $sql="SELECT * FROM food WHERE food_id='$id'";
        $result=mysqli_query($conn,$sql);
        $k=mysqli_fetch_array($result,MYSQLI_ASSOC);
        $n=$n+7;
        $food_name=$k["food_name"];
        $price=$k["food_price"];
        $mc_array=array($food_name,$price,$price*$g);
        $pdf->SetXY(10,$n);
        $pdf->Row($mc_array,0);
    }
    
}



$n=$n+7;
$mc_array=array($mehendi_name,$mehendi_price,$mehendi_price);
$pdf->SetXY(10,$n);
$pdf->Row($mc_array,0);

$n=$n+7;
$mc_array=array($tran_name,$tran_price,$tran_price*$t);
$pdf->SetXY(10,$n);
$pdf->Row($mc_array,0);

$n=$n+7;
$mc_array=array($inc_name,$inc_price,$inc_price);
$pdf->SetXY(10,$n);
$pdf->Row($mc_array,0);
}
$n=$n+7; 
$mc_array=array("","Grand Total",$grandtotal);
$pdf->SetXY(10,$n);
$pdf->Row($mc_array,0);

$filename="invoices/".$cusinvoice;
$pdf->Output('F',$filename);
$pdf->Output();
ob_end_flush();
?>

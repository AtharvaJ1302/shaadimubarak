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

$sql="SELECT * FROM users, transaction WHERE users.id = transaction.id_user AND users.id=14";
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
 
          $cusname=$row["name"];
          $cusemail=$row["email"];
          $cusinvoice=$row["receipt_id"];
          $venue_name=$row["venue_name"];
          $venue_price=$row["venue_price"];
          $light_name=$row["light_name"];
          $light_price=$row["light_price"];
          $photo_name=$row["photo_name"];
          $photo_price=$row["photo_price"];
          $food_total=$row["food_total"];
          $grandtotal=$grandtotal+$venue_price+$light_price+$photo_price+$food_total;

$pdf->SetXY(10,40);
$pdf->Cell(60,5,'Invoice Number: '.$cusinvoice,0,0); // receipt number= userid + timestamp
$pdf->SetXY(150,40);
$pdf->Cell(20,5,'Date: '.date('d/m/Y'),0,0);
$pdf->SetXY(10,50);
$pdf->Cell(120,5,'Customer Name: '.$cusname,0,0);
$pdf->SetXY(10,60);
$pdf->Cell(120,5,'Customer Email-id: '.$cusemail,0,0); 
$mc_array=array($venue_name,$venue_price,$venue_price);
$pdf->SetXY(10,77);
$pdf->Row($mc_array,0);

$mc_array=array($light_name,$light_price,$light_price);
$pdf->SetXY(10,84);
$pdf->Row($mc_array,0);

$mc_array=array($photo_name,$photo_price,$photo_price);
$pdf->SetXY(10,91);
$pdf->Row($mc_array,0);

$mc_array=array("Food",$food_total,$food_total);
$pdf->SetXY(10,98);
$pdf->Row($mc_array,0);
} 
$mc_array=array("","Grand Total",$grandtotal);
$pdf->SetXY(10,105);
$pdf->Row($mc_array,0);

$filename="invoices/".$cusinvoice;
$pdf->Output('F',$filename);
$pdf->Output();
ob_end_flush();
?>

<?php
session_start(); 
//include("session_check.php")
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
  <?php include("./head.php"); ?>
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="./gallery.css">
  
<style>

.nav-link:hover{
color: #000;
}

.dropdown-item:hover{
color: #000;
}

.btn{
    background-color: #000;
    border-color: #000;
}

.btn:hover{
    background-color: #000;
    border-color: #000;
}
.modal .btn-close{
    right: 1.7rem;
}

</style>

</head>
<body>
<?php include("./header.php"); ?>
  <div class="container">
    <div class="heading">
      <h3>BEST <span>MOMENTS</span></h3>
    </div>
    <div class="box">
      
      <div class="dream">
        <img src="assets\img\i1.jpg">
         <img src="assets\img\i2.jpg">
          <img src="assets\img\i3.jpg">
          <img src="assets\img\i4.jpg">
          <img src="assets\img\i5.jpg">
            
      </div>

        <div class="dream">
          <img src="assets\img\i6.jpg">
          <img src="assets\img\i7.jpg">
          <img src="assets\img\i8.jpg">
          <img src="assets\img\i9.jpg">
          <img src="assets\img\i10.jpg">
            
      </div>

        <div class="dream">
          <img src="assets\img\i11.jpg">
          <img src="assets\img\i12.jpg">
          <img src="assets\img\i13.jpg">
          <img src="assets\img\i14.jpg">
          <img src="assets\img\i15.jpg">
        
            
      </div>




    </div>
    





  </div>
  <?php include("./footer.php"); ?>
</body>
<?php include("./progress-wrap.php"); ?>

<?php include("./javascript.php"); ?>
</html>
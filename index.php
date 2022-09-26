<?php 
session_start();
$main_title = "Shaadi Mubarak";
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $main_title; ?></title>
	<?php include("./head.php"); ?>
	<meta name="description" content="">
	<meta name="keywords" content="">
	
</head>
<body>

<?php require("./header.php"); ?>

<?php require("./main.php"); ?>
	
<?php require("./footer.php"); ?>

</body>

<?php require("./progress-wrap.php"); ?>

<?php require("./javascript.php"); ?>

</html>

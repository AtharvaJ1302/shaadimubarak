<?php 
session_start();
$user=$_SESSION["user_id"];
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>

  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Owl-carousel CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

  <!-- font awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

  <!-- Custom CSS file 
  <link rel="stylesheet" href="style.css">-->
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./states.css">
</head>

<body>
  <?php include("./header.php"); ?>

<?php
$categories=array("venues","sound and lights","photography");
//$food=$_SESSION["food"];
$notman=array("mehendi","transport","invitation cards");
$total=0;
$n=0;
?>

  <!-- start #main-site -->
  <main id="main-site">

    <!-- Shopping cart section  -->
    <section id="cart" class="py-3">
      <div class="container-fluid w-75">
        <h1>YOUR WEDDING PLAN</h1>

        <!--  shopping cart items   -->
        <div class="row">
          <div class="col-sm-9">
            <?php
              foreach($categories as $c){
                $sql="SELECT * FROM ongoing_orders WHERE user_id='$user' AND category='$c'";
                $result=mysqli_query($conn,$sql);
                if(!$result){
                  echo "Cannot find";
                }
                $cnt=mysqli_num_rows($result);
                if($cnt==1){
                  $n++;
                  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                  $total+=$row["price"];
            ?>
            
            
            <!-- cart item -->
            <div class="row border-top py-3 mt-3">

              <div class="col-sm-8">
                <h3><?php echo strtoupper($c); ?> </h3>
                <h5> Name:</h5>
                <h6><?php echo $row["name"]; ?></h6>
                <br>

                <h5>Price:</h5>
                <h6><?php echo $row["price"]; ?></h6>

              </div>

              <div class="col-sm-2 text-right">
                <form method="post" action="remove.php" >
                  <input type="hidden" name="remove" value=<?php echo $c; ?>>
              <button type="submit" name="submit" class="mt-3">Remove</button>
                </form>
              </div>

            </div>
            <!-- !cart item -->
            <?php 
              } else{
            
            ?>
            <!-- cart item -->
            <div class="row border-top py-3 mt-3">

              <div class="col-sm-8">
                <h3><?php echo strtoupper($c); ?> </h3>
                <h4>THIS IS A COMPULSORY FIELD PLEASE SELECT</h4>
                <br>

                
              </div>

              

            </div>
            <?php
              }
              }
            ?>
            <!-- !cart item -->
            <!-- Not so compulsory fields -->

            <?php
              foreach($notman as $c){
                $sql="SELECT * FROM ongoing_orders WHERE user_id='$user' AND category='$c'";
                $result=mysqli_query($conn,$sql);
                if(!$result){
                  echo "Cannot find";
                }
                $cnt=mysqli_num_rows($result);
                if($cnt==1){
                  $n++;
                  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                  $total+=$row["price"];
            ?>
            
            
            <!-- cart item -->
            <div class="row border-top py-3 mt-3">

              <div class="col-sm-8">
                <h3><?php echo strtoupper($c); ?> </h3>
                <h5> Name:</h5>
                <h6><?php echo $row["name"]; ?></h6>
                <br>

                <h5>Price:</h5>
                <h6><?php echo $row["price"]; ?></h6>

              </div>

              <div class="col-sm-2 text-right">
                <form method="post" action="remove.php" >
                  <input type="hidden" name="remove" value=<?php echo $c; ?>>
              <button type="submit" name="submit" class="mt-3">Remove</button>
                </form>
              </div>

            </div>
            <!-- !cart item -->
            <?php 
              } else{
            
            ?>
            <!-- cart item -->
            <div class="row border-top py-3 mt-3">

              <div class="col-sm-8">
                <h3><?php echo strtoupper($c); ?> </h3>
                <h4>THIS FIELD IS NOT SELECTED</h4>
                <br>

                
              </div>

              

            </div>
            <?php
              }
              }
            ?>
            <!-- !cart item -->
            <!--Food-->
            <?php
                $sql="SELECT * FROM ongoing_orders WHERE category='food'";
                $result=mysqli_query($conn,$sql);
                if(!$result){
                  echo "Cannot find";
                }
                $cnt=mysqli_num_rows($result);
                while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                  $n++;
                  //$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                  $total+=$row["price"];
            ?>
            
            
            <!-- cart item -->
            <div class="row border-top py-3 mt-3">

              <div class="col-sm-8">
                <h3>FOOD </h3>
                <h5> Name:</h5>
                <h6><?php echo $row["name"]; ?></h6>
                <br>

                <h5>Price:</h5>
                <h6><?php echo $row["price"]; ?></h6>

              </div>

              <div class="col-sm-2 text-right">
                <form method="post" action="removefood.php" >
                  <input type="hidden" name="remove" value=<?php echo $row["name"]; ?>>
              <button type="submit" name="submit" class="mt-3">Remove</button>
                </form>
              </div>

            </div>
            <?php 
                }
              
            ?>

          </div>
          <!-- subtotal section-->
          <div class="col-sm-3">
            <div class="sub-total border text-center mt-2">
              <h6 class=" text-success py-3"><i class="fas fa-check"></i> Order Status: Confirmed</h6>
              <div class="border-top py-4">
                <h5>Subtotal (<?php echo $n;?> item):&nbsp; <span class="text-danger">Rs.<span class="text-danger" id="deal-price"><?php echo $total; ?></span> </span> </h5>
                <button type="submit" class=" mt-3">Proceed to Buy</button>
              </div>
            </div>
          </div>
          <!-- !subtotal section-->
        </div>
        <!--  !shopping cart items   -->
      </div>
    </section>
    <!-- !Shopping cart section  -->



  </main>
  <!--main-site -->
  <?php include("./footer.php"); ?>
</body>

<?php include("./progress-wrap.php"); ?>

<?php include("./javascript.php"); ?>

</html>

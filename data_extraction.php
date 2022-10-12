<?php
session_start(); 
//include("session_check.php")
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include("./head.php"); ?>

  <!--Bootstrap CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <!-- JavaScript Bundle with Popper -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./states.css">

<style>
  .back{
    margin-left: -20px;
  }

  .btn-state{
    position: relative;
    left:11rem;
  }

  .price{
    position:relative;
    right:13rem;
  }

  .front{
    height: 25rem;
    width: 30rem;
  }

  .back{
    width: 30rem;
  }

  label{
    margin-top: 20px;
    margin-bottom: 20px;
  }
</style>

</head>

<body>

  <?php include("./header.php"); ?>

  <form action="venuemaharashtra.php" method="post">
  <section id="container">

    <div class="head">
      <h1>MAHARASHTRA</h1>
    </div>
    <?php
    $sql="SELECT * FROM master_list WHERE item_category='Venue' and state='Maharashtra' and status='Active'";
    $result=mysqli_query($conn,$sql);
    if(!$result){ 
        die("no elements found"); 
    }
    $count=0;
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        $count++;
        $image=explode(',',$row["images"]);
        $card_id="card_id".$count ; 
        $data_bs_target="#carouselExampleControls".$count;      
        $data_bs_id="carouselExampleControls".$count;

    ?>
    <input type="checkbox" id=<?php echo $card_id;?> />
    <label class="col-md-5 card-container" for=<?php echo $card_id;?>>

      <div class="card-flip">
        <!-- Card 1 Front -->
        <div class="card front">
          <div id=<?php echo $data_bs_id;?> class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
              <?php echo '<img src="./images/Maharashtra/GCC hotel/'.$image[0].'" class="d-block w-100" alt="..." width="538px" height="358px">';?>
              </div>
              <div class="carousel-item">
                <?php echo '<img src="./images/Maharashtra/GCC hotel/'.$image[1].'" class="d-block w-100" alt="..." width="538px" height="358px">';?>
              </div>
              <div class="carousel-item">
              <?php echo '<img src="./images/Maharashtra/GCC hotel/'.$image[2].'" class="d-block w-100" alt="..." width="538px" height="358px">';?>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target=<?php echo $data_bs_target;?>
              data-bs-slide="prev" value="click" onclick="flip">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target=<?php echo $data_bs_target;?>
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row["item_name"]; ?></h5>
<h6>LOCATION:<?php echo $row["venue"]; ?></h6>

          </div>
        </div>

        <!-- End Card 1 Front -->

        <!-- Card 1 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">
            <?php echo $row["item_description"]; ?>
            </p>
            <div class="price" style="top:7rem;" ><?php echo $row["price"]; ?></div>
            <!-- <a href="#" class="btn btn-primary" style="text-align: center;">Add to cart</a> -->
            <button class="btn-state btn-primary" name="venue1" style=" top: 5rem;">Select</button>
          </div>
        </div>
        <!-- End Card 1 Back -->
      </div>
    </label>
    <!-- End Card 1 -->

    <?php
    }//end of while
        ?>

  </section>
</form>

<?php include("./footer.php"); ?>

</body>

<?php include("./progress-wrap.php"); ?>

<?php include("./javascript.php"); ?>

</html>
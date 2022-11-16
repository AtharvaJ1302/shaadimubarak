<?php
include("connection.php");
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- Owl-carousel CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

<!-- font awesome icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

<!-- Custom CSS file 
<link rel="stylesheet" href="style.css">-->
<!--<link rel="stylesheet" href="./states.css">-->
<link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet" href="./invitation/invitation.css">

<style>
  .card{
    margin-bottom: 120px;
  }

  .nav-link:hover{
color: #000;
}

.dropdown-item:hover{
color: #000;
}

.navbar .btn-sm{
  color: white;
    border: none;
    background-color: black;
}

.head h1{
  background-color: #fff;
  color: #000;
  font-size: 1.5rem;
}

.front {
    background-color: #eb8fa7;
}

.back {
    background-color: #eb8fa7;
}

.inside {
    background-color: #eb8fa7;
}

</style>

</head>
<body style="background-color: #000;">
<?php include("./header.php"); ?>


<div class="head center" style="margin-top: 2rem;">
    <h1 class="center">INVITATION CARDS</h1>
  </div>
    <div class="card-container">
    <div class="card" style="background-color: #000;box-shadow:none;">
      <div class="outside">
        <div class="front">
        <img src="./invitation/1.1.jpg" alt="img">
        </div>
        <div class="back"><img src="./invitation/1.2.jpg" height="80%" width="100%"></div>
      </div>
      <div class="inside">
        <img src="./invitation/1.3.jpg" alt="">
        <button class="btn">Add to cart</button>
        <h6>Card 1</h6>
        <h6>Price:1500</h6>
      </div>
    </div>

    <div class="card" style="background-color: #000;box-shadow:none;">
      <div class="outside">
        <div class="front">
        <img src="./invitation/2.1.jpg" alt="img">
        </div>
        <div class="back"><img src="./invitation/2.2.jpg" height="80%" width="100%"></div>
      </div>
      <div class="inside">
        <img src="./invitation/2.3.jpg" alt="">
        <button class="btn">Add to cart</button>
        <h6>Card 2</h6>
        <h6>Price:1500</h6>
      </div>
    </div>
  </div>
    <div class="card-container">
    <div class="card" style="background-color: #000;box-shadow:none;">
      <div class="outside">
        <div class="front">
        <img src="./invitation/3.1.jpg" alt="img">
        </div>
        <div class="back"><img src="./invitation/3.2.jpg" height="80%" width="100%"></div>
      </div>
      <div class="inside">
        <img src="./invitation/3.3.jpg" alt="">
        <button class="btn">Add to cart</button>
        <h6>Card 3</h6>
        <h6>Price:1500</h6>
      </div>
    </div>

    <div class="card" style="background-color: #000;box-shadow:none;">
      <div class="outside">
        <div class="front">
        <img src="./invitation/4.1.jpg" alt="img">
        </div>
        <div class="back"><img src="./invitation/4.2.jpg" height="80%" width="100%"></div>
      </div>
      <div class="inside">
        <img src="./invitation/4.3.jpg" alt="">
        <button class="btn">Add to cart</button>
        <h6>Card 4</h6>
        <h6>Price:1500</h6>
      </div>
    </div>
  </div>
    <div class="card-container">
    <div class="card" style="background-color: #000;box-shadow:none;">
      <div class="outside">
        <div class="front">
        <img src="./invitation/5.1.jpg" alt="img">
        </div>
        <div class="back"><img src="./invitation/5.2.jpg" height="80%" width="100%"></div>
      </div>
      <div class="inside">
        <img src="./invitation/5.3.jpg" alt="">
        <button class="btn">Add to cart</button>
        <h6>Card 5</h6>
        <h6>Price:1500</h6>
      </div>
    </div>

    <div class="card" style="background-color: #000;box-shadow:none;">
      <div class="outside">
        <div class="front">
        <img src="./invitation/6.1.jpg" alt="img">
        </div>
        <div class="back"><img src="./invitation/6.2.jpg" height="80%" width="100%"></div>
      </div>
      <div class="inside">
        <img src="./invitation/6.3.jpg" alt="">
        <button class="btn">Add to cart</button>
        <h6>Card 6</h6>
        <h6>Price:1500</h6>
      </div>
    </div>
  </div>
    <div class="card-container">
    <div class="card" style="background-color: #000;box-shadow:none;">
      <div class="outside">
        <div class="front">
        <img src="./invitation/7.1.jpg" alt="img">
        </div>
        <div class="back"><img src="./invitation/7.2.jpg" height="80%" width="100%"></div>
      </div>
      <div class="inside">
        <img src="./invitation/7.3.jpg" alt="">
        <button class="btn">Add to cart</button>
        <h6>Card 7</h6>
        <h6>Price:1500</h6>
      </div>
    </div>

    <div class="card" style="background-color: #000;box-shadow:none;">
      <div class="outside">
        <div class="front">
        <img src="./invitation/8.1.jpg" alt="img">
        </div>
        <div class="back"><img src="./invitation/8.2.jpg" height="80%" width="100%"></div>
      </div>
      <div class="inside">
        <img src="./invitation/8.3.jpg" alt="">
        <button class="btn">Add to cart</button>
        <h6>Card 8</h6>
        <h6>Price:1500</h6>
      </div>
    </div>
  </div>

    <div class="card-container">
     <div class="card" style="background-color: #000;box-shadow:none;">
      <div class="outside">
        <div class="front">
        <img src="./invitation/9.1.png" alt="img">
        </div>
        <div class="back"><img src="./invitation/9.2.png" height="80%" width="100%"></div>
      </div>
      <div class="inside">
        <img src="./invitation/9.3.png" alt="">
        <button class="btn">Add to cart</button>
        <h6>Card 9</h6>
        <h6>Price:1500</h6>
      </div>
    </div>

    <div class="card" style="background-color: #000;box-shadow:none;">
      <div class="outside">
        <div class="front">
        <img src="./invitation/10.1.jpg" alt="img">
        </div>
        <div class="back"><img src="./invitation/10.2.jpg" height="80%" width="100%"></div>
      </div>
      <div class="inside">
        <img src="./invitation/10.3.jpg" alt="">
        <button class="btn">Add to cart</button>
        <h6>Card 10</h6>
        <h6>Price:1500</h6>
      </div>
    </div>
  </div>



<?php include("./footer.php"); ?>
</body>

<?php include("./progress-wrap.php"); ?>

<?php include("./javascript.php"); ?>
</html>
<?php
session_start(); 
include("session_check.php")
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


  <link rel="stylesheet" href="states.css">

</head>

<body>
<?php include("./header.php"); ?>
  <form action="venuetelangana.php" method="post">
  <section id="container">

    <div class="head">
      <h1>TELANGANA</h1>
    </div>

    <input type="checkbox" id="card-1" />
    <label class="col-md-5 card-container" for='card-1'>

      <div class="card-flip">
        <!-- Card 1 Front -->
        <div class="card front">
          <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/telangana/Taj Falaknuma Palace/image114.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/telangana/Taj Falaknuma Palace/image65.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/telangana/Taj Falaknuma Palace/image77.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1"
              data-bs-slide="prev" value="click" onclick="flip">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title">Taj Falaknuma Palace</h5>
            <h6>LOCATION: Engine Bowli, Hyderabad</h6>
          </div>
        </div>

        <!-- End Card 1 Front -->

        <!-- Card 1 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Taj Falaknuma Palace is one of the most opulent heritage hotels in India, where you can host wedding and pre-wedding ceremonies. This heritage hotel is also a popular spot for hosting destination weddings in India. At Taj Falaknuma Palace you can choose to hold ceremonies for your wedding at the indoor or outdoor venues depending on your preference. The hotel also provides you with options ranging from splendid lawns, magnificent Rajasthani Gardens, a lavish Durbar Hall to the iconic Coronation Hall to host the wedding celebrations. Each of these venues at Taj Falaknuma Palace has a different seating capacity, ranging from a minimum of 60 guests to a maximum of 15000 guests.</p>
            <button class="btn btn-primary" name="venue1">Select</button>
          </div>
        </div>
        <!-- End Card 1 Back -->
      </div>
    </label>
    <!-- End Card 1 -->



    <!--Card 2 starts-->
    <input type="checkbox" id="card-2" />
    <label class="col-md-5 card-container" for='card-2'>

      <div class="card-flip">
        <!-- Card 2 Front -->


        <div class="card front">
          <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/telangana/Chowmahalla Palace/image108.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/telangana/Chowmahalla Palace/image34.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/telangana/Chowmahalla Palace/image78.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2"
              data-bs-slide="prev" value="click" onclick="flip">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title">Chowmahalla Palace</h5>
            <h6>LOCATION:  Motigalli, Khilwat, Hyderabad</h6>


          </div>
        </div>

        <!-- End Card 2 Front -->

        <!-- Card 2 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">On your special day if you want to feel like a Prince or a Princess, then the grand wedding venue at Chowmahalla Palace is a perfect choice for you. Experience royalty at its best on the lush green lawn of Chowmahalla Palace, which is adorned with large fountains and the banquet hall that spells royalty of the by-gone era.
              The decor and menu of the wedding ceremonies at Chowmahalla Palace can be customised by hiring wedding decorators and catering services of your choice.Price per plate:
              Vegetarian: Approximately ₹900 onwards
              Non-vegetarian: Approximately ₹1100 onwards
              
              </p>
            <button class="btn btn-primary" name="venue2">Select</button>
          </div>
        </div>
        <!-- End Card 2 Back -->
      </div>
    </label>
    <!-- End Card 2 -->




    <!--Card 3 starts-->
    <input type="checkbox" id="card-3" />
    <label class="col-md-5 card-container" for='card-3'>

      <div class="card-flip">
        <!-- Card 3 Front -->


        <div class="card front">
          <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/telangana/Fort Grand/image122.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/telangana/Fort Grand/image32.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/telangana/Fort Grand/image94.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls3"
              data-bs-slide="prev" value="click" onclick="flip">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls3"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title">Fort Grand</h5>
            <h6>LOCATION: Shamshabad, Hyderabad</h6>

          </div>
        </div>

        <!-- End Card 3 Front -->

        <!-- Card 3 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">If you are looking for a quaint and serene space for your wedding venue, then Fort Grand in Hyderabad is a perfect wedding venue. This picturesque location blends royal architecture and modern amenities for both indoor as well as outdoor venues. Whether it is a grand celebration or an intimate celebration, Fort Grand has something to offer to everyone according to their preference. Their extensive menu has plenty of options for both vegetarian and non-vegetarian meals.
              Price per plate:
              Vegetarian: Approximately ₹900 onwards
              Non-vegetarian: Approximately ₹1200 onwards
              </p>
            <button class="btn btn-primary" name="venue3">Select</button>
          </div>
        </div>
        <!-- End Card 3 Back -->
      </div>
    </label>
    <!-- End Card 3 -->



    <!--Card 4 starts-->
    <input type="checkbox" id="card-4" />
    <label class="col-md-5 card-container" for='card-4'>

      <div class="card-flip">
        <!-- Card 4 Front -->


        <div class="card front">
          <div id="carouselExampleControls4" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/telangana/Taj Krishna/image10.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/telangana/Taj Krishna/image109.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/telangana/Taj Krishna/image76.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls4"
              data-bs-slide="prev" value="click" onclick="flip">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls4"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title">Taj Krishna</h5>
            <h6>LOCATION: Banjara Hills, Hyderabad</h6>
          </div>
        </div>

        <!-- End Card 4 Front -->

        <!-- Card 4 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Taj Krishna is one of the most elegant luxury hotels in Hyderabad that has ample venue options for hosting wedding celebrations. The six indoor event venues at Taj Krishna provides you with a sophisticated space for organising pre-wedding ceremonies and wedding receptions. To make the hassle-free experience of hosting pre-wedding, wedding and post-wedding ceremonies at Taj Krishna, the in-house decorating and catering staff ensures that they fulfil all minute requirements for your big day.The plush surroundings, classy interiors and elegant rooms and suites at Taj Krishna make it a popular choice for wedding venues.Price per plate:
              Veg:Approximately ₹2500 onwards
              Non-veg:Approximately ₹3000 onwards
              </p>
            <button class="btn btn-primary" name="venue4">Select</button>
          </div>
        </div>
        <!-- End Card 4 Back -->
      </div>
    </label>
    <!-- End Card 4 -->




    <!--Card 5 starts-->
    <input type="checkbox" id="card-5" />
    <label class="col-md-5 card-container" for='card-5'>

      <div class="card-flip">
        <!-- Card 5 Front -->


        <div class="card front" >
          <div id="carouselExampleControls5" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/telangana/Courtyard by Marriot/image116.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/telangana/Courtyard by Marriot/image123.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/telangana/Courtyard by Marriot/image8.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls5"
              data-bs-slide="prev" value="click" onclick="flip">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls5"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title">Courtyard by Marriot</h5>
            <h6>LOCATION:  Kavadiguda, Hyderabad</h6>
          </div>
        </div>

        <!-- End Card 5 Front -->

        <!-- Card 5 Back -->
        <div class="card back" >
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">To make your wedding memorable, the staff at Courtyard by Marriot delivers exceptional service and hospitality. The experienced wedding planners staff leave no stone unturned in assisting and customising your wedding celebrations according to your preferences. Courtyard offers you to choose any venue from the 19 lavish wedding venues that include both indoor as well as outdoor venues. Whether you are planning to host a grand wedding for about 1000 guests or an intimate wedding for less than a 100 guests, you can opt for an indoor or outdoor venue at Courtyard that will suit your requirements as per your gathering. Price per plate:
              Veg:Approximately ₹1400 onwards
              Non-veg:Approximately ₹1500 onwards
               
              </p>
            <button class="btn btn-primary" name="venue5">Select</button>
          </div>
        </div>
        <!-- End Card 5 Back -->
      </div>
    </label>
    <!-- End Card 5 -->






    <!--Card 6 starts-->
    <input type="checkbox" id="card-6" />
    <label class="col-md-5 card-container" for='card-6'>

      <div class="card-flip">
        <!-- Card 6 Front -->


        <div class="card front">
          <div id="carouselExampleControls6" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/telangana/The Golkonda Resorts and Spa/image49.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/telangana/The Golkonda Resorts and Spa/image54.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/telangana/The Golkonda Resorts and Spa/image72.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls6"
              data-bs-slide="prev" value="click" onclick="flip">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls6"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title">The Golkonda Resorts</h5>
            <h6>LOCATION: Gandipet, Hyderabad</h6>
          </div>
        </div>

        <!-- End Card 6 Front -->

        <!-- Card 6 Back -->
        <div class="card back" >
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">The Golkonda Resorts is a great venue for those who are looking to host a wedding amidst the scenic surrounds of this resort. It is equipped with 44 luxury villas and 24 premium rooms to accommodate your guests along with providing them with spaces such as a poolside bar, a poolside kitchen, all-day dining restaurants and spa services to pamper themselves.
              The extensive lawns and elegant banquet halls at The Golkonda make it a perfect venue for an intimate wedding experience. Price per plate:
              Veg: Approximately ₹1800 onwards
              Non-veg: Approximately ₹2000 onwards
              
              </p>
           <button class="btn btn-primary" name="venue6">Select</button>
          </div>
        </div>
        <!-- End Card 6 Back -->
      </div>
    </label>
    <!-- End Card 6 -->







    <!--Card 7 starts-->
    <input type="checkbox" id="card-7" />
    <label class="col-md-5 card-container" for='card-7'>

      <div class="card-flip">
        <!-- Card 7 Front -->


        <div class="card front">
          <div id="carouselExampleControls7" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/telangana/Aalankrita Resort And Convention/image2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/telangana/Aalankrita Resort And Convention/image36.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/telangana/Aalankrita Resort And Convention/image9.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls7"
              data-bs-slide="prev" value="click" onclick="flip">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls7"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title">Aalankrita Resort</h5>
            <h6>LOCATION: Shamirpet, Secunderabad</h6>
          </div>
        </div>

        <!-- End Card 7 Front -->

        <!-- Card 7 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">This tastefully designed resort blends lush green surroundings and modern amenities. The extensive area of the resort boasts of rooms, suites, penthouse rooms, cottage rooms and pool villa rooms to accommodate the guests.
              There are several venues to conduct the ceremonies and parties related to weddings at Aalankrita Resort And Convention. The spacious lawns and banquet halls provide you with catering services and other in-house services for a memorable wedding celebration. The event spaces can accommodate from a minimum of 100 guests and a maximum of 800 guests at one time. Price per plate:
              Veg: Approximately ₹800 onwards
              Non-veg: Approximately ₹800 onwards
              
              </p>
            <button class="btn btn-primary" name="venue7">Select</button>
          </div>
        </div>
        <!-- End Card 7 Back -->
      </div>
    </label>
    <!-- End Card 7 -->






    <!--Card 8 starts-->
    <input type="checkbox" id="card-8" />
    <label class="col-md-5 card-container" for='card-8'>

      <div class="card-flip">
        <!-- Card 8 Front -->


        <div class="card front">
          <div id="carouselExampleControls8" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/telangana/Sri Venkateswara Garden/image104.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/telangana/Sri Venkateswara Garden/image131.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/telangana/Sri Venkateswara Garden/image83.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls8"
              data-bs-slide="prev" value="click" onclick="flip">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls8"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title">Sri Venkateswara Garden</h5>
            <h6>LOCATION: Kompally, Hyderabad</h6>
          </div>
        </div>

        <!-- End Card 8 Front -->

        <!-- Card 8 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">The spacious lawn at Sri Venkateswara Garden is one of the grandest venues in Hyderabad to host a wedding on a lawn under the sky and the stars. The lush greenery and splendid ambience of this wedding venue makes it a popular choice for many in Hyderabad and Secunderabad.
              The splendid 90,000 square feet lawn along with ample parking space, a function hall, dining halls and air-conditioned rooms will ensure that you enjoy indoor and outdoor facilities for various wedding ceremonies. You can also deck up the lawn area of Sri Venkateswara Garden for your dream wedding with innovative decor and lighting that are available at the premises.Price per plate:
              Veg: Approximately ₹300 onwards
              
              </p>
            <button class="btn btn-primary" name="venue8">Select</button>
          </div>
        </div>
        <!-- End Card 8 Back -->
      </div>
    </label>
    <!-- End Card 8 -->






    <!--Card 9 starts-->
    <input type="checkbox" id="card-9" />
    <label class="col-md-5 card-container" for='card-9'>

      <div class="card-flip">
        <!-- Card 9 Front -->


        <div class="card front">
          <div id="carouselExampleControls9" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/telangana/Imperial Gardens/image40.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/telangana/Imperial Gardens/image44.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/telangana/Imperial Gardens/image79.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls9"
              data-bs-slide="prev" value="click" onclick="flip">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls9"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title">Imperial Gardens</h5>
            <h6>LOCATION: Sikh Road, Secunderabad</h6>
          </div>
        </div>

        <!-- End Card 9 Front -->

        <!-- Card 9 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">The four wedding venues at Imperial Gardens look like a wedding venue right out of the storybooks. The elegant architecture, tastefully designed spaces, exotic plants and ample space of each of the wedding venues at Imperial Gardens is sure to make a picture-perfect venue for wedding celebrations.
              The outdoor event venues at Imperial Gardens are perfect for pre-wedding and wedding ceremonies. You can easily turn each of the spaces into your dream wedding venue with the help of the event planners. The courteous staff at Imperial Gardens are renowned for their impeccable service
              . Price per plate:
              Veg: Approximately ₹350 onwards
              Non-veg: Approximately ₹450 onwards
              </p>
            <button class="btn btn-primary" name="venue9">Select</button>
          </div>
        </div>
        <!-- End Card 9 Back -->
      </div>
    </label>
    <!-- End Card 9 -->






    <!--Card 10 starts-->
    <input type="checkbox" id="card-10" />
    <label class="col-md-5 card-container" for='card-10'>

      <div class="card-flip">
        <!-- Card 10 Front -->


        <div class="card front">
          <div id="carouselExampleControls10" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/telangana/Summer Green Resort Palm Groves/image102.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/telangana/Summer Green Resort Palm Groves/image30.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/telangana/Summer Green Resort Palm Groves/image69.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls10"
              data-bs-slide="prev" value="click" onclick="flip">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls10"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title">Summer Green Resort Palm Groves</h5>
            <h6>LOCATION: Shamirpet Mandal, Hyderabad</h6>
          </div>
        </div>

        <!-- End Card 10 Front -->

        <!-- Card 10 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Summer Green Resort blends the lush greenery of the surroundings along with splendid blue waters of the swimming pools and a soothing ambience. This elegant resort has facilities to host pre-wedding and wedding ceremonies along with accommodation facilities for the guests. The luxurious Kerala Cottage Room and Honeymoon Room are perfect for newlyweds.
              For your dream wedding at this resort, you can opt for a lawn or a wedding hall as your wedding venue depending on the number of guests. The wedding venues can accommodate a minimum of 100 guests and a maximum of 1500 guests.
              Price per plate:
              Veg: Approximately ₹650 onwards
              Non-veg: Approximately ₹750 onwards
              
              </p>
            <button class="btn btn-primary" name="venue10">Select</button>
          </div>
        </div>
        <!-- End Card 10 Back -->
      </div>
    </label>
    <!-- End Card 10 -->
  </section>
  </form>
  <?php include("./footer.php"); ?>
</body>
<?php include("./progress-wrap.php"); ?>

<?php include("./javascript.php"); ?>


</html>

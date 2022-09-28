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


    <link rel="stylesheet" href="./assets/css/states.css">
  <style>
  .back{
    margin-left: -130px;
  }
</style>
</head>

<body>

<?php include("./header.php"); ?>

  <form action="venuegujarat.php" method="post">
  <section id="container">

    <div class="head">
      <h1>GUJARAT</h1>
    </div>

    <input type="checkbox" id="card-1" />
    <label class="col-md-5 card-container" for='card-1'>

      <div class="card-flip">
        <!-- Card 1 Front -->
        <div class="card front">
          <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/gujarat/Laxmi Vilas Palace Banquets, gujarat/image120.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/gujarat/Laxmi Vilas Palace Banquets, gujarat/image26.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/gujarat/Laxmi Vilas Palace Banquets, gujarat/image4.png" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Laxmi Vilas Palace Banquets</h5>
            <h6>LOCATION: Ajwa Road, Baroda</h6>

          </div>
        </div>

        <!-- End Card 1 Front -->

        <!-- Card 1 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">The three centuries old palace provides a gorgeous backdrop for a jaw-dropping wedding venue. Located in the midst of a lush green lawn, LVP Banquets is truly nothing short of magical. If you want a romantic and picturesque wedding, this is your venue for the day! While their decorators set up the place, their caterers can whip up the most amazing wedding feast for you and your guests.
              Prices Start at: Rs. 850 (veg) & Rs. 900 (n.veg)</p>
            <button class="btn btn-primary" name="venue1" > Select </button>
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
                <img src="./images/gujarat/Aam Bagan, Ahmedabad/image107.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/gujarat/Aam Bagan, Ahmedabad/image39.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/gujarat/Aam Bagan, Ahmedabad/image6.png" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Aam Bagan</h5>
            <h6>LOCATION: Sindhu Bhavan Road, Ahmedabad</h6>


          </div>
        </div>

        <!-- End Card 2 Front -->

        <!-- Card 2 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Located amidst vast stretches of mango orchards, Aam Bagan in Bokadev is an ideal wedding venue for you if you want a picturesque wedding. If you are planning a destination wedding in Gujarat, you must check out Aam Bagan for its lavish amenities and beautiful grounds. You can also get your own caterer and decorator to customize the event as per your needs.
              Prices Start at: Rs. 2200 (veg) & Rs. 2500 (n.veg)
              </p>
            <button class="btn btn-primary" name="venue2" > Select </button>
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
                <img src="./images/gujarat/Thaker Farm, Ahmedabad/img2.jpeg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/gujarat/Thaker Farm, Ahmedabad/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/gujarat/Thaker Farm, Ahmedabad/img4.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Thaker Farm</h5>
            <h6>LOCATION: Gandhinagar, Ahmedabad</h6>

          </div>
        </div>

        <!-- End Card 3 Front -->

        <!-- Card 3 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">With vast stretches of lush green lawns, Thaker Farm makes an idyllic wedding venue for a destination wedding in Gujarat. Their in-house decorators can set up canopies, tents and other party areas for you and your guests. You can get your own caterer to treat your guests to a sumptuous feast while their decorators light up the place with gorgeous decorative lights.
              Prices Start at: Rs. 450 (veg) & Rs. 450 (n.veg)
              </p>
            <button class="btn btn-primary" name="venue3" > Select </button>
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
                <img src="./images/gujarat/Maple Farm, Ahmedabad/image71.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/gujarat/Maple Farm, Ahmedabad/image98.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/gujarat/Maple Farm, Ahmedabad/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Maple Farm</h5>
            <h6>LOCATION: Chharodi, Ahmedabad</h6>
          </div>
        </div>

        <!-- End Card 4 Front -->

        <!-- Card 4 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">If you have always wanted a grand destination wedding in Gujarat, Maple Farm Party Plot might just be the one for you. With an elegant and spacious hall and a vast stretch of lawn, Maple Farm is truly an exquisite venue for a wedding. They also have an experienced team of decorators who can set up the place for your special day!
              Prices Start at: Rs. 250 (veg)
              </p>
            <button class="btn btn-primary" name="venue4" > Select </button>
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


        <div class="card front">
          <div id="carouselExampleControls5" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/gujarat/Crowne Plaza, Ahmedabad/image101.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/gujarat/Crowne Plaza, Ahmedabad/image126.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/gujarat/Crowne Plaza, Ahmedabad/image13.png" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Crowne Plaza</h5>
            <h6>LOCATION: Ahmedabad City Centre-read</h6>
          </div>
        </div>

        <!-- End Card 5 Front -->

        <!-- Card 5 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Located in the Prashad Nagar area of Ahmedabad, Crowne Plaza in Ahmedabad City Centre is one of the most luxurious Gujarat destinations for a wedding. The place is so huge that you can easily host all the events of a wedding here, be it the Mehndi, Sangeet, Cocktail or reception party. The centre can host up to 2000 people, making it a viable option for people who have lots of guests to invite. Their in-house team caters to all your needs with the utmost care. The experienced chefs can prepare local and international cuisines with incredible precision.
              With all the services, the per plate cost here is ₹ 1800 and the average budget for 1000 guests would be close to ₹ 20,00,000.
              </p>
            <button class="btn btn-primary" name="venue5" > Select </button>
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
                <img src="./images/gujarat/Narayani Heights/image105.png" class="d-block w-100" alt="..." width="538px" height="358px" width="538px" height="358px" width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/gujarat/Narayani Heights/image21.png" class="d-block w-100" alt="..." width="538px" height="358px" width="538px" height="358px" width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/gujarat/Narayani Heights/image99.png" class="d-block w-100" alt="..." width="538px" height="358px" width="538px" height="358px" width="538px" height="358px">
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
            <h5 class="card-title">Narayani Heights</h5>
            <h6>LOCATION: Dummy</h6>
          </div>
        </div>

        <!-- End Card 6 Front -->

        <!-- Card 6 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Narayani Heights is one of the best Gujarat destinations to host a Gujarati wedding. All the décor at the venue is completely customisable, making it possible for you to personalise the wedding aesthetic as per your wishes.
              There are 109 rooms available with tariffs ranging from ₹ 5,000 to ₹ 20,000. The per-plate cost ranges from ₹ 800 to 5,000. This variety of options in the price range just tells you how nicely the resort caters to the needs of people from different walks of life. Additionally, they offer multiple cuisines from around the world. They also customise the cooking process according to the Jain traditions. All these facilities make it a part of the list of ideal Gujarat destinations for a wedding.
              
              </p>
            <button class="btn btn-primary" name="venue6" > Select </button>
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
                <img src="./images/gujarat/The House of MG/image20.png" class="d-block w-100" alt="..." width="538px" height="358px" width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/gujarat/The House of MG/image57.png" class="d-block w-100" alt="..." width="538px" height="358px" width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/gujarat/The House of MG/image70.png" class="d-block w-100" alt="..." width="538px" height="358px" width="538px" height="358px">
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
            <h5 class="card-title">The House of MG</h5>
            <h6>LOCATION: Lal Darwaja, Ahmedabad</h6>
          </div>
        </div>

        <!-- End Card 7 Front -->

        <!-- Card 7 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">The House of Mangaldas Girdhardas is a heritage hotel that is one of the top Gujarat destinations for weddings with fewer guests. This venue is ideal for an intimate wedding, as they allow their venue to be booked for a party that has as little as 50 guests. This makes it perfect for someone looking for a destination wedding with just a handful of close relatives and friends.
              The hotel specialises in creating décor exactly the way you want, making it just perfect for people. The per-plate cost is around ₹ 900. The hotel has multiple event spaces like a sprawling terrace, banquet hall and the lawn area.
              </p>
            <button class="btn btn-primary" name="venue7" > Select </button>
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
                <img src="./images/gujarat/The Gateway Hotel Athwalines/image117.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/gujarat/The Gateway Hotel Athwalines/image23.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/gujarat/The Gateway Hotel Athwalines/image85.png" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">The Gateway Hotel Athwalines</h5>
            <h6>LOCATION: Ambika Niketan Road, Surat</h6>
          </div>
        </div>

        <!-- End Card 8 Front -->

        <!-- Card 8 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">The Gateway Hotel Athwalines is a luxurious 5-star hotel in Surat. It is perfect for an upscale wedding with famous dignitaries as guests. This 5-star hotel has everything planned down to the T. You do not have to worry about anything at all as the hotel’s in-house team will look after everything. It can host anywhere between 750-1500 people in one go.
              They offer multiple cuisines from India, like Mughlai, North Indian, South Indian, Street food and international cuisines like Italian, Continental and Chinese as well. Their per-plate cost is around ₹ 1,500.
              </p>
            <button class="btn btn-primary" name="venue8" > Select </button>
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
                <img src="./images/gujarat/Green YMCA Banquets & Lawn/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/gujarat/Green YMCA Banquets & Lawn/img2.webp" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/gujarat/Green YMCA Banquets & Lawn/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Green YMCA Banquets & Lawn</h5>
            <h6>LOCATION: Makarba, Ahmedabad</h6>
          </div>
        </div>

        <!-- End Card 9 Front -->

        <!-- Card 9 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Green YMCA Banquets And Lawn, Ahmedabad is taken care of by Green Leaves Management. It is an ideal venue for hosting your grand wedding, reception ceremony, and celebrations or events of any type. Green YMCA Banquets And Lawn, Makarba, Ahmedabad is a very well known place in the locality. So you can imagine how grand your event is going to be. The staff at this venue are professionals and skilled in their respective job, they make sure your function is executed well. YMCA Banquet Hall Ahmedabad serves palatable vegetarian delicacies to their guests. The stunning décor of the venue gives a special touch to your big day.</p>
            <button class="btn btn-primary" name="venue9" > Select </button>
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
                <img src="./images/gujarat/Jade Luxury Banquets, Ahmedabad/img1.webp" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/gujarat/Jade Luxury Banquets, Ahmedabad/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/gujarat/Jade Luxury Banquets, Ahmedabad/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Jade Luxury Banquets</h5>
            <h6>LOCATION: Bodakdev, Ahmedabad</h6>
          </div>
        </div>

        <!-- End Card 10 Front -->

        <!-- Card 10 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Jade Banquets is India’s premier destination to host exquisite events that symbolize grandeur & style. It operates multiple beautifully appointed banquet venues across India, offering world class hospitality and award winning catering to add elegance to your most treasured occasions. Jade Banquets has perfected the ‘Art of Hospitality and enjoys a reputation of providing it’s guests with unique and memorable experiences that are highly regarded by the patrons. With world-class amenities and a responsive team that customizes and designs every part of the service, Jade is one of the most eminent venues in India. It is managed by professionals trained in the highest standards of international hospitality.</p>
            <button class="btn btn-primary" name="venue10" > Select </button>
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

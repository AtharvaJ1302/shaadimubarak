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
  <form action="venuebengal.php" method="post">
  <section id="container">

    <div class="head">
      <h1>BENGAL</h1>
    </div>

    <input type="checkbox" id="card-1" />
    <label class="col-md-5 card-container" for='card-1'>

      <div class="card-flip">
        <!-- Card 1 Front -->
        <div class="card front">
          <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/bengal/Hyatt Regency/image43.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/bengal/Hyatt Regency/image56.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/bengal/Hyatt Regency/image66.png" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Hyatt Regency</h5>
            <h6>LOCATION: Near Salt lake Stadium, Kolkata</h6>

          </div>
        </div>

        <!-- End Card 1 Front -->

        <!-- Card 1 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">The big fat weddings in Kolkata go bigger and fatter in Hyatt Regency. There are two venue areas, one on the poolside, and the other on the palatial end, called Regency Ballroom. The Poolside is an open-air venue featuring the largest landscape pool of the city.
              The pillarless Regency Ballroom on the other hand boasts of an open terrace. Lightings and decor are adapted to match themes as demanded by the client. Hyatt Regency tops the list of best wedding venues in Kolkata, giving cut-throat competition to others.
              </p>
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
                <img src="./images/bengal/Taj Bengal/image12.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/bengal/Taj Bengal/image129.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/bengal/Taj Bengal/image96.png" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Taj Bengal</h5>
            <h6>LOCATION: Alipore, Kolkata</h6>


          </div>
        </div>

        <!-- End Card 2 Front -->

        <!-- Card 2 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Taj Bengal has more than six wedding venues in Kolkata, namely- Portico, Oriental, Terrace Garden, Mandarin, Crystal Hall, and banquet lawns. The capacity ranges between 25 to 700 guests, and each of the venue areas have their own distinct features and decor.
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
                <img src="./images/bengal/ITC Sonar/image1.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/bengal/ITC Sonar/image37.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/bengal/ITC Sonar/image53.png" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">ITC Sonar</h5>
            <h6>LOCATION: Tangra, Kolkata,</h6>

          </div>
        </div>

        <!-- End Card 3 Front -->

        <!-- Card 3 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">The ITC Sonar features in this list of best wedding venues in Kolkata no just for the decor and services, but because of its enviable location. Away from hustle and bustle of the city, it hosts the most lavish wedding of Kolkata. The Pala (indoor venue area) steals the show away with its soft lighting and candles. The outdoor venue, called Sundarban Lawns is a lovely landscape garden suitable for an open air affair.
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
                <img src="./images/bengal/The Oberoi Grand Hotel/image38.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/bengal/The Oberoi Grand Hotel/image50.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/bengal/The Oberoi Grand Hotel/image93.png" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">The Oberoi Grand Hotel</h5>
            <h6>LOCATION: Taltala, Kolkata</h6>
          </div>
        </div>

        <!-- End Card 4 Front -->

        <!-- Card 4 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">The Oberoi Grand Hotel has hosted luxe parties for erstwhile kings and British Bureaucrats in the olden days. Even today its grandeur as an elite wedding venue hasn’t faded! It is among the best wedding venues in Kolkata having city’s largest ballroom spanning over 19,000 sq ft of area. It is also one of the best hotels in Kolkata.</p>
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
                <img src="./images/bengal/P C Chandra Garden/image27.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/bengal/P C Chandra Garden/image60.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/bengal/P C Chandra Garden/image80.png" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">P C Chandra Garden</h5>
            <h6>LOCATION: Eastern Metropolitan Bypass, Kolkata</h6>
          </div>
        </div>

        <!-- End Card 5 Front -->

        <!-- Card 5 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">One of most lavish and best wedding venues in Kolkata, PC Chandra Garden has three venue areas with both indoor and outdoor seating. The halls can host up to 850 guests, while the lawns have a capacity of 2100 guests. Catering and service are both impeccable, just like the decor that’ll simply blow your mind.</p>
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
                <img src="./images/bengal/Vedic Village/image28.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/bengal/Vedic Village/image63.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/bengal/Vedic Village/image92.png" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Vedic Village</h5>
            <h6>LOCATION: Newtown, Kolkata</h6>
          </div>
        </div>

        <!-- End Card 6 Front -->

        <!-- Card 6 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">The Vedic Village is always listed among the most extravagant wedding places in Kolkata. It is also one of the most luxurious villas in Kolkata. The authorities take pride in being known as masters of exclusive themes such as big fat organic weddings, outdoor adventure weddings, exotic traditional weddings, and chic country weddings; and their wedding venues serve to these very well.
              One of the best wedding resorts in Kolkata, the Vedic Village alongside four venue areas provides accommodation that’s backed up with dining, spa, sports and other world-class facilities.
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
                <img src="./images/bengal/Club Verde Vista/image16.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/bengal/Club Verde Vista/image82.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/bengal/Club Verde Vista/image95.png" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Club Verde Vista</h5>
            <h6>LOCATION: Upohar, Kolkata</h6>
          </div>
        </div>

        <!-- End Card 7 Front -->

        <!-- Card 7 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Pumped up to make D-day the most memorable day of your life, Club Verde Vista features among the top open air wedding venues in Kolkata. There are both indoor and outdoor venues, with in-house decorators and caterers. With the venue, you can also consider a stay for guests as you get rooms (4 rooms available) for an average cost of INR 4,000 per room (above the venue charges).</p>
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
                <img src="./images/bengal/Mangalam Banquets/image15.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/bengal/Mangalam Banquets/image19.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/bengal/Mangalam Banquets/image33.png" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title"> Mangalam Banquets</h5>
            <h6>LOCATION: Gobra, Kolkata</h6>
          </div>
        </div>

        <!-- End Card 8 Front -->

        <!-- Card 8 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">One of the excellent yet somewhat cheap banquet halls in Kolkata for weddings, Mangalam Banquets is among the mid-sized wedding halls in South Kolkata that can host up to 300 guests. There’s an open road parking available with complimentary valet. If it is a comparatively small affair, this is the best choice for your special day.</p>
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
                <img src="./images/bengal/Royal Bengal Room/image25.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/bengal/Royal Bengal Room/image31.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/bengal/Royal Bengal Room/image91.png" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Royal Bengal Room</h5>
            <h6>LOCATION: Bidhannagar, Kolkata</h6>
          </div>
        </div>

        <!-- End Card 9 Front -->

        <!-- Card 9 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Whatever the theme be for your wedding, all you need to do is to tell the decorators and you can have it. Not kidding, these people are the best in business and the Royal Bengal Room is beautiful and very spacious and somewhere where you should plan your dream wedding at. If your tastes are subtle then this is the place for you.</p>
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
                <img src="./images/bengal/Smriti Banquets/image106.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/bengal/Smriti Banquets/image7.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/bengal/Smriti Banquets/image74.png" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Smriti Banquets</h5>
            <h6>LOCATION: Newtown, Kolkata</h6>
          </div>
        </div>

        <!-- End Card 10 Front -->

        <!-- Card 10 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">If you wish to serve alcohol to guests because you are a good host then Smriti Banquets is your best bet and offers the best solution to all your wedding related queries and doubts. Be it decor, food or anything else this wedding venue in Kolkata does everything right and is tucked away from the bustling city, offering quaint settings for your big day.
            </p>
            <button class="btn btn-primary" name="venue10" > Select </button>
          </div>
        </div>
        <!-- End Card 10 Back -->
      </div>
    </label>
    <!-- End Card 10 -->
  </section>
  </form>
</body>

</html>

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
  <form action="venuedelhi" method="post">
  <section id="container">

    <div class="head">
      <h1>DELHI</h1>
    </div>

    <input type="checkbox" id="card-1" />
    <label class="col-md-5 card-container" for='card-1'>

      <div class="card-flip">
        <!-- Card 1 Front -->
        <div class="card front">
          <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/Delhi/Calista Resort/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="images/Delhi/Calista Resort/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="images/Delhi/Calista Resort/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Calista Resort</h5>
            <h6>LOCATION: Kapashera - Samalkha - Rajokri, East Delhi</h6>


          </div>
        </div>

        <!-- End Card 1 Front -->

        <!-- Card 1 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center; margin-bottom: 5.1rem;">
              Calista Resort is located in Kapashera, South Delhi, and it is one of the most luxurious wedding venues in
              the city. Its classy and elegant architecture combined with professional personnel will help you feel like
              royalty on your big day. It has well-maintained and luxurious accommodation and has a professional
              hospitality team to care for your every need. At Calista Resort, you can celebrate your big event, enhance
              your well-being, and enter your new journey relaxed and rejuvenated.
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
                <img src="./images/Delhi/Veda Farms/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Delhi/Veda Farms/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Delhi/Veda Farms/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Veda Farms</h5>
            <h6>LOCATION: 54, Bijwasan Rd, Kapas Hera Extension, New Delhi</h6>

          </div>
        </div>

        <!-- End Card 2 Front -->

        <!-- Card 2 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">
              Veda Farms is a famous wedding venue based in Bijwasan, Delhi. The platform is well-equipped with all the
              latest facilities and services to give you the excellent wedding experience of your lives. Planning a
              perfect wedding involves choosing the right venue as per the suitability of your occasion and its
              approachability and budget. Therefore if you are looking for a place that offers you royal hospitality and
              excellent services, then Veda Farms is one of the ideal options. Located in the city, it is a 10 acres
              perfect destination with exquisite decor, suitable for hosting lavish weddings that last for a lifetime.
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
                <img src="./images/Delhi/Amrai Farms/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Delhi/Amrai Farms/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Delhi/Amrai Farms/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Amrai Farms</h5>
            <h6>LOCATION: Kapashera - Samalkha - Rajokri, South Delhi</h6>
          </div>
        </div>

        <!-- End Card 3 Front -->

        <!-- Card 3 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">
              Amrai Farms is a venue located in Kapashera, Delhi and is the one to choose for weddings, When
              we talk about the wedding arrangement and planning, the first thing that pops in our minds is the venue as
              it is the key element of any wedding functions. It sets the entire background for the ceremonies and even
              the background for the photos and videos. If you are looking for a good venue to host any of your nuptial
              ceremonies, then Amrai Farms is the choice that you should definitely make. Their staff will ensure to
              make the wedding memorable for you and your guests.
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
                <img src="./images/Delhi/Solitaire Garden and Banquet/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Delhi/Solitaire Garden and Banquet/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Delhi/Solitaire Garden and Banquet/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Solitaire Garden and Banquet</h5>
            <h6>LOCATION: Aruna Vartun Road ,North-West Delhi</h6>
          </div>
        </div>

        <!-- End Card 4 Front -->

        <!-- Card 4 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">
              Solitaire Garden and Banquet is a venue, where you can host and organise any and every special celebration
              in your life and be assured that they would be one of a kind and the most beautiful occasions in your
              life. Choosing the right kind of venue is one of the most significant decisions that a couple takes as
              they plan the wedding of their dreams and hope to live all of their desires and aspirations associated
              with it and hope it will be the most cherished and wonderful celebration of their lives. To make your
              function seems more exciting and active, they provide truckloads for facilities like essential lighting,
              electricity & backup, valet parking and a bridal room.
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
                <img src="./images/Delhi/Araliayas Resort/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Delhi/Araliayas Resort/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Delhi/Araliayas Resort/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Araliayas Resort </h5>
            <h6>LOCATION: Ram-Krishna , South-East Delhi</h6>
          </div>
        </div>

        <!-- End Card 5 Front -->

        <!-- Card 5 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">
              Araliayas Resort offers you with a great venue space to host and organize your special occasions like
              wedding ceremonies and related functions, providing a serene atmosphere, a peaceful ambience and a quiet
              demeanour of the lush green landscape. It is believed to be one of the most culturally rich and romantic
              place where anyone would desire of a destination wedding.
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
                <img src="./images/Delhi/Ramada Resort/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Delhi/Ramada Resort/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Delhi/Ramada Resort/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Ramada Resort</h5>
            <h6>LOCATION: Central Delhi</h6>
          </div>
        </div>

        <!-- End Card 6 Front -->

        <!-- Card 6 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">
              Central is the most wanted destination for having a blissful and romantic wedding experience and Ramada
              Resort & Spa offers you with the most scenic and beautiful suites and resorts location to organize your
              marriage functions. The management and staff of Ramada Resort & Spa make sure that you and your guests
              have a great hospitality experience.
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
                <img src="./images/Delhi/Yadu Greens/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Delhi/Yadu Greens/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Delhi/Yadu Greens/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Yadu Greens</h5>
            <h6>LOCATION: GT Karnal Road - Alipur, North Delhi</h6>
          </div>
        </div>

        <!-- End Card 7 Front -->

        <!-- Card 7 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">
              Yadu Greens is a stunning farmhouse on the GT Karnal Road of Delhi. This magnificent property offers its
              discerning visitors a unique opportunity to celebrate their most special occasions with élan and ease.
              This wedding venue offers multiple Stunning wedding venues with Exquisite Décor & Ambience combined with
              Impeccable Hospitality and Lavish Catering. The banquets: Pratishtha, Yuvraj and Night Club-themed BLING,
              are amongst Delhi NCR’s most upmarket and grand wedding venues. It is the only venue with Exclusive entry
              from NH-1 (Left side from Delhi to Karnal).
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
                <img src="./images/Delhi/Mohan Vilaas/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Delhi/Mohan Vilaas/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Delhi/Mohan Vilaas/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Mohan Vilaas</h5>
            <h6>LOCATION: </h6>
          </div>
        </div>

        <!-- End Card 8 Front -->

        <!-- Card 8 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">
              Mohan Vilaas, situated in the busiest wedding destination of G.T. Karnal Road, serves as an ideal venue to
              host any of your special events starting from the pre-wedding ceremonies to your grand wedding function.
              The venue is easily accessible from all parts of Delhi NCR and has exquisite interiors to attract the
              attention of all your guests. Mohan Vilaas is your destination for a wedding event that will be both
              starry and filled with positive vibes for you to cherish it for the rest of your lives with your partner.
              Offering the pinnacle of luxury and comfort, Mohan Vilaas is a popular choice for hosting grand functions.
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
                <img src="./images/Delhi/lden Ring Motel And Resorts/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Delhi/lden Ring Motel And Resorts/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Delhi/lden Ring Motel And Resorts/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Elden Ring Motel And Resorts</h5>
            <h6>LOCATION: GT Karnal Road - Alipur, North Delhi</h6>
          </div>
        </div>

        <!-- End Card 9 Front -->

        <!-- Card 9 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">
              Golden Ring Motel And Resorts is a magnificent venue for hosting a grand event located in the heart of
              North Delhi. It has several spaces for indoor and outdoor ceremonies and features an amiable staff to
              assist you with everything related to arranging a successful wedding. Whether a pre-wedding event or grand
              reception party, there is no other place more suitable than Golden Ring Motel And Resorts. Be it any
              pre-wedding ceremony, wedding ceremony, or post-wedding ceremony, you can hold these ceremonies
              comfortably here and be assured that your wedding will be a memorable one.
            </p>
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
                <img src="./images/Delhi/Hilltop Greens/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Delhi/Hilltop Greens/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Delhi/Hilltop Greens/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Hilltop Greens</h5>
            <h6>LOCATION: Suraj Kund, Faridabad, Faridabad</h6>
          </div>
        </div>

        <!-- End Card 10 Front -->

        <!-- Card 10 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">
              Hilltop Greens is a wedding lawn farmhouse located in Faridabad. It's a blissful experience to find your
              soul-mate finally, and to celebrate this auspicious union, we at Hilltop Greens provide the perfect choice
              of spacious venues along with complete planning of even the minutest of details. The widespread venues
              ranging from the luxurious Banquet Hall to versatile outdoor party lawns cater to minor parties and grand
              weddings. They are designed in the most contemporary style combined with traditional aesthetics and
              elegance to lend the perfect ambience for your dream celebration.
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
<?php include("./footer.php"); ?>
</body>

<?php include("./progress-wrap.php"); ?>

<?php include("./javascript.php"); ?>

</html>
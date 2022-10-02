<?php
session_start(); 
//include("session_check.php")
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
    width: 30rem;
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
  label{
    margin-top: 20px;
    margin-bottom: 20px;
  }
</style>
</head>

<body>

<?php include("./header.php"); ?>
  <form action="venuerajasthan.php" method="post">
  <section id="container">
    <div class="head">
      <h1>RAJASTHAN</h1>
    </div>

    <input type="checkbox" id="card-1" />
    <label class="col-md-5 card-container" for='card-1'>

      <div class="card-flip">
        <!-- Card 1 Front -->
        <div class="card front">
          <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/rajasthan/Umaid Bhawan Palace, Jodhpur/image121.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/rajasthan/Umaid Bhawan Palace, Jodhpur/image5.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/rajasthan/Umaid Bhawan Palace, Jodhpur/image87.png" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Umaid Bhawan Palace</h5>
            <h6>LOCATION: Cantt Area, Jodhpur</h6>

          </div>
        </div>

        <!-- End Card 1 Front -->

        <!-- Card 1 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Home of Jodhpur’s erstwhile royal family and currently the world’s sixth-largest private residence, the Umaid Bhawan Palace affords views of the historical Blue City, vast dunes, as well as the nearby Mehrangarh Fort. Known for its rich heritage, yellow sandstone architecture, and luxurious amenities, this property managed by the Taj Group, has become a hot spot for celebrity weddings such as that of Priyanka Chopra Jonas and Nick Jonas. Wedding designer Ashish Bohra, of Perfexion Events, shares, “Strolling through the lush, landscaped Baradari Lawns with dancing peacocks at Umaid Bhawan is a magical experience, and the property is perfect for those who have always envisioned a fairy tale wedding.”</p>
            <div class="price" style="top: 5.5rem;">$500</div>
           <button class="btn-state btn-primary" name="venue1" style="top: 3.5rem;">Select</button>
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
                <img src="./images/rajasthan/ITC Rajputana, Jaipur/image115.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/rajasthan/ITC Rajputana, Jaipur/image14.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/rajasthan/ITC Rajputana, Jaipur/image68.png" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">ITC Rajputana</h5>
            <h6>LOCATION: Dev Nagar, Jodhpur</h6>


          </div>
        </div>

        <!-- End Card 2 Front -->

        <!-- Card 2 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">ITC Rajputana, an exotic and stylish red-brick heritage hotel in the capital city of Rajasthan, is symbolic of regal hospitality that harks back to a glorious past. The opulent hotel has many versatile venues, and the space can be further expanded for a large gathering by using a courtyard with the separate entrance. Siddhartha Chaturvedi, of Weddings by Event Crafter, shares, “ITC Rajputana has a classic and authentic appeal which attracts a lot of millennial couples wanting to host a destination wedding in Jaipur. It has adequate rooms to accommodate large wedding groups.”
            </p>
            <div class="price" style="top: 8.5rem;">$500</div>
            <button class="btn-state btn-primary" name="venue2" style="top: 6.5rem;">Select</button>
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
                <img src="./images/rajasthan/The Ummed, Jodhpur/image103.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/rajasthan/The Ummed, Jodhpur/image52.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/rajasthan/The Ummed, Jodhpur/image103.png" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">The Ummed</h5>
            <h6>LOCATION: Prem Nagar, Jodhpur</h6>

          </div>
        </div>

        <!-- End Card 3 Front -->

        <!-- Card 3 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">The Ummed Jodhpur, a Marwar palace with Rajasthani architectural elements, is tucked amidst acres of gardens. Its low-rise structures surround the expansive and impressive courtyard. From the palatial driveway to the luxurious rooms, everything makes guests feel like royalty. Wedding planner Ashish Bohra, of Perfexion Events, shares, “This property is a kaleidoscope of gracious facets – an exclusive porch, pathways for baraat processions, long private driveways, open spaces, and indoor venues. These make it perfect for hosting special occasions with luxury and grace, both on a grand or intimate scale.”</p>
            <div class="price" style="top: 7rem;">$500</div>
            <button class="btn-state btn-primary" name="venue3" style="top: 5rem;">Select</button>
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
                <img src="./images/rajasthan/Indana Hotels, Jodhpur/image17.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/rajasthan/Indana Hotels, Jodhpur/image47.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/rajasthan/Indana Hotels, Jodhpur/image67.png" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Indana Hotels</h5>
            <h6>LOCATION: Shikargarh, Jodhpur</h6>
          </div>
        </div>

        <!-- End Card 4 Front -->

        <!-- Card 4 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">The regal heritage and history of Jodhpur and Jaipur comes alive in Indana Hotels’ architecture and interiors. Set against the stunning backdrops of heritage, Indana Palace Jodhpur is a magnificent structure that showcases nuances of the Royal Marwar heritage with exquisite columns, intricate jaali work, regal arches, domes, and wide-open courtyards. Indana Palace Jaipur, on the other hand, welcomes you into the world of Maharajas and Maharanis of yore with its grand stone entry porch and exquisite hand-crafted doorway.</p>
            <div class="price" style="top: 8.5rem;">$500</div>
            <button class="btn-state btn-primary" name="venue4" style="top: 6.5rem;">Select</button>
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
                <img src="./images/rajasthan/Taj Aravali Resort, Udaipur/image119.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/rajasthan/Taj Aravali Resort, Udaipur/image3.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/rajasthan/Taj Aravali Resort, Udaipur/image61.png" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Taj Aravali Resort</h5>
            <h6>LOCATION: Forest Chowki, Bujra</h6>
          </div>
        </div>

        <!-- End Card 5 Front -->

        <!-- Card 5 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Spread across gently rolling slopes, the Taj Aravali Resort & Spa, Udaipur, is a sprawling property in the foothills of the lush Aravali mountain range. Flanked by green landscaped spaces, this property showcases traditional Rajasthani art and design in enchanting ways. Luxurious villas comprising single-pole desert tents offer interesting local decor elements such as the ‘gokhra,’ (a low seating area by the window), and furnishings inspired by Mewar’s world-class equestrian heritage.</p>
            <div class="price" style="top: 10.5rem;">$500</div>
            <button class="btn-state btn-primary" name="venue5" style="top: 8rem;">Select</button>
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
                <img src="./images/rajasthan/Welcomhotel Khimsar Fort and Dunes/image113.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/rajasthan/Welcomhotel Khimsar Fort and Dunes/image29.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/rajasthan/Welcomhotel Khimsar Fort and Dunes/image64.png" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Welcom hotel Khimsar Fort and Dunes</h5>
            <h6>LOCATION: Khimsar, Rajasthan</h6>
          </div>
        </div>

        <!-- End Card 6 Front -->

        <!-- Card 6 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Nestled on the edge of the Thar Desert lies a 16th-century fort with imposing walls and a majestic entrance. The Welcomhotel Khimsar Fort and Dunes is spread across 11 acres, and offers the option of luxe tents alongside well-furnished rooms. Wedding planner Niyati Khazanchi, of Desert Pearl Entertainment, shares, “With a year-round outdoor swimming pool, terrace, free parking, and on-site restaurant, this property provides both comfort and convenience to guests and visitors. Every room offers stunning views of the desert.”</p>
            <div class="price" style="top: 8.5rem;">$500</div>
<button class="btn-state btn-primary" name="venue6" style="top: 6.5rem;">Select</button>          
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
                <img src="./images/rajasthan/Rambagh Palace, Jaipur/image22.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/rajasthan/Rambagh Palace, Jaipur/image45.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/rajasthan/Rambagh Palace, Jaipur/image81.png" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Rambagh Palace</h5>
            <h6>LOCATION: Bhawani Singh Rd, Jaipur</h6>
          </div>
        </div>

        <!-- End Card 7 Front -->

        <!-- Card 7 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">After years of being the Maharaja of Jaipur’s home, Rambagh Palace was the first palace to be converted into a heritage hotel in India. It is extravagantly decorated with hand-carved marble ‘jalis,’ sandstone balustrades, ‘chattris,’ and elaborate Mughal Gardens. Anant Khandelwal and Kartika Sharma of Indian Wedding Planners share, “This regal architectural marvel truly epitomizes royal hospitality. Managed by the Taj Group, Rambagh Palace offers regality and modernity at the same time, and is a highly sought after property for couples looking for a royal wedding experience.”</p>
            <div class="price" style="top: 7rem;">$500</div>
            <button class="btn-state btn-primary" name="venue7" style="top: 5rem;">Select</button>
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
                <img src="./images/rajasthan/Udai Kothi, Udaipur/image124.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/rajasthan/Udai Kothi, Udaipur/image128.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/rajasthan/Udai Kothi, Udaipur/image41.png" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Udai Kothi</h5>
            <h6>LOCATION: Pichola, Udaipur</h6>
          </div>
        </div>

        <!-- End Card 8 Front -->

        <!-- Card 8 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">A stunning rooftop pool surrounded by white arched marble pillars is just one of the highlights of the heritage boutique hotel Udai Kothi Udaipur. It lies a short distance from Lake Pichola, and offers guests 21st-century comforts coupled with an old-world charm. Awarded ‘The Best Wedding Venue In Rajasthan,’ by New York Times magazine, and the ‘Best Boutique Hotel In India,’ by National Geographic Traveller, this property guarantees memorable experiences at any event held here.
            <div class="price" style="top: 10rem;">$500</div>
            </p>
            <button class="btn-state btn-primary" name="venue8" style="top: 7rem;">Select</button>
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
                <img src="./images/rajasthan/Shahpura House, Jaipur/img1.webp" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/rajasthan/Shahpura House, Jaipur/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/rajasthan/Shahpura House, Jaipur/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Shahpura House</h5>
            <h6>LOCATION: Bani Park, Jaipur</h6>
          </div>
        </div>

        <!-- End Card 9 Front -->

        <!-- Card 9 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">If you want to get married amidst the hustle and bustle of Jaipur city, there isn’t a better venue than Shahpura House. Located just 4 km away from the famous landmark Hawa Mahal, the hotel is actually a palace inherited from the royals of Shahpura and preserved intact with world-class facilities. The insides are decorated with grand domes and frescoes and the outside offers the majestic view of the Aravalli hills. So, making a perfect backdrop for your indoor or outdoor wedding setup.</p>
            <div class="price" style="top: 10rem;">$500</div>
            <button class="btn-state btn-primary" name="venue9" style="top: 8rem;">Select</button>
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
                <img src="./images/rajasthan/Shakun Hotels & Resorts, Jaipur/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/rajasthan/Shakun Hotels & Resorts, Jaipur/img2.jpeg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/rajasthan/Shakun Hotels & Resorts, Jaipur/img3.jpeg" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Shakun Hotels & Resorts</h5>
            <h6>LOCATION: Ashok Nagar, Jaipur</h6>
          </div>
        </div>

        <!-- End Card 10 Front -->

        <!-- Card 10 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">A newly developed property in Jaipur’s posh colony C-Scheme, the hotel is all about offering a luxurious, comfortable and memorable experience to their guests. I have personally been to this hotel for wedding and roka events and can vouch for the superb event halls inside their premises that speak volumes of the grandeur they provide.</p>
            <div class="price" style="top: 13rem;">$500</div>
            <button class="btn-state btn-primary" name="venue10" style="top: 11rem;">Select</button>
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

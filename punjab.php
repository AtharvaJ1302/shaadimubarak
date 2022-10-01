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
    <link rel="stylesheet" href="./assets/css/states.css">
  <style>
  .back{
    margin-left: -130px;
  }

  .btn{
    position: relative;
    left: 14rem;
  }

  .price{
    position: relative;
    right: 15rem;
  }

  .front{
    height: 25rem;
  }
</style>
</head>

<body>

<?php include("./header.php"); ?>
  <form action="venuepunjab.php" method="post">
  <section id="container">

    <div class="head">
      <h1>PUNJAB</h1>
    </div>

    <input type="checkbox" id="card-1" />
    <label class="col-md-5 card-container" for='card-1'>

      <div class="card-flip">
        <!-- Card 1 Front -->
        <div class="card front">
          <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/punjab/Stallone Manor, Ludhiana/image35.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/punjab/Stallone Manor, Ludhiana/image46.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/punjab/Stallone Manor, Ludhiana/image48.png" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Stallone Manor</h5>
            <h6>LOCATION: Pakhowal Road, Ludhiana</h6>



          </div>
        </div>

        <!-- End Card 1 Front -->

        <!-- Card 1 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">This is one of the largest banquet halls in the city with a 200 ft x 130 ft AC hall that matches the grandeur and grace of the Roman. They also have a spacious 200 ft x 130 ft lawn outside with the beautifully lit cascading fountain that will add more charisma to the decor. The types of cuisines on the offer are Mughlai, Avadhi, Punjabi Frontier, Marwari, Kashmiri, Hyderabadi, Chinese, Thai, Mexican, Lebanese, Italian, Mediterranean, and more.</p>
            <div class="price" style="top: 10rem;">$500</div>
            <button class="btn btn-primary" name="venue1" style="top: 8rem;">Select</button>
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
                <img src="./images/punjab/Grand Wedding Villa, Ludhiana/image100.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/punjab/Grand Wedding Villa, Ludhiana/image111.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/punjab/Grand Wedding Villa, Ludhiana/image90.png" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Grand Wedding Villa </h5>
            <h6>LOCATION: Pakhowal Road, Ludhiana</h6>


          </div>
        </div>

        <!-- End Card 2 Front -->

        <!-- Card 2 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">As the name suggests, Grand Wedding Villa in Ludhiana is one of the prime choices for hosting a wedding in Punjab. This famous hotel is designed to host functions like wedding, ring ceremony and reception with large gatherings. The fully air-conditioned banquet hall can easily accommodate hundreds of guests. The villa has furnished rooms, kitchens along with a reception hall, and a marvelous lobby. The hotel has trained chefs that serve finger-licking cuisine to their guests.</p>
            <div class="price" style="top: 10rem;">$500</div>
            <button class="btn btn-primary" name="venue2" style="top: 8rem;">Select</button>
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
                <img src="./images/punjab/Bath Castle, Ludhiana/image18.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/punjab/Bath Castle, Ludhiana/image24.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/punjab/Bath Castle, Ludhiana/image97.png" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Bath Castle</h5>
            <h6>LOCATION: Pakhowal Road, Ludhiana</h6>

          </div>
        </div>

        <!-- End Card 3 Front -->

        <!-- Card 3 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Bath Castle is one of the top wedding venues in Punjab. You will feel like you have reached your dream destination with the entrance that highlights beautiful fountains and a grand castle structure. It is spread over 7 acres of luxurious land with an impressive exterior as well as grandiose interior and a hall spread over 22,000 sq ft. that feels like you have entered a Mughal Fort with a modern touch. They provide you in-house catering, experienced & well-groomed staff & huge parking space.</p>
            <div class="price" style="top: 10rem;">$500</div>
            <button class="btn btn-primary" name="venue3" style="top: 8rem;">Select</button>
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
                <img src="./images/punjab/Hyatt Regency, Chandigarh/image118.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/punjab/Hyatt Regency, Chandigarh/image55.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/punjab/Hyatt Regency, Chandigarh/image62.png" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Hyatt Regency</h5>
            <h6>LOCATION: Business Park Phase 1, Chandigarh</h6>
          </div>
        </div>

        <!-- End Card 4 Front -->

        <!-- Card 4 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Located at the heart of the tri-city of Chandigarh, it is easily accessible from the other two key areas, Mohali and Panchkula, and 16 kilometers away from the Chandigarh International Airport and 4 kilometers from the Chandigarh Railway Station. The 5-star hotel wows you with its spacious and luxurious spaces, the fascinating interiors of which is inspired by French architect Le Corbusier with a brise-soleil façadeour hotel with rooms of area 36 to 200 square meters. They offer you Creative menus, imaginative settings, beautifully designed wedding locations, and professional wedding services.</p>
            <div class="price" style="top: 7rem;">$500</div>
            <button class="btn btn-primary" name="venue4" style="top: 5rem;">Select</button>
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
                <img src="./images/punjab/JW Marriott, Chandigarh/image110.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/punjab/JW Marriott, Chandigarh/image125.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/punjab/JW Marriott, Chandigarh/image42.png" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title"> JW Marriott</h5>
            <h6>LOCATION: Dakshin Marg, Chandigarh</h6>
          </div>
        </div>

        <!-- End Card 5 Front -->

        <!-- Card 5 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Their splendor Ballroom having a space of 8,407 sq ft. glows with radiance and is a perfect venue for your fairy tale wedding. With lush green lawns, that can accommodate up to 1,000 guests and situated in the city’s business district, the hotel greets you with refined luxury and a modern sense of style. Their wedding planners will make sure that you get the best day of your life with the delicious wedding menu and wedding hosts.</p>
            <div class="price" style="top: 11.5rem;">$500</div>
            <button class="btn btn-primary" name="venue5" style="top: 9.5rem;">Select</button>
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
                <img src="./images/punjab/Vivanta by Taj, Chandigarh/image127.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/punjab/Vivanta by Taj, Chandigarh/image51.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/punjab/Vivanta by Taj, Chandigarh/image89.png" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Vivanta by Taj</h5>
            <h6>LOCATION: Block No. 9 Sector 17, Chandigarh</h6>
          </div>
        </div>

        <!-- End Card 6 Front -->

        <!-- Card 6 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Vivanta by Taj is one of the top wedding venues in Punjab.They offer you a couple of marvelous and lush spaces for your wedding to choose from. The ballroom I with an area of 1664.00 sq. ft. has also an additional pre-function space, ballroom II has the area of 2808.00 sq. ft. with grand green lawns attached to its side. The Capitol venue has a space of 552.75 sq. ft. and The Ballroom Annexe is ideal for your small intimate ceremonies. The best part is that they have an extravagant terrace lawn so you can get married under the blanket of stars.</p>
            <div class="price" style="top: 8.5rem;">$500</div>
            <button class="btn btn-primary" name="venue6" style="top: 6.5rem;">Select</button>
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
                <img src="./images/punjab/Hyatt, Amritsar/image11.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/punjab/Hyatt, Amritsar/image112.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/punjab/Hyatt, Amritsar/image75.png" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title"> Hyatt</h5>
            <h6>LOCATION: G. T. Road, Amritsar</h6>
          </div>
        </div>

        <!-- End Card 7 Front -->

        <!-- Card 7 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">What could be better than having your wedding venue next to the Golden Temple? The hotel is just 30 minutes from the Guru Ram Das International Airport and holds the largest rooms inventory with 248 elegant guestrooms including 10 suites and a Presidential Suite. Their indoor banqueting with over 11647 sq ft space has the most elegant interiors and the mesmerizing outdoor venue Tented gardens can hold a grand wedding. They have a team of world-class wedding specialists to make your wedding just like how you want.</p>
            <div class="price" style="top: 8rem;">$500</div>
            <button class="btn btn-primary" name="venue7" style="top: 6rem;">Select</button>
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
                <img src="./images/punjab/Kingsville Resort, Ludhiana/image130.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/punjab/Kingsville Resort, Ludhiana/image59.png" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/punjab/Kingsville Resort, Ludhiana/image84.png" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Kingsville Resort</h5>
            <h6>LOCATION: Ferozepur Road Ludhiana</h6>
          </div>
        </div>

        <!-- End Card 8 Front -->

        <!-- Card 8 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">A five-star wedding venue in Punjab, Kingsville Resorts is known for providing premium facilities to their guests. The resort is surrounded with lush green lawn which can be a great option for hosting mehendi or haldi ceremony. The resort consists of fully air-conditioned hall, parking lot and a marriage hall. Kingsville Resort aims at providing with the best of their services. When it comes to cuisine, they offer options including Indian, Chinese, Continental, Italian, Mexican, Mangolian and so much more. The staff take pleasure in serving your guest with the best of everything</p>
            <div class="price" style="top: 8.5rem;">$500</div>
            <button class="btn btn-primary" name="venue8" style="top: 6rem;">Select</button>
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
                <img src="./images/punjab/Marrievilla Resorts/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/punjab/Marrievilla Resorts/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/punjab/Marrievilla Resorts/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Marrievilla Resorts</h5>
            <h6>LOCATION: Gill road, Ludhiana</h6>
          </div>
        </div>

        <!-- End Card 9 Front -->

        <!-- Card 9 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">MarrieVilla Resorts, Ferozepur, Ludhiana is a gorgeous venue to celebrate the victory of your love with your better half. This venue is located on Ferozepur Road near the Pandori Play Ground which makes it convenient for all to reach there by either private and public transportation modes. MarrieVilla Resorts Ludhiana know that when it comes to weddings, you expect nothing but perfection. Therefore, It has a sprawling lawn and multiple banquet halls of contrasting sizes to take care of all your requirements. The lawn at Grand MarrieVilla Resorts is simply spectacular and can hold a huge crowd of guests, so you don't need to worry about shortening the guest list.</p>
            <div class="price" style="top: 5.5rem;">$500</div>
            <button class="btn btn-primary" name="venue9" style="top: 3rem;">Select</button>
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
                <img src="./images/punjab/B.R. Resorts/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/punjab/B.R. Resorts/img2.jpeg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/punjab/B.R. Resorts/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">B.R. Resorts</h5>
            <h6>LOCATION: Gill road, Ludhiana</h6>
          </div>
        </div>

        <!-- End Card 10 Front -->

        <!-- Card 10 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">BR Resorts, Amritsar is a farmhouse located on the Chheharta Bypass of the city. When you plan a lifetime event, like your wedding, you need to be considerate of a lot of things and choosing the venue is one of the main things to organise the perfect wedding. If you are looking for one such venue which can fulfil all your needs for the functions, then BR Resorts, Amritsar is the one-stop destination for you. Offering a plethora of services and amenities, this venue makes for an exemplary choice for any of your nuptial ceremonies.</p>
            <div class="price" style="top: 8.5rem;">$500</div>
            <button class="btn btn-primary" name="venue10" style="top: 6rem;">Select</button>
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
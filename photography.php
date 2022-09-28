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
  <form action="photoback.php" method="post">
  <section id="container">

    <div class="head">
      <h1>DESTINATIONS</h1>
    </div>

    <input type="checkbox" id="card-1" />
    <label class="col-md-5 card-container" for='card-1'>

      <div class="card-flip">
        <!-- Card 1 Front -->
        <div class="card front">
          <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./Photography/90'sBlack/img1.jpg" class="d-block w-100" alt="..." height="564" width="846">
              </div>
              <div class="carousel-item">
                <img src="./Photography/90'sBlack/img2.jpg" class="d-block w-100" alt="..." height="564" width="846">
              </div>
              <div class="carousel-item">
                <img src="./Photography/90'sBlack/img3.jpg" class="d-block w-100" alt="..." height="564" width="846">
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
            <h5 class="card-title">90'sBlack</h5>



          </div>
        </div>

        <!-- End Card 1 Front -->

        <!-- Card 1 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Pariatur veritatis optio,
              quasi aliquid quas fuga unde modi tempora voluptatum ullam officia a similique laudantium molestiae cumque
              velit eos maiores fugiat quaerat consequatur quibusdam quod facere. Quod necessitatibus nulla
              reprehenderit amet?</p>
              <button class="btn btn-primary" name="photo1" > Select </button>
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
                <img src="./Photography/Banga Studio/img1.jpg" class="d-block w-100" alt="..." height="564" width="846">
              </div>
              <div class="carousel-item">
                <img src="./Photography/Banga Studio/img2.jpg" class="d-block w-100" alt="..." height="564" width="846">
              </div>
              <div class="carousel-item">
                <img src="./Photography/Banga Studio/img3.jpg" class="d-block w-100" alt="..." height="564" width="846">
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
            <h5 class="card-title">Banga Studio</h5>


          </div>
        </div>

        <!-- End Card 2 Front -->

        <!-- Card 2 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Pariatur veritatis optio,
              quasi aliquid quas fuga unde modi tempora voluptatum ullam officia a similique laudantium molestiae cumque
              velit eos maiores fugiat quaerat consequatur quibusdam quod facere. Quod necessitatibus nulla
              reprehenderit amet?</p>
              <button class="btn btn-primary" name="photo2" > Select </button>
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
                <img src="./Photography/Daas photography/img1.jpg" class="d-block w-100" alt="..." height="564" width="846">
              </div>
              <div class="carousel-item">
                <img src="./Photography/Daas photography/img2.jpg" class="d-block w-100" alt="..." height="564" width="846">
              </div>
              <div class="carousel-item">
                <img src="./Photography/Daas photography/img3.jpg" class="d-block w-100" alt="..." height="564" width="846">
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
            <h5 class="card-title">Daas Photography</h5>

          </div>
        </div>

        <!-- End Card 3 Front -->

        <!-- Card 3 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Pariatur veritatis optio,
              quasi aliquid quas fuga unde modi tempora voluptatum ullam officia a similique laudantium molestiae cumque
              velit eos maiores fugiat quaerat consequatur quibusdam quod facere. Quod necessitatibus nulla
              reprehenderit amet?</p>
              <button class="btn btn-primary" name="photo3" > Select </button>
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
                <img src="./Photography/Light Camber/img1.jpg" class="d-block w-100" alt="..." height="564" width="846" height="564" width="846">
              </div>
              <div class="carousel-item">
                <img src="./Photography/Light Camber/img2.jpg" class="d-block w-100" alt="..." height="564" width="846" height="564" width="846">
              </div>
              <div class="carousel-item">
                <img src="./Photography/Light Camber/img3.jpg" class="d-block w-100" alt="..." height="564" width="846" height="564" width="846">
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
            <h5 class="card-title">Light Chamber</h5>
          </div>
        </div>

        <!-- End Card 4 Front -->

        <!-- Card 4 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Pariatur veritatis optio,
              quasi aliquid quas fuga unde modi tempora voluptatum ullam officia a similique laudantium molestiae cumque
              velit eos maiores fugiat quaerat consequatur quibusdam quod facere. Quod necessitatibus nulla
              reprehenderit amet?</p>
              <button class="btn btn-primary" name="photo4" > Select </button>
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
                <img src="./Photography/Parak Studio/img1.jpg" class="d-block w-100" alt="..." height="564" width="846">
              </div>
              <div class="carousel-item">
                <img src="./Photography/Parak Studio/img2.jpg" class="d-block w-100" alt="..." height="564" width="846">
              </div>
              <div class="carousel-item">
                <img src="./Photography/Parak Studio/img3.jpg" class="d-block w-100" alt="..." height="564" width="846">
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
            <h5 class="card-title">Parak Studio</h5>
          </div>
        </div>

        <!-- End Card 5 Front -->

        <!-- Card 5 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Pariatur veritatis optio,
              quasi aliquid quas fuga unde modi tempora voluptatum ullam officia a similique laudantium molestiae cumque
              velit eos maiores fugiat quaerat consequatur quibusdam quod facere. Quod necessitatibus nulla
              reprehenderit amet?</p>
              <button class="btn btn-primary" name="photo5" > Select </button>
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
                <img src="./Photography/Photo By The Wedding Ties/img1.jpg" class="d-block w-100" alt="..." height="564" width="846" height="564" width="846">
              </div>
              <div class="carousel-item">
                <img src="./Photography/Photo By The Wedding Ties/img2.jpg" class="d-block w-100" alt="..." height="564" width="846" height="564" width="846">
              </div>
              <div class="carousel-item">
                <img src="./Photography/Photo By The Wedding Ties/img3.jpg" class="d-block w-100" alt="..." height="564" width="846" height="564" width="846">
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
            <h5 class="card-title">Photo by the Wedding Ties</h5>
          </div>
        </div>

        <!-- End Card 6 Front -->

        <!-- Card 6 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Pariatur veritatis optio,
              quasi aliquid quas fuga unde modi tempora voluptatum ullam officia a similique laudantium molestiae cumque
              velit eos maiores fugiat quaerat consequatur quibusdam quod facere. Quod necessitatibus nulla
              reprehenderit amet?</p>
              <button class="btn btn-primary" name="photo6" > Select </button>
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
                <img src="./Photography/Suraj STudio/img1.jpg" class="d-block w-100" alt="..." height="564" width="846">
              </div>
              <div class="carousel-item">
                <img src="./Photography/Suraj STudio/img2.jpg" class="d-block w-100" alt="..." height="564" width="846">
              </div>
              <div class="carousel-item">
                <img src="./Photography/Suraj STudio/img3.jpg" class="d-block w-100" alt="..." height="564" width="846">
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
            <h5 class="card-title">Suraj Studio</h5>
          </div>
        </div>

        <!-- End Card 7 Front -->

        <!-- Card 7 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Pariatur veritatis optio,
              quasi aliquid quas fuga unde modi tempora voluptatum ullam officia a similique laudantium molestiae cumque
              velit eos maiores fugiat quaerat consequatur quibusdam quod facere. Quod necessitatibus nulla
              reprehenderit amet?</p>
              <button class="btn btn-primary" name="photo7" > Select </button>
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
                <img src="./Photography/Technovision/img1.jpg" class="d-block w-100" alt="..."height="564" width="846">
              </div>
              <div class="carousel-item">
                <img src="./Photography/Technovision/img2.jpg" class="d-block w-100" alt="..."height="564" width="846">
              </div>
              <div class="carousel-item">
                <img src="./Photography/Technovision/img3.jpg" class="d-block w-100" alt="..."height="564" width="846">
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
            <h5 class="card-title">Technovision</h5>
          </div>
        </div>

        <!-- End Card 8 Front -->

        <!-- Card 8 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Pariatur veritatis optio,
              quasi aliquid quas fuga unde modi tempora voluptatum ullam officia a similique laudantium molestiae cumque
              velit eos maiores fugiat quaerat consequatur quibusdam quod facere. Quod necessitatibus nulla
              reprehenderit amet?</p>
              <button class="btn btn-primary" name="photo8" > Select </button>
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
                <img src="./Photography/Varun Gavli Studio/img1.jpg" class="d-block w-100" alt="..."height="564" width="846">
              </div>
              <div class="carousel-item">
                <img src="./Photography/Varun Gavli Studio/img2.jpg" class="d-block w-100" alt="..."height="564" width="846">
              </div>
              <div class="carousel-item">
                <img src="./Photography/Varun Gavli Studio/img3.jpg" class="d-block w-100" alt="..."height="564" width="846">
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
            <h5 class="card-title">Varun Gavli Studio</h5>
          </div>
        </div>

        <!-- End Card 9 Front -->

        <!-- Card 9 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Pariatur veritatis optio,
              quasi aliquid quas fuga unde modi tempora voluptatum ullam officia a similique laudantium molestiae cumque
              velit eos maiores fugiat quaerat consequatur quibusdam quod facere. Quod necessitatibus nulla
              reprehenderit amet?</p>
              <button class="btn btn-primary" name="photo9" > Select </button>
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
                <img src="./Photography/Vijayeesam Photography/img1.jpg" class="d-block w-100" alt="..."height="564" width="846">
              </div>
              <div class="carousel-item">
                <img src="./Photography/Vijayeesam Photography/img2.jpg" class="d-block w-100" alt="..."height="564" width="846">
              </div>
              <div class="carousel-item">
                <img src="./Photography/Vijayeesam Photography/img3.jpg" class="d-block w-100" alt="..."height="564" width="846">
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
            <h5 class="card-title">Vijayeesam Photography</h5>
          </div>
        </div>

        <!-- End Card 10 Front -->

        <!-- Card 10 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Pariatur veritatis optio,
              quasi aliquid quas fuga unde modi tempora voluptatum ullam officia a similique laudantium molestiae cumque
              velit eos maiores fugiat quaerat consequatur quibusdam quod facere. Quod necessitatibus nulla
              reprehenderit amet?</p>
              <button class="btn btn-primary" name="photo10" > Select </button>
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
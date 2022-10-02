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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <!-- JavaScript Bundle with Popper -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/states.css">

  <style>
    .back {
      margin-left: -20px;
      width: 30rem;
    }

    .btn-state {
      position: relative;
      left: 11rem;
      top: -1rem;
    }

.card-title{
  position: relative;
  top: -1.5rem;
}

    .price {
      position: relative;
      right: 13rem;
      bottom: 2rem;
    }

    .front {
      height: 25rem;
      width: 30rem;
    }

    label {
      margin-top: 20px;
      margin-bottom: 20px;
    }

    .btn{
    background-color: #000;
    border: none;
  }

  .btn:hover{
    background-color: #000;
  }

  .nav-link:hover{
    color: #000;
  }

  .dropdown-item:hover{
    color: #000;
  }

  .form-floating>label{
    top: -20px;
  }

  .modal .btn-close{
    right: 1.7rem;
  }
  </style>

</head>

<body>
  <?php include("./header.php"); ?>
  <form action="soundandlights.php" method="post">
    <section id="container">

      <div class="head">
        <h1>SOUND AND LIGHTS</h1>
      </div>

      <!--
    <input type="checkbox" id="card-1" />
-->
      <label class="col-md-5 card-container" for='card-1'>

        <div class="card-flip">
          <!-- Card 1 Front -->
          <div class="card front">
            <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./sound and lights/absolut lime/img1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./sound and lights/absolut lime/img2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./sound and lights/absolut lime/img3.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev" value="click" onclick="flip">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <div class="card-body">
              <h5 class="card-title">Absolut Lime</h5>
              <button class="btn-state btn-primary" name="light2"> Select </button>
              <div class="price">$500</div>
            </div>
          </div>
          <!-- End Card 1 Front -->
        </div>
      </label>
      <!-- End Card 1 -->



      <!--Card 2 starts-->
      <!--
    <input type="checkbox" id="card-2" />
-->
      <label class="col-md-5 card-container" for='card-2'>

        <div class="card-flip">
          <!-- Card 2 Front -->


          <div class="card front">
            <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./sound and lights/d&s djs/img1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./sound and lights/d&s djs/img2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./sound and lights/d&s djs/img3.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev" value="click" onclick="flip">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <div class="card-body">
              <h5 class="card-title">D&S Djs </h5>
              <button class="btn-state btn-primary" name="light2"> Select </button>
              <div class="price">$500</div>
            </div>
          </div>
          <!-- End Card 2 Front -->
        </div>
      </label>
      <!-- End Card 2 -->




      <!--Card 3 starts-->
      <!--
    <input type="checkbox" id="card-3" />
-->
      <label class="col-md-5 card-container" for='card-3'>

        <div class="card-flip">
          <!-- Card 3 Front -->


          <div class="card front">
            <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./sound and lights/dj ganesh/img1.jpeg" class="d-block w-100" alt="..." height="385px" width="680px">
                </div>
                <div class="carousel-item">
                  <img src="./sound and lights/dj ganesh/img2.jpeg" class="d-block w-100" alt="..." height="385px" width="680px">
                </div>
                <div class="carousel-item">
                  <img src="./sound and lights/dj ganesh/img3.jpeg" class="d-block w-100" alt="..." height="385px" width="680px">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="prev" value="click" onclick="flip">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <div class="card-body">
              <h5 class="card-title">Dj Ganesh</h5>
              <button class="btn-state btn-primary" name="light2" > Select </button>
              <div class="price">$500</div>
            </div>
          </div>

          <!-- End Card 3 Front -->
        </div>
      </label>
      <!-- End Card 3 -->



      <!--Card 4 starts-->
      <!--
    <input type="checkbox" id="card-4" />
-->
      <label class="col-md-5 card-container" for='card-4'>

        <div class="card-flip">
          <!-- Card 4 Front -->


          <div class="card front">
            <div id="carouselExampleControls4" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./sound and lights/dj santosh/img1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./sound and lights/dj santosh/img2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./sound and lights/dj santosh/img3.jpeg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls4" data-bs-slide="prev" value="click" onclick="flip">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls4" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <div class="card-body">
              <h5 class="card-title">Dj Santosh</h5>
              <button class="btn-state btn-primary" name="light2" > Select </button>
              <div class="price">$500</div>
            </div>
          </div>

          <!-- End Card 4 Front -->
        </div>
      </label>
      <!-- End Card 4 -->




      <!--Card 5 starts-->
      <!--
    <input type="checkbox" id="card-5" />
-->
      <label class="col-md-5 card-container" for='card-5'>

        <div class="card-flip">
          <!-- Card 5 Front -->


          <div class="card front">
            <div id="carouselExampleControls5" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./sound and lights/dj vibes/img1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./sound and lights/dj vibes/img2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./sound and lights/dj vibes/img3.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls5" data-bs-slide="prev" value="click" onclick="flip">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls5" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <div class="card-body">
              <h5 class="card-title">Dj Vibes</h5>
              <button class="btn-state btn-primary" name="light2" > Select </button>
              <div class="price">$500</div>
            </div>
          </div>

          <!-- End Card 5 Front -->
        </div>
      </label>
      <!-- End Card 5 -->






      <!--Card 6 starts-->
      <!--
    <input type="checkbox" id="card-6" />
-->
      <label class="col-md-5 card-container" for='card-6'>

        <div class="card-flip">
          <!-- Card 6 Front -->


          <div class="card front">
            <div id="carouselExampleControls6" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./sound and lights/dj wale babu/img1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./sound and lights/dj wale babu/img2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./sound and lights/dj wale babu/img3.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls6" data-bs-slide="prev" value="click" onclick="flip">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls6" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <div class="card-body">
              <h5 class="card-title">Dj Wale Babu</h5>
              <button class="btn-state btn-primary" name="light2" > Select </button>
              <div class="price">$500</div>
            </div>
          </div>

          <!-- End Card 6 Front -->
        </div>
      </label>
      <!-- End Card 6 -->







      <!--Card 7 starts-->
      <!--
    <input type="checkbox" id="card-7" />
-->
      <label class="col-md-5 card-container" for='card-7'>

        <div class="card-flip">
          <!-- Card 7 Front -->


          <div class="card front">
            <div id="carouselExampleControls7" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./sound and lights/elite dj planners/img1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./sound and lights/elite dj planners/img2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./sound and lights/elite dj planners/img3.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls7" data-bs-slide="prev" value="click" onclick="flip">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls7" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <div class="card-body">
              <h5 class="card-title">Elite Dj Planners</h5>
              <button class="btn-state btn-primary" name="light2" > Select </button>
              <div class="price">$500</div>
            </div>
          </div>

          <!-- End Card 7 Front -->

        </div>
      </label>
      <!-- End Card 7 -->






      <!--Card 8 starts-->
      <!--
    <input type="checkbox" id="card-8" />
-->
      <label class="col-md-5 card-container" for='card-8'>

        <div class="card-flip">
          <!-- Card 8 Front -->


          <div class="card front">
            <div id="carouselExampleControls8" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./sound and lights/miami djs/img1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./sound and lights/miami djs/img2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./sound and lights/miami djs/img3.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls8" data-bs-slide="prev" value="click" onclick="flip">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls8" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <div class="card-body">
              <h5 class="card-title">Miami Djs</h5>
              <button class="btn-state btn-primary" name="light2" > Select </button>
              <div class="price">$500</div>
            </div>
          </div>

          <!-- End Card 8 Front -->

        </div>
      </label>
      <!-- End Card 8 -->






      <!--Card 9 starts-->
      <!--
    <input type="checkbox" id="card-9" />
-->
      <label class="col-md-5 card-container" for='card-9'>

        <div class="card-flip">
          <!-- Card 9 Front -->


          <div class="card front">
            <div id="carouselExampleControls9" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./sound and lights/royal djs/img1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./sound and lights/royal djs/img2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./sound and lights/royal djs/img3.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls9" data-bs-slide="prev" value="click" onclick="flip">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls9" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <div class="card-body">
              <h5 class="card-title">Royal Djs</h5>
              <button class="btn-state btn-primary" name="light2" > Select </button>
              <div class="price">$500</div>
            </div>
          </div>

          <!-- End Card 9 Front -->

        </div>
      </label>
      <!-- End Card 9 -->






      <!--Card 10 starts-->
      <!--
    <input type="checkbox" id="card-10" />
-->
      <label class="col-md-5 card-container" for='card-10'>

        <div class="card-flip">
          <!-- Card 10 Front -->


          <div class="card front">
            <div id="carouselExampleControls10" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./sound and lights/rp dj wale/img1.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./sound and lights/rp dj wale/img2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./sound and lights/rp dj wale/img3.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls10" data-bs-slide="prev" value="click" onclick="flip">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls10" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <div class="card-body">
              <h5 class="card-title">RP Dj Wale</h5>
              <button class="btn-state btn-primary" name="light2" > Select </button>
              <div class="price">$500</div>
            </div>
          </div>

          <!-- End Card 10 Front -->
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
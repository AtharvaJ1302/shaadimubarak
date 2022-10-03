<?
session_start();
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

    <!--font awesome CDN-->
    <script src="https://kit.fontawesome.com/ed6a667071.js" crossorigin="anonymous"></script>

    <!--CSS-->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/about-us.css">

<style>
.nav-link:hover{
color: #000;
}

.dropdown-item:hover{
color: #000;
}

.btn{
    background-color: #000;
    border-color: #000;
}

.btn:hover{
    background-color: #000;
    border-color: #000;
}
.modal .btn-close{
    right: 1.7rem;
}
</style>

</head>
<?php include("./header.php"); ?>
<body>


    <!-- new our team-->
<section class="team-section">
     <div class="container">
         <div class="row">
             <div class="section-title">
                 <h1>Our Team</h1>
                 <p></p>
             </div>
         </div>
         <div class="row">
             <div class="team-items">
                  <div class="item">
                      <img src="./profile photos/aditi.jpg" alt="team" width="255px" height="325px"/>
                      <div class="inner">
                          <div class="info">
                               <h5>Aditi Palkar</h5>
                               <p>Designer</p>
                               <div class="social-links">
                                
                                   <a href=""><span class="fa fa-twitter"></span></a>
                                   <a href=""><span class="fa fa-linkedin"></span></a>
                                   <a href=""><span class="fa fa-instagram"></span></a>
                               </div>
                          </div>
                      </div>
                  </div>
                  <div class="item">
                  <img src="./profile photos/komal.jpg" alt="team" width="255px" height="325px"/>
                      <div class="inner">
                          <div class="info">
                               <h5>Komal Shrimal</h5>
                               <p>Designer</p>
                               <div class="social-links">
                               <a href=""><span class="fa fa-twitter"></span></a>
                                   <a href=""><span class="fa fa-linkedin"></span></a>
                                   <a href=""><span class="fa fa-instagram"></span></a>
                               </div>
                          </div>
                      </div>
                  </div>
                  <div class="item">
                  <img src="./profile photos/sakshi.jpg" alt="team" width="255px" height="325px"/>
                      <div class="inner">
                          <div class="info">
                               <h5>Sakshi Chikorde</h5>
                               <p>Designer</p>
                               <div class="social-links">
                               <a href=""><span class="fa fa-twitter"></span></a>
                                   <a href=""><span class="fa fa-linkedin"></span></a>
                                   <a href=""><span class="fa fa-instagram"></span></a>
                               </div>
                          </div>
                      </div>
                  </div>
                  <div class="item">
                  <img src="./profile photos/atharva2.jpeg" alt="team" width="255px" height="325px"/>
                      <div class="inner">
                          <div class="info">
                               <h5>Atharva Joshi</h5>
                               <p>Designer</p>
                               <div class="social-links">
                               <a href=""><span class="fa fa-twitter"></span></a>
                                   <a href=""><span class="fa fa-linkedin"></span></a>
                                   <a href=""><span class="fa fa-instagram"></span></a>
                               </div>
                          </div>
                      </div>
                  </div>
                  <div class="item">
                  <img src="./profile photos/eeshan.jpg" alt="team" width="255px" height="325px"/>
                      <div class="inner">
                          <div class="info">
                               <h5>Eeshan Vaidya</h5>
                               <p>Designer</p>
                               <div class="social-links">
                               <a href=""><span class="fa fa-twitter"></span></a>
                                   <a href=""><span class="fa fa-linkedin"></span></a>
                                   <a href=""><span class="fa fa-instagram"></span></a>
                               </div>
                          </div>
                      </div>
                  </div>
                  <div class="item">
                  <img src="./profile photos/huzaifa.jpg" alt="team" width="255px" height="325px"/>
                      <div class="inner">
                          <div class="info">
                               <h5>Huzaifa Faize</h5>
                               <p>Designer</p>
                               <div class="social-links">
                               <a href=""><span class="fa fa-twitter"></span></a>
                                   <a href=""><span class="fa fa-linkedin"></span></a>
                                   <a href=""><span class="fa fa-instagram"></span></a>
                               </div>
                          </div>
                      </div>
                  </div>
                  <div class="item">
                  <img src="./profile photos/karkar.jpg" alt="team" width="255px" height="325px"/>
                      <div class="inner">
                          <div class="info">
                               <h5>Atharva Karkar</h5>
                               <p>Designer</p>
                               <div class="social-links">
                               <a href=""><span class="fa fa-twitter"></span></a>
                                   <a href=""><span class="fa fa-linkedin"></span></a>
                                   <a href=""><span class="fa fa-instagram"></span></a>
                               </div>
                          </div>
                      </div>
                  </div>
             </div>
         </div>
     </div>
  </section>
<!-- new our team-->


    <?php include("./footer.php"); ?>
</body>
<?php include("./progress-wrap.php"); ?>

<?php include("./javascript.php"); ?>
</html>
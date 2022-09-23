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

<!--font awesome CDN-->
<script src="https://kit.fontawesome.com/ed6a667071.js" crossorigin="anonymous"></script>

<!--CSS stylesheet-->
<link rel="stylesheet" href="./assets/css/destinations.css">

<!--Jquuery cdn-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
  integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <style>


    body{
        background-image: url("./assets/img/pink\ bg.jpeg");
    }

    .state1{
     background-image: url(./assets/img/maharashtra.jpg);
     object-fit: cover;
   }

   .state2{
    background: url(./assets/img/goa.jpg);
   }
   .state3{
    background: url(./assets/img/j\ &\ k.jpg); 
   }
   .state4{
    background: url(./assets/img/delhi.jpg); 
    background-repeat: no-repeat;
    background-size:100% 100%;
   }
   .state5{
    background: url(./assets/img/kerala.jpg); 
   }
   .state6{
    background: url(./assets/img/west\ bengal.jpg); 
   }
   .state7{
    background: url(./assets/img/punjab.jpg); 
    
   }
   .state8{
    background: url(./assets/img/gujarat.jpg); 
   }
   .state9{
    background: url(./assets/img/telangana.jpg); 
   }
   .state10{
    background: url(./assets/img/rajasthan.jpg); 
    background-repeat: no-repeat;
    background-size: 100% 100%;
   }


  </style>

</head>
<body>
    <section id="heading" >
        <h2>Destinations</h2>
    </section>
 
    <div class="container">
    <div class="state state1">
        <h1>Maharashtra</h1>
        <button class="btn"><a href="maharashtra.php"><span>More</span></a></button>
        </div>
    <div class="state state2">
        <h1>Goa</h1>
        <button class="btn"><a href="goa.php"><span>More</span></a></button>
    </div>
    <div class="state state3">
        <h1>Jammu & Kashmir</h1>
        <button class="btn"><a href="jk.php"><span>More</span></a></button>
    </div>
    <div class="state state4">
        <h1>Delhi</h1>
        <button class="btn"><a href="delhi.php"><span>More</span></a></button>
    </div>
    <div class="state state5">
        <h1>Kerala</h1>
        <button class="btn"><a href="kerala.php"><span>More</span></a></button>
    </div>
    <div class="state state6">
        <h1>West Bengal</h1>
        <button class="btn"><a href="bengal.php"><span>More</span></a></button>
    </div>
    <div class="state state7">
        <h1>Punjab</h1>
        <button class="btn"><a href="punjab.php"><span>More</span></a></button>
    </div>
    <div class="state state8">
        <h1>Gujarat</h1>
        <button class="btn"><a href="gujarat.php"><span>More</span></a></button>
    </div>
    <div class="state state9">
        <h1>Telangana</h1>
        <button class="btn"><a href="telangana.php"><span>More</span></a></button>
    </div>
    <div class="state state10">
        <h1>Rajasthan</h1>
        <button class="btn"><a href="rajasthan.php"><span>More</span></a></button>
    </div>
</div>
</body>
</html>

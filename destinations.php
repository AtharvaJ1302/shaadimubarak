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

<!--font awesome CDN-->
<script src="https://kit.fontawesome.com/ed6a667071.js" crossorigin="anonymous"></script>

<!--CSS stylesheet-->
<link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet" href="./assets/css/destinations.css">


<!--Jquuery cdn-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
  integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <style>


    body{
        background-color: black;
    }

   .state1{
   background-color: #FE036A;
   }
   .state2{
   background-color: #FE036A;
   }
   .state3{
   background-color: #F5347F ;
   }
   .state4{
   background-color: #F5347F;
   }
   .state5{
   background-color: #FF4DA5;
   }
   .state6{
   background-color: #FF4DA5;
   }
   .state7{
   background-color:#FF6EB4;
   }
   .state8{
   background-color:#FF6EB4;
   }
   .state9{
   background-color:#FF96C9;
   }
   .state10{
   background-color:#FF96C9 ;
   }

.state h1{
    padding-top: 10px;
}

.btn{
    line-height: 0.5;
    background-color: #000;
}

.btn a{
    color: #fff;
}

.btn:hover {
  background-color: #000;
  border-color: #000;
}
  </style>

</head>
<body>
<?php include("./header.php"); ?>

    <section id="heading" >
        <h2 style="position: relative; top: 60%;color: #000;">Destinations</h2>
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

<?php include("./footer.php"); ?>
</body>

<?php include("./progress-wrap.php"); ?>

<?php include("./javascript.php"); ?>

</html>

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
  <form action="venuegoa.php" method="post">
  <section id="container">

    <div class="head">
      <h1>GOA</h1>
    </div>

    <input type="checkbox" id="card-1" />
    <label class="col-md-5 card-container" for='card-1'>

      <div class="card-flip">
        <!-- Card 1 Front -->
        <div class="card front">
          <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/Goa/Bay 15 Waterfront/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Goa/Bay 15 Waterfront/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Goa/Bay 15 Waterfront/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Bay 15 Waterfront</h5>
            <h6>LOCATION: Odxel Beach, Dona Paula, Panaji, Goa </h6>



          </div>
        </div>

        <!-- End Card 1 Front -->

        <!-- Card 1 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">
              Just 6 kms from the capital city of Panjim, the Bay 15 Waterfront is located at the famous Odxel beach
              which provides for breathtaking views of the Arabian Sea. It is a stand-alone venue which is one of Goa's
              largest waterfront wedding lawns offering its own in-house catering services at a 5-star level. It is a
              beautiful, hospitable place for tourists and for people, who are looking lovely venue for their wedding
              ceremony.
            </p>
            <button class="btn btn-primary" name="venue1" > Select </button>
           <!-- <a href="#" class="btn btn-primary" style="text-align: center;">Add to cart</a> -->
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
                <img src="./images/Goa/Silva Heritage/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Goa/Silva Heritage/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Goa/Silva Heritage/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Silva Heritage</h5>
            <h6>LOCATION: Silva Heritage, Cana, Benaulim, Goa, India</h6>

          </div>
        </div>

        <!-- End Card 2 Front -->

        <!-- Card 2 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;margin-bottom: -4rem;">
              Silva Heritage in Goa is one of the most sought-after banqueting facilities in the city. It was set up
              with a view to providing an elegant and superior banqueting space to cater to the varied requirements of
              their clients. Whatever the celebration may be, big or small, it is their endeavor to make each
              celebration, a grand success. They are perfect when it comes to hosting wedding ceremonies as they offer
              heavenly views combined with lavish hospitality. Their warm welcoming nature and hospitality make your
              wedding experience very special. The location adds another level of desire to this venue as it is situated
              on the outskirts, away from the noise and bustle of the city. The venue has outdoor spaces that can
              accommodate up to 400 people. They have a flexible catering policy. They also provide ample parking space
              for the guests.
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
                <img src="./images/Goa/Prainha Beach Resort/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Goa/Prainha Beach Resort/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Goa/Prainha Beach Resort/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Prainha Beach Resort</h5>
            <h6>LOCATION: Silva Heritage, Cana, Benaulim, Goa, India</h6>

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
              A Prainha wedding at any time of day is beautiful, but a Prainha sunset wedding is particularly
              spectacular. Prainha Goa is a stunning location for a wedding as paradise awaits at Prainha Resort by the
              Sea. A serene resort, nestled on a secluded cove in Dona Paula. Indulge in the tranquil sensation of this
              quiet retreat, where nature’s supreme beauty creates a mesmerizing backdrop for your sublime relaxation.
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
                <img src="./images/Goa/DoubleTree by Hilton/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Goa/DoubleTree by Hilton/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Goa/DoubleTree by Hilton/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">DoubleTree by Hilton, Panaji</h5>
            <h6>LOCATION: Kadamba Plateau Panjim, Old Goa Rd, Goa Velha, Goa</h6>
          </div>
        </div>

        <!-- End Card 4 Front -->

        <!-- Card 4 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;margin-bottom: -5rem;">
              Enjoy 5-star service at the DoubleTree by Hilton, Panaji. Set on the Old Goa Road, just minutes from
              jewels of India like the Anjuna Beach, their luxury hotel offers easy access to all points of interest.
              Take a dip in their pool or break a sweat in the state-of-the-art fitness center. Their 'City of Love'
              location is ideal for vacations, weddings, getaways and even for business. Convenient to Goa Airport, this
              5-star hotel welcomes you with traditional Indian hospitality in a modern setting. Fully equipped with
              work class facilities, they offer 160 luxurious room & suites for comfortable accommodation and stay for
              everyone. For the celebration area, they offer customized spaces that include one indoor hall, one outdoor
              lawn space, and a poolside space. The banquet is spacious and well ventilated to ensure a lavish
              experience. They are focused to deliver the best value, quality, and royal hospitality service.
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
                <img src="./images/Goa/Radisson Blu Resort Goa, Cavelossim Beach/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Goa/Radisson Blu Resort Goa, Cavelossim Beach/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Goa/Radisson Blu Resort Goa, Cavelossim Beach/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Radisson Blu Resort Goa, Cavelossim Beach</h5>
            <h6>LOCATION: Cavelossim, Beach, Mobor Beach, Goa </h6>
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
              Radisson Blu Resort Goa is located just 45 minutes from Dabolim International Airport and is near popular
              beaches like Colva, Palolem and Calangute. The whole hotel is designed keeping in mind Goan-Portugese
              architecture. Guests appreciate the in-house spa and large swimming pool which the hotel has to offer.
              There are 132 rooms and suites which portray mesemrizing views of the pool or lawn, and all accommodations
              are contained with chic furnishings and modern amenities. They also offer 4,000 square meters of event
              space for weddings and corporate events. They also have grand lawns which accommodate upto 750 attendees
              for outdoor weddings.
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
                <img src="./images/Goa/Taj Fort Aguada Resort & Spa/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Goa/Taj Fort Aguada Resort & Spa/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Goa/Taj Fort Aguada Resort & Spa/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Taj Fort Aguada Resort & Spa, Goa</h5>
            <h6>LOCATION: Beach Sinquerim, Candolim, Goa</h6>
          </div>
        </div>

        <!-- End Card 6 Front -->

        <!-- Card 6 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;margin-bottom: -5rem;">
              Taj Fort Aguada Resort & Spa, Goa is at its best. Romantic. Charming. Vibrant. It has history woven in its
              walls. It's where royalty, heads of government and the biggest celebrities are known to frequent. For the
              luxury Goa experience, which no other place has been able to recreate. Not much has changed. The
              picturesque settings creates a fantastic backdrop to the entire experience, added to which the nouvelle
              restaurants and the Jiva spa will make you go Ah! Soak in the space that showcases the spirit of Goa. The
              45 km drive from the airport will have you delighting in backseat surprises (we're not revealing here).
              Explore the horizon as you look over the infinity pool, beyond the 16th century ramparts of the Portuguese
              Fort, and wave back to the tide as it works its way across the Arabian Sea to joyfully greet the Sinquerim
              beach below. Explore Goa in a vivid, vibrant way.
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
                <img src="./images/Goa/The Fort Ramgarh/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Goa/The Fort Ramgarh/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Goa/The Fort Ramgarh/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">The Fort Ramgarh</h5>
            <h6>LOCATION: The Fort Ramgarh, National Highway</h6>
          </div>
        </div>

        <!-- End Card 7 Front -->

        <!-- Card 7 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;margin-bottom: -5rem;">
              Marriages are made in the heaven which we formalize on the Earth! A Royal wedding is an ideal way to
              respect the beginning of your married life. A Royal Wedding experience is one of its kind, a Dreamland of
              King’s & Queen’s, Maharajas & Maharani’s with elegantly decorated well lit Palace, a Patiala backdrop
              giving the real Royal touch feeling to you and your guest for A Grand Celebration! - Tikka ceremony,
              Garland’s will receive your esteemed guests through the Tallest Wooden Gate in the country (Recorded in
              Limca Book of Records). The only destination to turn your dream wedding into reality & memorable day of
              your life with a touch of perfection and Royal Hospitality. A Fairytale Royal Wedding experience with the
              processions of caparisoned Elephants & Entertainment by Folk dancers, Musicians, Shehnai Vadan, Fire
              Performers, Dhol Wales and much more.
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
                <img src="./images/Goa/Redwood Resorts/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Goa/Redwood Resorts/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Goa/Redwood Resorts/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Redwood Resorts</h5>
            <h6>LOCATION: Morni Road</h6>
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
              Redwood Resort, situated amidst the serene backdrop of Morni town. A haven of tranquility where the only
              sounds being the wind softly rustling among the trees and the distant calls of birds. Wide stretches of
              greens meet the eye at length with sights as soothing as the dancing and joyous peacocks. Redwood offers
              comfort and luxury in nature’s lap, with 23 well equipped rooms perfectly suited for your needs, then
              Redwood Resorts can be the perfect location. Redwood resorts has illustrious impeccable décors, elite
              services, unrivaled array of amenities and striking venues, at economical prices.
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
                <img src="./images/Goa/Kanha Banquet Hall/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Goa/Kanha Banquet Hall/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Goa/Kanha Banquet Hall/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Kanha Banquet Hall</h5>
            <h6>LOCATION: Kanha Banquet Hall IMA Bhawan, Karamtoli Chowk </h6>
          </div>
        </div>

        <!-- End Card 9 Front -->

        <!-- Card 9 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;margin-bottom: -4rem;">
              Kanha Banquet Hall is one of the most sought-after banqueting facilities in the city. It was set up with a
              view to providing an elegant and superior banqueting space to cater to the varied requirements of their
              clients. Whatever the celebration may be, big or small, it is their endeavor to make each celebration, a
              grand success. They are perfect when it comes to hosting wedding ceremonies as they offer heavenly views
              combined with lavish hospitality. The venue has indoor and outdoor spaces which can accommodate up to 500
              people. They have a flexible catering policy. They also provide ample parking space for the guests. Their
              warm welcoming nature and hospitality make your wedding experience very special. The location adds another
              level of desire to this venue as it is situated on the outskirts, away from the noise and bustle of the
              city.
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
                <img src="./images/Goa/Dos Equis Exotic Lounge/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Goa/Dos Equis Exotic Lounge/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Goa/Dos Equis Exotic Lounge/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
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
            <h5 class="card-title">Dos Equis Exotic Lounge, Bardez</h5>
            <h6>LOCATION: Arrao Road, Olaulim-Pomburpa, Bardez, Goa </h6>
          </div>
        </div>

        <!-- End Card 10 Front -->

        <!-- Card 10 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Famous for its beaches and sunsets, Goa never fails to be a
              top ranking city to host your special occasions. No doubt there are a multitude of venues available in Goa
              for events of all budgets. Dos Equis Exotic Lounge is one such exotic property. This lounge is a large
              spread of green lawn which has gained a reputation for itself for fantastic food and facilities. Their
              excellent services and value attract the clients to book this venue for their big day and important
              events. This sought after venue is sure to make your event memorable and give you memories to last a
              lifetime.</p>
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

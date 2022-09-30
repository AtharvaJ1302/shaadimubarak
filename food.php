<?php 
session_start();
// include("session_check.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./assets/css/food.css">

   <!-- custom js file link  -->
   <script src="./assets/js/food.js" defer></script>

   <?php include("./head.php"); ?>
	

</head>
<body style ="background-color: #C21E56";>
 <?php include("./header.php"); ?> 

    <form action="foodback.php" method="post" class="food-form">
<div class="container" style="margin: x;">

   <h2 class="title"> FOOD MENU</h2>
   <h3 class="title"> APPETIZERS</h3>

   
   <!---->
   <div class="products-container">

   <div class="product" data-name="p-1">
         <img src=".\assets\img\ap1.jpg" alt="">
         <h3>KURKURI AMCHOORI BHINDI CHAAT</h3>
         <div class="price">₹200</div>
         
   </div>

   <div class="product" data-name="p-2">
         <img src=".\assets\img\app2.jpg" alt="">
         <h3>BEETROOT AND FETA TIKKI</h3>
         <div class="price">₹180</div>
         
   </div>

   <div class="product" data-name="p-3">
         <img src=".\assets\img\app3.jpg" alt="">
         <h3>STUFFED TANDOORI MUSHROOM PLATTER  </h3>
         <div class="price">₹170</div>
         
   </div>

   <div class="product" data-name="p-4">
         <img src=".\assets\img\app4.jpg" alt="">
         <h3>ASSORTED VEGETABLE PAKORAS</h3>
         <div class="price">₹165</div>
         
   </div>

   <div class="product" data-name="p-5">
         <img src=".\assets\img\app5.jpg" alt="">
         <h3>PANEER CHANDINI SEEKH</h3>
         <div class="price">₹165</div>
         
   </div>

   <div class="product" data-name="p-6">
         <img src=".\assets\img\app38.jpg" alt="">
         <h3>AMRAVATHI KOZHI VARUVAL</h3>
         <div class="price">₹195</div>
         
   </div>

   <div class="product" data-name="p-7">
         <img src=".\assets\img\app39.jpg" alt="">
         <h3>TAWA SHRIMP ROAST</h3>
         <div class="price">₹180</div>
         
   </div>

   <div class="product" data-name="p-8">
         <img src=".\assets\img\app40.jpg" alt="">
         <h3>AMRITSARI FISH FRY</h3>
         <div class="price">₹180</div>
         
   </div>
</div>
<!---->


      <h2 class="title"> TANDOORI AND GRILLS</h2>
<!---->
      <div class="products-container2">
   <div class="product" data-name="p-9">
         <img src=".\assets\img\app6.jpg" alt="">
         <h3>MUGHLAI PANEER TIKKA</h3>
         <div class="price">₹175</div>
         
   </div>

   <div class="product" data-name="p-10">
        <img src=".\assets\img\app7.png" alt="">
        <h3>PESHWARI BHARWAN ALOO </h3>
        <div class="price">₹170</div>
        
   </div>

   <div class="product" data-name="p-11">
        <img src=".\assets\img\app8.jpg" alt="">
        <h3>TANDOORI SUBZI PLATTER   </h3>
        <div class="price">₹180</div>
        
   </div>

   <div class="product" data-name="p-12">
      <img src=".\assets\img\app41.jpg" alt="">
      <h3>TANDOORI CHICKEN   </h3>
      <div class="price">₹210</div>
     
   </div>

   <div class="product" data-name="p-13">
      <img src=".\assets\img\app42.jpg" alt="">
      <h3>CHICKEN CHOPS AFGHANI  </h3>
      <div class="price">₹165</div>
      
   </div>

   <div class="product" data-name="p-14">
      <img src=".\assets\img\app43.jpg" alt="">
      <h3>MURG MAKHAN MALAI </h3>
      <div class="price">₹160</div>
      
   </div>

   <div class="product" data-name="p-15">
      <img src=".\assets\img\app44.jpg" alt="">
      <h3>CLASSIC CHICKEN TIKKA </h3>
      <div class="price">₹170</div>
      
   </div>

   <div class="product" data-name="p-16">
      <img src=".\assets\img\app45.jpg" alt="">
      <h3>MURG RESHMI KABAB </h3>
      <div class="price">₹180</div>
      
   </div>

   <div class="product" data-name="p-17">
      <img src=".\assets\img\app46.jpg" alt="">
      <h3>TANDOORI SHRIMP </h3>
      <div class="price">₹200</div>
      
   </div>
</div>
<!---->

     <h2 class="title"> MAIN COURSE</h2>
      

<!---->
      <div class="products-container3">
   <div class="product" data-name="p-18">
        <img src=".\assets\img\app9.jpg" alt="">
        <h3>MOGHUL SIGNATURE MALAI KOFTA  </h3>
        <div class="price">₹210</div>
       
     </div>

   <div class="product" data-name="p-19">
        <img src=".\assets\img\app10.jpeg" alt="">
        <h3>CHUKUNDER SHAM SAVERA   </h3>
        <div class="price">₹200</div>
        
     </div>

   <div class="product" data-name="p-20">
        <img src=".\assets\img\app11.jpg" alt="">
        <h3>PANEER JALFREZI  </h3>
        <div class="price">₹220</div>
       
     </div>

   <div class="product" data-name="p-21">
        <img src=".\assets\img\app12.jpg" alt="">
        <h3>OLD DELHI BUTTER PANEER </h3>
        <div class="price">₹180</div>
        
     </div>

   <div class="product" data-name="p-22">
        <img src=".\assets\img\app13.jpg" alt="">
        <h3>PANEER MIRCH KA SALAN</h3>
        <div class="price">₹190</div>
       
     </div>

   <div class="product" data-name="p-23">
        <img src=".\assets\img\app14.jpg" alt="">
        <h3>METHI MALAI MATTAR        </h3>
        <div class="price">₹190</div>
       
     </div>

   <div class="product" data-name="p-24">
        <img src=".\assets\img\app15.png" alt="">
        <h3>CHANNA AMRITSARI</h3>
        <div class="price">₹185</div>
        
     </div>

   <div class="product" data-name="p-25">
        <img src=".\assets\img\app16.jpg" alt="">
        <h3>SUBZI DIWANI HANDI    </h3>
        <div class="price">₹180</div>
       
     </div>

   <div class="product" data-name="p-26">
        <img src=".\assets\img\app17.jpg" alt="">
        <h3>CLASSIC BHINDI MASALA        </h3>
        <div class="price">₹175</div>
        
     </div>

   <div class="product" data-name="p-27">
      <img src=".\assets\img\app47.jpg" alt="">
      <h3>OLD DELHI BUTTER CHICKEN     </h3>
      <div class="price">₹200</div>
      
   </div>

   <div class="product" data-name="p-28">
      <img src=".\assets\img\app48.jpg" alt="">
      <h3>MURG TIKKA MASALA  </h3>
      <div class="price">₹210</div>
      
   </div>

   <div class="product" data-name="p-29">
      <img src=".\assets\img\app49.jpg" alt="">
      <h3>BADSHAI MURGH KA SALAN</h3>
      <div class="price">₹200</div>
      
   </div>

   <div class="product" data-name="p-30">
      <img src=".\assets\img\app50.jpg" alt="">
      <h3>MURGH HYDERABADI CURRY</h3>
      <div class="price">₹220</div>
     
   </div>
      </div>
      <!---->

      
     <h2 class="title"> ROTIS</h2>

     <!---->
<div class="products-container4">
   <div class="product" data-name="p-31">
        <img src=".\assets\img\app18.jpg" alt="">
        <h3>NAAN/BUTTER NAAN/ROTI</h3>
        <div class="price">₹25</div>
        
     </div>

   <div class="product" data-name="p-32">
        <img src=".\assets\img\app19.jpg" alt="">
        <h3>ALOO PARATHA/PUDINA PARATHA/KABULI PARATHA</h3>
        <div class="price">₹30</div>
       
     </div>

   <div class="product" data-name="p-33">
        <img src=".\assets\img\app51.jpg" alt="">
        <h3>KANDHARI NAAN</h3>
        <div class="price">₹25</div>
       
     </div>

   <div class="product" data-name="p-34">
        <img src=".\assets\img\app21.jpg" alt="">
        <h3>CHILLI CHEESE NAAN/KHEEMA NAAN</h3>
        <div class="price">₹30</div>
        
     </div>

   <div class="product" data-name="p-35">
        <img src=".\assets\img\app22.jpg" alt="">
        <h3>BULLET NAAN</h3>
        <div class="price">₹35</div>
        
     </div>

   <div class="product" data-name="p-36">
        <img src=".\assets\img\app23.jpg" alt="">
        <h3>CHAPATI</h3>
        <div class="price">₹20</div>
        
     </div>
</div>
<!---->

     <h2 class="title"> RICE</h2>

     <!---->
<div class="products-container5">
   <div class="product" data-name="p-37">
        <img src=".\assets\img\app52.jpeg" alt="">
        <h3>PLAIN BASMATI</h3>
        <div class="price">₹140</div>
        
     </div>

   <div class="product" data-name="p-38">
        <img src=".\assets\img\app25.jpg" alt="">
        <h3>KASHMIRI PULAO</h3>
        <div class="price">₹170</div>
       
     </div>

   <div class="product" data-name="p-39">
        <img src=".\assets\img\app26.jpg" alt="">
        <h3>VEG BIRYANI</h3>
        <div class="price">₹180</div>
        
     </div>

   <div class="product" data-name="p-40">
      <img src=".\assets\img\app27.jpg" alt="">
      <h3>LUCHNAWI VEG DUM BIRYANI</h3>
      <div class="price">₹185</div>
      
   </div>

   <div class="product" data-name="p-41">
        <img src=".\assets\img\app53.jpg" alt="">
        <h3>LUCKNAWI MURGH DUM BIRYANI</h3>
        <div class="price">₹200</div>
        
     </div>

   <div class="product" data-name="p-42">
      <img src=".\assets\img\app54.jpg" alt="">
      <h3>SHRIMP BIRYANI</h3>
      <div class="price">₹240</div>
      
   </div>

   <div class="product" data-name="p-43">
      <img src=".\assets\img\app55.jpg" alt="">
      <h3>GOAT DUM BIRYANI</h3>
      <div class="price">₹280</div>
      
   </div>
</div>
     <!---->

     <h2 class="title"> ACCOMPANIMENTS</h2>

     <!---->
<div class="products-container6">
   <div class="product" data-name="p-44">
        <img src=".\assets\img\app28.jpg" alt="">
        <h3>RAITA</h3>
        <div class="price">₹120</div>
        
     </div>

   <div class="product" data-name="p-45">
        <img src=".\assets\img\app29.jpg" alt="">
        <h3>DAHI BHALLA</h3>
        <div class="price">₹130</div>
       
     </div>

   <div class="product" data-name="p-46">
        <img src=".\assets\img\app30.jpg" alt="">
        <h3>GREEN SALAD</h3>
        <div class="price">₹125</div>
        
     </div>

   <div class="product" data-name="p-47">
        <img src=".\assets\img\app31.jpg" alt="">
        <h3>MASALA PAPAD</h3>
        <div class="price">₹80</div>
        
     </div>
</div>
<!---->


     <h2 class="title"> DESSERTS</h2>
<!---->
<div class="products-container7">
   <div class="product" data-name="p-48">
        <img src=".\assets\img\app32.jpg" alt="">
        <h3>KULFI FALOODA</h3>
        <div class="price">₹90</div>
       
     </div>

   <div class="product" data-name="p-49">
        <img src=".\assets\img\app33.jpg" alt="">
        <h3>GULAB JAMUN</h3>
        <div class="price">₹90</div>
        
     </div>

   <div class="product" data-name="p-50">
        <img src=".\assets\img\app34.jpg" alt="">
        <h3>ICE CREAMS</h3>
        <div class="price">₹100</div>
       
     </div>

   <div class="product" data-name="p-51">
        <img src=".\assets\img\app35.jpg" alt="">
        <h3>GAJJAR HALWA</h3>
        <div class="price">₹110</div>
       
     </div>

   <div class="product" data-name="p-52">
        <img src=".\assets\img\app36.jpg" alt="">
        <h3>LAVA CAKE</h3>
        <div class="price">₹140</div>
        
     </div>

   <div class="product" data-name="p-53">
        <img src=".\assets\img\app37.jpg" alt="">
        <h3>CASATA ICE CREAM</h3>
        <div class="price">₹135</div>
     
     </div>
  
   </div>
   <!---->

</div>

<div class="products-preview">

<div class="preview" data-target="p-1">
      <i class="fas fa-times"></i>
      <img src=".\assets\img\ap1.jpg" alt="">
      <h3>KURKURI AMCHOORI BHINDI CHAAT</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>An all-time favorite spiced okra fry finished with dry mango powder and turned into a signature chaat</p>
      <div class="price">₹200</div>
      
      <div class="form-check text-center">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
   </div>

</div>   

<div class="preview" data-target="p-2">
      <i class="fas fa-times"></i>
      <img src=".\assets\img\app2.jpg" alt="">
      <h3>BEETROOT AND FETA TIKKI    </h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>This shallow fried mouth melting cutlet has a delicate combination of spiced beets and feta cheese.</p>
      <div class="price">₹180</div>
      <div class="form-check text-center">
         
         <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
      </div>
</div>

<div class="preview" data-target="p-3">
      <i class="fas fa-times"></i>
      <img src=".\assets\img\app3.jpg" alt="">
      <h3>STUFFED TANDOORI MUSHROOM PLATTER    </h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>Mushrooms are marinated with tandoori masala filled with jack cheese,walnuts,cranberry and finished in a clay oven</p>
      <div class="price">₹170</div>
      <div class="form-check text-center">
         
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
      </div>
</div>

<div class="preview" data-target="p-4">
      <i class="fas fa-times"></i>
      <img src=".\assets\img\app4.jpg" alt="">
      <h3>ASSORTED VEGETABLE PAKORAS</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>A mouthwatering vegetable fritters mad with spiced chick pea flour</p>
      <div class="price">₹165</div>
      <div class="form-check text-center">
         
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
      </div>
</div>

<div class="preview" data-target="p-5">
      <i class="fas fa-times"></i>
      <img src=".\assets\img\app5.jpg" alt="">
      <h3>PANEER CHANDINI SEEKH</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>Cottage cheese tempered with indian spices and baked on a skewer in a clay oven</p>
      <div class="price">₹165</div>
      <div class="form-check text-center">
         
         <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
      </div>
</div>

<div class="preview" data-target="p-6">
      <i class="fas fa-times"></i>
      <img src=".\assets\img\app38.jpg" alt="">
      <h3>AMRAVATHI KOZHI VARUVAL</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>Tender pieces of chicken roasted on a low flame with special southern spices and tempered with fried curry leaves.</p>
      <div class="price">₹195</div>
      <div class="form-check text-center">
         
         <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
      </div>
</div>

<div class="preview" data-target="p-7">
      <i class="fas fa-times"></i>
      <img src=".\assets\img\app39.jpg" alt="">
      <h3>TAWA SHRIMP ROAST</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>Shrimps are cooked in traditional iron skillet with a spicy lemony marinade.</p>
      <div class="price">₹180</div>
      <div class="form-check text-center">
         
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
      </div>
</div>

<div class="preview" data-target="p-8">
      <i class="fas fa-times"></i>
      <img src=".\assets\img\app40.jpg" alt="">
      <h3>AMRISTARI FISH FRY</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>A popular batter fried flavorful preparation of fish from the region of Punjab.</p>
      <div class="price">₹180</div>
      <div class="form-check text-center">
         
         <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
      </div>
</div>

<div class="preview" data-target="p-9">
      <i class="fas fa-times"></i>
      <img src=".\assets\img\app6.jpg" alt="">
      <h3>MUGHLAI PANEER TIKKA</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>Homemade cheese grilled with onions,bell peppers and tomato</p>
      <div class="price">₹175</div>
      <div class="form-check text-center">
         
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
      </div>
</div>

<div class="preview" data-target="p-10">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app7.png" alt="">
    <h3>PESHWARI BHARWAN ALOO
    </h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
    <p>Stuffed potato barrels tandoor smoked and finished with tangy lime dressing</p>
    <div class="price">₹170</div>
    <div class="form-check text-center">
       
       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    </div>
</div>

<div class="preview" data-target="p-11">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app8.jpg" alt="">
    <h3>TANDOORI SUBZI PLATTER
    </h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
    <p>An all-time favorite cauliflower ,brocoli,sweet potatoes,tomato,&amp;seasonal vegetables grilled</p>
    <div class="price">₹180</div>
    <div class="form-check text-center">
       
       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    </div>
</div>

<div class="preview" data-target="p-12">
   <i class="fas fa-times"></i>
   <img src=".\assets\img\app41.jpg" alt="">
   <h3>TANDOORI CHICKEN
   </h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Tender chicken marinated with tandoori spices.</p>
   <div class="price">₹210</div>
   <div class="form-check text-center">
      
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
   </div>
</div>

<div class="preview" data-target="p-13">
   <i class="fas fa-times"></i>
   <img src=".\assets\img\app42.jpg" alt="">
   <h3>CHICKEN CHOPS AFGHANI
   </h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Tandoor smoked chicken chops flavored with Afghan spices.</p>
   <div class="price">₹165</div>
   <div class="form-check text-center">
      
     <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
   </div>
</div>

<div class="preview" data-target="p-14">
      <i class="fas fa-times"></i>
      <img src=".\assets\img\app43.jpg" alt="">
      <h3>MURG MAKHAN MALAI
      </h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>Tender pieces of boneless chicken supreme marinated with Amul Cheese, butter, cream and chili blend.</p>
      <div class="price">₹160</div>
      <div class="form-check text-center">
         
         <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
      </div>
</div>

<div class="preview" data-target="p-15">
      <i class="fas fa-times"></i>
      <img src=".\assets\img\app44.jpg" alt="">
      <h3>CLASSIC CHICKEN TIKKA
      </h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>An all-time favorite grilled boneless chicken</p>
      <div class="price">₹170</div>
      <div class="form-check text-center">
         
         <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
      </div>
</div>

<div class="preview" data-target="p-16">
      <i class="fas fa-times"></i>
      <img src=".\assets\img\app45.jpg" alt="">
      <h3>MURG RESHMI KABAB
      </h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>Minced chicken marinated with ginger and garlic, cooked on skewer</p>
      <div class="price">₹180</div>
      <div class="form-check text-center">
         
         <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
      </div>
</div>

<div class="preview" data-target="p-17">
      <i class="fas fa-times"></i>
      <img src=".\assets\img\app46.jpg" alt="">
      <h3>TANDOORI SHRIMP
      </h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>Shelled shrimps in special tandoori spices and grilled</p>
      <div class="price">₹200</div>
      <div class="form-check text-center">
         
         <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
      </div>
</div>

<div class="preview" data-target="p-18">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app9.jpg" alt="">
    <h3>MOGHUL SIGNATURE MALAI KOFTA</h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
    <p>Potato and cheese croquettes in a mild nutty sauce</p>
    <div class="price">₹210</div>
    <div class="form-check text-center">
       
       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    </div>
</div>

<div class="preview" data-target="p-19">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app10.jpeg" alt="">
    <h3>CHUKUNDER SHAM SAVERA</h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
    <p>A wholesome beetroot and cheese croquettes in a special spinach sauce</p>
    <div class="price">₹200</div>
    <div class="form-check text-center">
       
       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    </div>
</div>

<div class="preview" data-target="p-20">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app11.jpg" alt="">
    <h3>PANEER JALFREZI
    </h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
    <p>Julieness of homemade cottage cheese,onions,tomatoes and bell peppers cooked with special spices</p>
    <div class="price">₹220</div>
    <div class="form-check text-center">
       
       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    </div>
</div>

<div class="preview" data-target="p-21">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app12.jpg" alt="">
    <h3>OLD DELHI BUTTER PANEER    </h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
    <p>A classic old delhi style signature recipe of world famous butter paneer</p>
    <div class="price">₹180</div>
    <div class="form-check text-center">
       
       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    </div>
</div>

<div class="preview" data-target="p-22">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app13.jpg" alt="">
    <h3>PANEER MIRCH KA SALAN
    </h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
    <p>Homemade cottage cheese cubes and long peppers cooked in an authentic spicy Hyderabadi curry with peanuts and a hint of tamarind</p>
    <div class="price">₹190</div>
    <div class="form-check text-center">
       
       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    </div>
</div>

<div class="preview" data-target="p-23">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app14.jpg" alt="">
    <h3>METHI MALAI MATTAR
    </h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
    <p>A delicate combination of fenugreek leaves and amp;green peas in a creamy sauce</p>
    <div class="price">₹190</div>
    <div class="form-check text-center">
       
       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    </div>
</div>

<div class="preview" data-target="p-24">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app15.png" alt="">
    <h3>CHANNA AMRITSARI
    </h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
    <p><Curried chickpeas cooked in a combination of fresh spices and herbs - Amritsari style </p>
    <div class="price">₹185</div>
    <div class="form-check text-center">
       
       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    </div>
</div>

<div class="preview" data-target="p-25">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app16.jpg" alt="">
    <h3>SUBZI DIWANI HANDI</h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
    <p>A fine melange of vegetables cooked with seasonal blend of saag leaves</p>
    <div class="price">₹180</div>
    <div class="form-check text-center">
       
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    </div>
</div>

<div class="preview" data-target="p-26">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app17.jpg" alt="">
    <h3>CLASSIC BHINDI MASALA</h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
    <p>Fresh garden Okra pan cooked with a blend of spices and herbs</p>
    <div class="price">₹175</div>
    <div class="form-check text-center">
       
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    </div>
</div>

<div class="preview" data-target="p-27">
   <i class="fas fa-times"></i>
   <img src=".\assets\img\app47.jpg" alt="">
   <h3>OLD DELHI BUTTER CHICKEN</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>A classic Old Delhi style signature recipe of world-famous butter chicken</p>
   <div class="price">₹200</div>
   <div class="form-check text-center">
      
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
   </div>
</div>

<div class="preview" data-target="p-28">
   <i class="fas fa-times"></i>
   <img src=".\assets\img\app48.jpg" alt="">
   <h3>MURGH TIKKA MASALA</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Grilled chicken finished in a curry of onions, tomatoes and bell peppers</p>
   <div class="price">₹210</div>
   <div class="form-check text-center">
      
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
   </div>
</div>

<div class="preview" data-target="p-29">
   <i class="fas fa-times"></i>
   <img src=".\assets\img\app49.jpg" alt="">
   <h3>BADSHAI MURGH KA SALAN</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>A Royal preparation of chicken pocket filled with cheese and roasted nuts, baked and served in a flavorful gravy</p>
   <div class="price">₹200</div>
   <div class="form-check text-center">
      
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
   </div>
</div>

<div class="preview" data-target="p-30">
   <i class="fas fa-times"></i>
   <img src=".\assets\img\app50.jpg" alt="">
   <h3>MURGH HYDERABADI CURRY</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>A spicey preparation – southern style chicken curry. </p>
   <div class="price">₹220</div>
   <div class="form-check text-center">
      
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
   </div>
</div>

<div class="preview" data-target="p-31">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app18.jpg" alt="">
    <h3>NAAN/BUTTER NAAN/ROTI</h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
    <div class="price">₹25</div>
    <div class="form-check text-center">
       
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    </div>
</div>

<div class="preview" data-target="p-32">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app19.jpg" alt="">
    <h3>ALOO PARATHA/PUDINA PARATHA/KABULI PARATHA</h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
    <div class="price">₹30</div>
    <div class="form-check text-center">
       
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    </div>
</div>

<div class="preview" data-target="p-33">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app51.jpg" alt="">
    <h3>KANDHARI NAAN</h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
    <div class="price">₹25</div>
    <div class="form-check text-center">
       
       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    </div>
</div>

<div class="preview" data-target="p-34">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app21.jpg" alt="">
    <h3>CHILLI CHEESE NAAN/KHEEMA NAAN</h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
    <div class="price">₹30</div>
    <div class="form-check text-center">
       
       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    </div>
</div>

<div class="preview" data-target="p-35">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app22.jpg" alt="">
    <h3>BULLET NAAN</h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
 
    <div class="price">₹35</div>
    <div class="form-check text-center">
       
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    </div>
</div>

<div class="preview" data-target="p-36">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app23.jpg" alt="">
    <h3>CHAPATI</h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
 
    <div class="price">₹20</div>
    <div class="form-check text-center">
       
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    </div>
</div>

<div class="preview" data-target="p-37">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app52.jpeg" alt="">
    <h3>PLAIN BASMATI</h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
    <p>A variety of long, slender-grained aromatic rice </p>
    <div class="price">₹140</div>
    <div class="form-check text-center">
       
       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    </div>
</div>

<div class="preview" data-target="p-38">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app25.jpg" alt="">
    <h3>KASHMIRI PULAO</h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
    <p>An aromatic and mildy sweet, flavoured with spices and saffron with the crunch of fruits, dry fruits and fried onions.</p>
    <div class="price">₹170</div>
    <div class="form-check text-center">
       
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    </div>
</div>

<div class="preview" data-target="p-39">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app26.jpg" alt="">
    <h3>VEG BIRYANI</h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
    <p>Vegetable biryani is an aromatic rice dish made with basmati rice, mix veggies, herbs & biryani spices. </p>
    <div class="price">₹180</div>
    <div class="form-check text-center">
       
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    </div>
</div>

<div class="preview" data-target="p-40">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app27.jpg" alt="">
    <h3>LUCKNAWI DUM VEG  BIRYANI</h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
    <p>Lucknowi Biryani is cooked with the Dum Method in a handi ,where the rice and vegetables are cooked separately and then layered in alternate layers, flavoured with rose and kera essence (ittars) and cooked on slow flame with the top sealed tightly. </p>
    <div class="price">₹185</div>
    <div class="form-check text-center">
       
       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    </div>
</div>

<div class="preview" data-target="p-41">
   <i class="fas fa-times"></i>
   <img src=".\assets\img\app53.jpg" alt="">
   <h3>LUCKNAWI MURGH DUM BIRYANI</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lucknowi Biryani is cooked with the Dum Method in a handi ,where the rice and vegetables are cooked separately and then layered in alternate layers with marinated chicken, flavoured with rose and kera essence (ittars) and cooked on slow flame with the top sealed tightly. </p>
   <div class="price">₹200</div>
   <div class="form-check text-center">
      
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
   </div>
</div>

<div class="preview" data-target="p-42">
   <i class="fas fa-times"></i>
   <img src=".\assets\img\app54.jpg" alt="">
   <h3>GOAT DUM BIRYANI</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Biryani cooked with the Dum Method in a handi ,where the rice and vegetables are cooked separately and then layered in alternate layers with marinated goat, flavoured with rose and kera essence (ittars) and cooked on slow flame with the top sealed tightly. </p>
   <div class="price">₹240</div>
   <div class="form-check text-center">
      
     <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
   
   </div>
</div>

<div class="preview" data-target="p-43">
   <i class="fas fa-times"></i>
   <img src=".\assets\img\app55.jpg" alt="">
   <h3>SHRIMP BIRYANI</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Biryani cooked with the Dum Method in a handi ,where the rice and vegetables are cooked separately and then layered in alternate layers with marinated shrimps, flavoured with rose and kera essence (ittars) and cooked on slow flame with the top sealed tightly. </p>
    <div class="price">₹280</div>
      <div class="form-check text-center">
      
       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
      
      </div>
</div>

<div class="preview" data-target="p-44">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app28.jpg" alt="">
    <h3>RAITA</h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
    <p>Yoghurt Mix-cucumber,onion,fresh mint,chopped pineapple and bhoondhi</p>
    <div class="price">₹120</div>
    <div class="form-check text-center">
       
       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
   
   </div>
</div>

<div class="preview" data-target="p-45">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app29.jpg" alt="">
    <h3>DAHI BHALLA</h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
    <p>Lentil dumpling in yoghurt,with tamarind and mint dressing</p>
    <div class="price">₹130</div>
    <div class="form-check text-center">
       
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
   </div>
</div>

<div class="preview" data-target="p-46">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app30.jpg" alt="">
    <h3>GREEN SALAD</h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
    <p>Garden fresh green salads,sliced and served with lemon and chilis</p>
    <div class="price">₹125</div>
    <div class="form-check text-center">
       
       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    </div>
</div>

<div class="preview" data-target="p-47">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app31.jpg" alt="">
    <h3>MASALA PAPAD</h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
    <p>Fried lentil crispies,topped with choppen onion,tomato,green chili and cilantro</p>
    <div class="price">₹80</div>
    <div class="form-check text-center">
       
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    </div>
</div>

<div class="preview" data-target="p-48">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app32.jpg" alt="">
    <h3>KULFI FALOODA</h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
    <p>Traditional Indian Ice cream flavored with saffron and pistachio served with falooda and rabri</p>
    <div class="price">₹90</div>
    <div class="form-check text-center">
       
       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    </div>
</div>

<div class="preview" data-target="p-49">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app33.jpg" alt="">
    <h3>GULAB JAMUN</h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
    <p>Deep fried roundels of cottage cheese and flour soaked in saffron flavored sugar syrup</p>
    <div class="price">₹90</div>
    <div class="form-check text-center">
       
       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    </div>
</div>

<div class="preview" data-target="p-50">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app34.jpg" alt="">
    <h3>ICE-CREAMS</h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
    <p>Selection of vanilla,chocolate,strawberry,mango,fig or tutti fruiti</p>
    <div class="price">₹100</div>
    <div class="form-check text-center">
       
       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    </div>
</div>

<div class="preview" data-target="p-51">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app35.jpg" alt="">
    <h3>GAJJAR HALWA</h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
    <p>Grated carrot pudding-served warm</p>
    <div class="price">₹110</div>
    <div class="form-check text-center">
       
       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    </div>
</div>

<div class="preview" data-target="p-52">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app36.jpg" alt="">
    <h3>LAVA CAKE</h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
    <p>Chocolate lava cake)</p>
    <div class="price">₹140</div>
    </form>
    <div class="form-check">
   <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"> 
</div>

</div>

<div class="preview" data-target="p-53">
    <i class="fas fa-times"></i>
    <img src=".\assets\img\app37.jpg" alt="">
    <h3>CASATA ICE CREAM</h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
    <p>Cake genoise layered sandwich with vanilla,strawberry and pistachio ice cream</p>
    <div class="price">₹135</div>
   
</div>
</div>
      <div class="text-center mb-7">
      <button class="submit-btn">
         <h1>Submit</h1>
      </button>
</div>
</div>

   </form>
<?php include("./footer.php"); ?>

</body>
<?php include("./progress-wrap.php"); ?>

<?php include("./javascript.php"); ?>
</html>

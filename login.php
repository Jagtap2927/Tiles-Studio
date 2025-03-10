<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: home.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->

   <link rel="stylesheet" href="css/style.css">
<style>
.center{
display:block;
margin-left:auto;
margin-right:auto;
width:50;}</style>

</head>
<body>
   
<!-- header section starts  -->

<section class="header" >

<img src="images/logo6.png" class="center">

   





   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

       

         <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <span><font color="black">explore, discover, brought</font></span>
               <h3><b>Make your Livingroom Classic...!</b></h3>
               <a href="#footer" class="btn"><font size="4px" color="white">discover more</font></a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span><font color="black">explore, discover, brought</font></span>
               <h3><b>Make your Bedroom Classic...!</b></h3>
               <a href="#footer" class="btn"><font size="4px" color="white">discover more</font></a>
            </div>
         </div>
         
  <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
               <span><font color="black">explore, discover, brought</font></span>
               <h3><b>Make your Bathroom Classic...!</b></h3>
               <a href="#footer" class="btn"><font size="4px" color="white">discover more</font></a>
            </div>
         </div>
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->



<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/21.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
       <p>The Tiles Studio offer's quality, value, choice and friendly service at our tile shop in Pandharpur. We stock a wide rang of wall and floor tiles made from ceramic, glass, marble and porcelien in beautiful colors and finishes.</p>
   <p>Quality :- We source our tiles directly from the best manufactures around the world with design to suit every taste and budget.</p>
      <a href="#footer" class="btn"><font size="4px" color="white">read more</font></a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> Our Products </h1>
 <div class="swiper-slide slide">
   <div class="box-container">

       <div class="box">
         <div class="image">
            <img src="Images/bathroom.jpg" alt="">
         </div>
         <div class="content">
            <h3>Bathroom Products</h3>
            
            <a href="#footer" class="btn"><font size="4px" color="white">Show More</font></a>
         </div>
      </div>
      
<div class="box">
         <div class="image">
            <img src="Images/kitchen.jpeg" alt="">
         </div>
         <div class="content">
            <h3>Kitchen Products</h3>
            
            <a href="#footer" class="btn"><font size="4px" color="white">Show More</font></a>
         </div>
      </div>
   


<div class="box">
         <div class="image">
            <img src="Images/walltiles.jpg" alt="">
         </div>
         <div class="content">
            <h3>Wall tiles</h3>
            
            <a href="#footer" class="btn"><font size="4px" color="white">Show More</font></a>
         </div>
      </div>






      </div>

   <div class="load-more"> <a href="#footer" class="btn"><font size="4px" color="white">load more</font></a> </div>

</section>

<!-- home packages section ends -->



















<!-- footer section starts  -->

<section class="footer" id=footer>
<h1 text-align: "center">
<h1><font size="4px" color="white" >You have to login</font></h1>
<a href="login1.php" class="btn" ><font size="4px" color="white">Login</font></a>
</h1>
  
 <div class="credit"> created by <span>Mr. Omkar & Miss. Rutuja</span> | all rights reserved! </div>
</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
<?php
    session_start();
    $database_name = "Products_details";
    $con = mysqli_connect("localhost","root","",$database_name);
    ?>
<!DOCTYPE html>
<html lang="en">
<head><b>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Place order</title>

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

  
</section>

<!-- header section ends -->



<div class="heading" style="background:url(images/book.jpg) no-repeat">
   <h1>Place Order</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">Place your Order!</h1>
<h2>Already a customer!Place your Order!
</h2>

 <h2>If its your first order then<a href="register.php">Click Here</a> to Login.</h2>



   <form action="book_form.php" method="post" class="book-form" target="payment.php">

      <div class="flex">

<div class="inputBox">
            <span>Username :</span>
            <input type="text" placeholder="Username" name="username">
         </div>
         <div class="inputBox">
            <span>Password :</span>
            <input type="Password" placeholder="Password" name="password">
         </div>


         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
        
         <div class="inputBox">
            <span>Total Amount:</span><br>
            <font size="5px"> <input name="amount"><?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        
                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right">$ <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
                        <?php
                    }
                ?> <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        
                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right">$ <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
                        <?php
                    }
                ?></font>
         </div>
         <div class="inputBox">
            <span>Expected delivery date :</span>
            <input type="date" name="delivery_date">
         </div>
         
      </div>
<a href="payment.php"><input type="submit" name="send"></a>

     
   </form>

</section>

<!-- booking section ends -->

















<!-- footer section starts  -->

<section class="footer">



   <div class="credit"> created by <span>Mr. Omkar & Miss. Rutuja</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
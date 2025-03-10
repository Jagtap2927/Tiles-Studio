<?php
    session_start();
    $database_name = "Products_details";
    $con = mysqli_connect("localhost","root","",$database_name);
    ?>
<html>

  
  <body background="Images/login.jpg" style="background-repeat:no-repeat; background-size:100% ">

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
		text-align: center;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: pink;
		margin: auto;
		width: 600px;
		padding: 20px;
	}

	</style>
	

	<div id="box"> 
    <div style="font-size: 20px;margin: 10px;color: black;">
   <h3 text-align=center>
 <?php
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
                            <td colspan="3" align="right">Total:</td>
                            <th align="right">Rs. <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
                        <?php
                    }
                ?>

                        <h3 align="center">Payment method</h3>
<h1 class="text-center"><font size="5px">Payment:</font>
 <a href="cart.php"><button class="btn btn-warning"><span class="glyphicon glyphicon-circle-arrow-left"></span> Go back to cart</button></option></a>
 <a href="transection.php"><button class="btn btn-success"><span class="glyphicon glyphicon-credit-card"></span> Pay Online</button></option></a>
 <a href="Successful.php"><button class="btn btn-success"><span class="glyphicon glyphicon-"></span> Cash On Delivery</button></option></a>
</select>
</h1>
        
</div></div>

<br><br><br><br><br><br>
        </body>
</html>
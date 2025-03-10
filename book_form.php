<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
$username=$_POST['username'];
$password=$_POST['password'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $amount = $_POST['amount'];
      $delivery_date = $_POST['delivery_date'];
   

      $request = " insert into book_form(username,password,name, email, phone, address, amount, delivery_date) values('$username','$password','$name','$email','$phone','$address','$amount','$delivery_date') ";
      mysqli_query($connection, $request);

	header('location: payment.php');
	
 }else{
      echo 'something went wrong please try again!';
   }

?>
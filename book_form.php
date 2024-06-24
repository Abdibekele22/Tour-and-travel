<?php

   $connection = mysqli_connect('localhost','root','','Data_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];
      $request= " insert into data_tb(name, email, phone, address, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
      $result=mysqli_query($connection, $request);
      if($result){
         echo"</br> u are succesfully regisred!";
         header('location:home.php'); 
      }
      die(mysqli_error($connection));


   
   }
?>
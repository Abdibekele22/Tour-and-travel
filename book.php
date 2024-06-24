<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>
   <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="payment/style.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/book_css.css">

   <script src="js/script.js"></script>
</head>
<body>
   
<!-- header section starts  -->
<


<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">REGISTER YOUR TRIP!</h1>

   <form action="book_form.php" method="post" class="book-form" onsubmit="sb()" >

      <div class=".container">
         <div class="inputBox">
            <span>name :</span>
            <input type="text only" placeholder="enter your name" name="name" required="">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email" required="">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="phone" placeholder="enter your number" name="phone" required="" input="10">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text only" placeholder="enter your address" name="address" required="">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text only" placeholder="place you want to visit" name="location" required="">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals" required="">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving" required="">
         </div>
     
       </div>

      <input type="submit" value="submit" class="btn" name="send" required="" >

   </form>

</section>

<!-- booking section ends -->

</body>
</html>
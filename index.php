<?php
include 'includes/header.php';
require 'includes/common.php';
if(isset($_SESSION['email'])){
    header('location: product.php?cat=ladies_shoes');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title> bootstrap Introduction</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"> 
        <script type="text/javascript" src="bootstrap/js/jqery-3.1.1.min.js"> </script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"> </script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="lifestyle.css">
    </head>
    <body>
       <div id="banner-img">
           <div class="container">
               <center>
               <div id="banner-content">
                   <h1>We Sell Lifestyle</h1>
                   <p>Flat 40% OFF on premium brands </p>
                   <a href="product.php?cat=jeans" class="btn btn-danger btn-lg active">Shop Now</a>    
               </div>
               </center>
               </div>
</div>
        <?php
       include 'includes/footer.php';
        ?>
    </body>
</html>

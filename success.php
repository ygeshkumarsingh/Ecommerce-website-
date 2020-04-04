<?php
include 'includes/header.php';

require 'includes/common.php';


$query = "INSERT into orderp select * FROM  myguests WHERE user_id='".$_SESSION["email"]."'";
      mysqli_query($conn, $query) or die($mysqli_error($conn));
$query = "delete FROM  myguests WHERE user_id='".$_SESSION["email"]."'";
      mysqli_query($conn, $query) or die($mysqli_error($conn));
	  

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Success</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"> 
        <script type="text/javascript" src="bootstrap/js/jqery-3.1.1.min.js"> </script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"> </script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       
      </div>
        <center>
        <h3 style="margin-top: 70px"> Your order is confirmed. Thank you for shopping with us. </h3><br>
        <h3><a href="product.php?cat=jeans">Click Here</a> to purchase any other item. </h3>
        </center>
    <?php
       include 'includes/footer.php';
    ?>
    </body>
</html>

<?php
include 'includes/header.php';
require 'includes/common.php';
if (isset($_SESSION['email'])) {
    header('location: product.php?cat=ladies_shoes');
    }
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"> 
        <script type="text/javascript" src="bootstrap/js/jqery-3.1.1.min.js"> </script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"> </script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
        <div class="col-sm-offset-4 col-sm-4">
            <h2 style="margin-top: 100px; font-family: arial; font-weight: bolder;">SIGN UP</h2>
            <form action="signup_script.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Email Id" required="true"
                       pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3}$"  >
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="true"
                           pattern=".{6,}">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="contact" placeholder="Contact" required="true" >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="city" placeholder="City" required="true">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="address" placeholder="Addess" required="true" >
                </div>
                <div class="form-group">
                    <button style="margin-bottom: 50px" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        </div>
        <?php
      include 'includes/footer.php';
        ?>
    </body>
</html>

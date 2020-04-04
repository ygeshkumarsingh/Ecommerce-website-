<?php
include 'includes/header.php';
require 'includes/common.php';
if(! isset($_SESSION['email'])){
    header('location : index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Settings</title>
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"> 
        <script type="text/javascript" src="bootstrap/js/jqery-3.1.1.min.js"> </script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"> </script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
     
        <div class="container">
        <div style="margin-top: 100px;" class="col-sm-offset-4 col-sm-4">
            <h2 style="font-family: arial;">Change Password</h2>
            <form action="setting_script.php" method="POST">
            <div class="form-group">
                <input type="password" class="form-control" name="oldpass" placeholder="Old Password">
            </div>
             <div class="form-group">
                <input type="password" class="form-control" name="newpass" placeholder="New Password">
            </div>
             <div class="form-group">
                <input type="password" class="form-control" name="renewpass" placeholder="Re-type New Password">
            </div>
            <button class="btn btn-primary">Change</button>
            </form>
        </div>
        </div>
        <?php
      include 'includes/footer.php';
        ?>
    </body>
</html>

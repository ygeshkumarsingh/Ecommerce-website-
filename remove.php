<?php
echo'your item is removed ';
echo'<a href="cartnew.php">back</a>';
session_start();
require 'includes/common.php';
     

$sql = "DELETE FROM myguests WHERE  user_id='".$_SESSION["email"]."' AND item_id= ".$_GET['id'];

$result = mysqli_query($conn,$sql);
						
?>
<?php
session_start();
if(!(isset($_SESSION['email']))){
    header('location: admin.php');
}
session_destroy();
header('location: admin.php');
?>

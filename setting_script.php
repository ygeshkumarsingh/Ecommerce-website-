<?php
include 'includes/header.php';
require 'includes/common.php';
if(!(isset($_SESSION['email']))){
    header('location: index.php');
}
$old_pass = $_POST['oldpass'];
//print_r($old_pass);
//die();
$old_pass = mysqli_real_escape_string($conn, $old_pass);
$old_pass = MD5($old_pass);

$new_pass = $_POST['newpass'];
//echo $new_pass;
$new_pass = mysqli_real_escape_string($conn, $new_pass);
$new_pass = MD5($new_pass);
//echo $new_pass;
$new_pass1 = $_POST['renewpass'];
$new_pass1 = mysqli_real_escape_string($conn, $new_pass1);
$new_pass1 = MD5($new_pass1);
//echo $new_pass1."dsfdsf";
$query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
$result = mysqli_query($conn, $query)or die($mysqli_error($conn));
$row = mysqli_fetch_array($result);
$orig_pass = $row['password'];

if ($new_pass != $new_pass1) {
	//echo "gffgf";
    header('location: setting.php?error=The two passwords don\'t match');
} 
else {
    if ($old_pass == $orig_pass) {
        $query = "UPDATE  users SET password = '" . $new_pass . "' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($conn, $query) or die($mysqli_error($conn));
        header('location: setting.php?error=Password Updated');
    } 
    else{
        header('location: setting.php?error=Wrong Old Password');
    }
}
?>
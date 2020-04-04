<?php
//include 'includes/header.php';
require 'includes/common.php';
$name = $_POST['name'];
$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(preg_match($regex_email, $email)){
    echo 'incorrect email';
}
$password = $_POST['password'];
$password = md5($password);
if(strlen($password)<6){
    echo 'Password should have at-least 6 characters';
}
$contact = $_POST['contact'];
$city = $_POST['city'];
$address = $_POST['address'];
 $select_query = "select id from users where email = '$email' ";
 $select_query_result = mysqli_query($conn,$select_query);
 $total_fetched_row = mysqli_num_rows($select_query_result);
 if($total_fetched_row >=1){
     echo 'ERROR this email id already exist';
 }
 else{
     $insert_query = "insert into users(name,email,password,contact,city,address) values ( '$name','$email','$password','$contact','$city','$address') ";
     $insert_query_submit = mysqli_query($conn, $insert_query) ;
     $user_id = mysqli_insert_id($conn);
     $_SESSION['email']= $email;
     $_SESSION['user_id']=$user_id;
     header('location: product.php?cat=ladies_shoes');    
 }   
?>
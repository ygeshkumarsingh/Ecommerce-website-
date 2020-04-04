
    <?php
	echo'<a href="login.php">back</a>';
session_start();
    require 'includes/common.php';
	?>
	<?php
	$email = mysqli_real_escape_string($conn,$_POST['email']);

 $password = mysqli_real_escape_string($conn,$_POST ['password']);
$password=MD5($password);
$select_query = "SELECT id, email,password FROM users WHERE email='$email' AND password='$password'";
$select_query_result = mysqli_query($conn, $select_query) ;
$total_row_fetched = mysqli_num_rows($select_query_result);
 $total_row_fetched;
if($total_row_fetched==0){
   echo '<h1> no such user </h1>'   ;
}
else{
$row= mysqli_fetch_array($select_query_result);
$_SESSION['email']=$email;
$_SESSION['user_id']=$row['id'];
$user_id = $_SESSION['user_id'];
header('location:product.php?cat=jeans');
}
?>


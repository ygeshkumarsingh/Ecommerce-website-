<?php
session_start();
require 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
       <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"> 
        <script type="text/javascript" src="bootstrap/js/jqery-3.1.1.min.js"> </script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"> </script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .row-style{
                margin-top: 100px;
            }
            </style>
    </head>
    <body>
    
        
        <div class="container">
            <center>
            <div class="row row-style">
                <div class=" col-sm-offset-3 col-sm-6">
                    <div class="panel panel-primary" style="margin-bottom: 40px;"> 
                    <div class="panel panel-heading">
                        <h3>Login Here</h3>
                    </div>
                    <div class="panel panel-body">
                        <p class="text-warning">Login to make a purchase</p>
                        <form action="admin_script.php" method="POST">
                            <div class="form-group">
                            <label for="email">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <button class="btn-primary btn-lg">Login</button>
                        </form>
                    </div>
					
					                    <div class="panel panel-footer">
                        <p><a href="login.php?forgot_pass">forgot password</a></p>
						<input type="submit" name="c_login" value="login"/>
                        </div>
						<?php 
						if(isset($_GET['forgot_pass'])){
							echo"
							<div align='center'>
							<b>ENTER your email below we'll send your password to your email</b><br>
							<form action='' method='post'>
							<input type='text' name='c_email' placeholder='enter your email'/></br>
							<input type ='submit' name='forgot_pass' value='send me password'/>
							</form>
							</div>
						";
							if(isset($_POST['forgot_pass'])){
								$c_email=$_POST['c_email'];
								$sel_c="select * from users where email='$c_email'";
								
								$run_c=mysqli_query($conn,$sel_c);
								$r = mysqli_fetch_assoc($run_c);
								echo $r['email'];
								$check_c=mysqli_num_rows($run_c);
							
								if($check_c==0){
									echo"<script>alert('this mail does not exist in our database,soory')</script>";
									exit();
		                     	}
							
							else{
								$from='py27091998@gmail.com';
								$subject="your password";
								$message="
								<html>
								<h3>dear $c_email</h3>
								<p> your requested password</p>
								<b>your password is</b><span style='color:red;'></span>
								<h3> thank you for using our website </h3>
								
								</html>";
								mail($c_email,$subject,$message,$from);
								echo"<script>alert('password was sent to your email,please check your inbox !')</script>";
								echo"<script>window.open('login.php','self')</script>";
							}
							
							}
						}
						
						?>
							<div class="panel panel-footer">
                        <p>Don't have an account?<a href="signup.php">Register</a></p>
                        </div>
                </div>
                </div>
            </div>
            </center>  
    </div>
         
    </body>
</html>

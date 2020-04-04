<?php 
session_start();
?>
<div class="navbar navbar-inverse navbar-fixed-top">   
    <div class="container">     
        <div class="navbar-header"> 
            <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar">      
                <span class="icon-bar"></span>        
                <span class="icon-bar"></span>      
                <span class="icon-bar"></span>      
            </button>            
            <a class="navbar-brand" href="product.php?cat=jeans">jeans</a>    
			<a class="navbar-brand" href="product.php?cat=shirts">shirts</a>    
			<a class="navbar-brand" href="product.php?cat=pents">pents</a>  
				<a class="navbar-brand" href="product.php?cat=shoes">shoes</a>  
        </div>        
        <div class="collapse navbar-collapse" id="myNavbar"> 
            <ul class="nav navbar-nav navbar-right">            
     <?php    	 
     if (isset($_SESSION['email'])) {    
         ?>                  
                <li><a href = "cartnew.php"><span class = "glyphicon glyphicon-shoppingcart"></span> Cart </a></li>   
                <li><a href = "setting.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>  
                <li><a href = "logout.php"><span class = "glyphicon glyphicon-login"></span> Logout</a></li>       
                             
     <?php 
     }
      else {     
          ?>     
		
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>   
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>   
                      <?php                 
                      }                  
                      ?>          
            </ul>       
        </div>    
    </div> 
    </div> 
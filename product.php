
<?php
include 'includes/header.php';
require 'includes/common.php';
     



?>
 
 <br>
 <br>
 <!DOCTYPE html>  
 <html>  
      <head>  
        
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:700px;">  
          
                <?php  
				$ct = $_REQUEST['cat'];
                $query = "SELECT * FROM pr where category='".$ct."' ORDER BY id ASC";  
                $result = mysqli_query($conn, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  
			
                     <form method="post" action="cartnew.php?action=add&id=<?php echo $row["id"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                                <h4 class="text-info">product name:<?php echo $row["name"]; ?></h4>  
							  <img src="images/<?php echo $row["image"];  ?>" style="height:200px; width:100px;" class="img-responsive"  /><br />  

                             <h4 class="text-danger">product price:<?php echo $row["price"]; ?></h4>  
                               <input type="text" name="quantity" class="form-control" value="" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" /> 
                                  <a href="cartnew.php?action=add&id=<?php echo $row["id"]; ?>"></a>
							   
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
				</body>
				</html>
				

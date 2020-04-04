
<?php
echo'<a href="product.php?cat=jeans">back</a>';
session_start();
require 'includes/common.php';
$total=0;
?>
<?php
 if (!isset($_SESSION['email'])) { 
  
	   echo'   <script>
  window.location.href = "login.php";
</script>';

	 
 }
 
?>
<?php
if(isset($_POST['add_to_cart']))
{
$qty=$_POST['quantity'];
}
/*{echo'my cart';}
else
{

$qty=$_POST['quantity'];
$sql4="INSERT INTO myguests values(".$_GET['id'].",'".$_SESSION['email']."',".$qty.")";
	$result = mysqli_query($conn,$sql4);
	echo mysqli_error($conn);
}
*/
?>
<?php
if(!isset($_GET['id']))
{
	$sql = "SELECT * FROM myguests WHERE user_id='".$_SESSION["email"]."'";
	//$lnk = '<a href="remove.php?id='.$_GET['id'].'">Remove</a>';
	
}
else
{
$sql = "SELECT * FROM myguests WHERE user_id='".$_SESSION["email"]."' AND item_id= ".$_GET['id'];

}
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) >= 1) {
	
	$sql1 = "SELECT * FROM myguests WHERE user_id='".$_SESSION["email"]."'";
	$result1 = mysqli_query($conn,$sql1);
	//$lnk = '<a href="remove.php?id='.$_GET['id'].'">Remove</a>';
	//$lnk = '<a href="remove.php?id=">Remove</a>';
	echo"<table>
	
      <tr>
        <th>id</th><th>price</th><th>name</th><th>quantity</th><th>discription</th><th>category</th><th>total</th>
      </tr>";
	                     
	                while($row = mysqli_fetch_array($result1))  
                     {  
							$sql2 = "SELECT * FROM pr WHERE id=".$row['item_id'];
							
						$result2 = mysqli_query($conn,$sql2);
						$row2 = mysqli_fetch_array($result2);
					$total=$total+($row2 ['price'] * $row['quantity']);
	       echo  " <tr>
						<td>". $row2['id'] ."</td>
						<td>". $row2['price'] ."</td>
						<td>". $row2['name'] ."</td>
						<td>". $row['quantity'] ."</td>
						<td>". $row2['discription'] ."</td>
						<td>". $row2 ['category']."</td>
						<td>". $row2 ['price'] * $row['quantity']."</td>
						<td>".'<a href="remove.php?id='.$row["item_id"].'">Remove</a>'."</td>
						</tr>";
		
		  
		  
		 
	
					}//closing of while
				
	echo"</table>";
	echo'<table>';
echo "<td>total:$total</td>";
echo'</table> '; 
	
                     echo'<table>';
echo "<td><a href='success.php'><button>confirm order</button></a></td>";
echo'</table> ';  
                ?>  
               
              <?php              
                                    
			}		
				
else
{
	if(!isset($_GET['id']))
	{
		echo' is empty';
	}
else{
	$sql="INSERT INTO myguests values(".$_GET['id'].",'".$_SESSION['email']."',".$qty.")";
	$result = mysqli_query($conn,$sql);
	echo mysqli_error($conn);
	
	
	$sql1 = "SELECT * FROM myguests WHERE user_id='".$_SESSION["email"]."'";
	$result1 = mysqli_query($conn,$sql1);
	  if(mysqli_num_rows($result1) > 0)  
                {  
			
			echo "<table><tr>
        <th>id</th> <th>price</th><th>name</th> <th>quantity</th> <th>discription</th><th>category</th><th>total</th><th>net amount</th>
      </tr>";
                     while($row = mysqli_fetch_array($result1))  
                     {  
							$sql2 = "SELECT * FROM pr WHERE id=".$row['item_id'];
							
						$result2 = mysqli_query($conn,$sql2);
						$row2 = mysqli_fetch_array($result2);
					
						$total=$total+($row2 ['price'] * $row['quantity']);
      
	       echo  " <tr> <td>". $row2['id'] ."</td> <td>". $row2['price'] ."</td> <td>". $row2['name'] ."</td>
		  <td>". $row['quantity'] ."</td> <td>". $row2['discription'] ."</td>
		  <td>". $row2 ['category']."</td><td>". $row2 ['price'] * $row['quantity']."</td><td>".'<a href="remove.php?id='.$row["item_id"].'">Remove</a>'."</td> </tr>";
	
	}
	echo"</table>";
	echo'<table>';
echo "<td>total:$total</td>";
echo'</table> '; 
  
    
                       
}
   echo'<table>';
echo "<td><a href='success.php'><button>confirm order</button></a></td>";
echo'</table> '; 
     
} 
}
?>
                       

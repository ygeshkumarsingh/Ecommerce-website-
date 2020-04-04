
<?php

//$link = mysqli_connect("localhost","root", "", "ecommerce") ;

require 'includes/common.php';
?>
<?php

echo"<a href='adminlogout.php'>logout</a>";
?>

<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="grid_10">
<div class="box round first">
<h2>
add product</h2>

<form name="form1" action="" method="post" enctype="multipart/form-data">
  <div class="row" >
  <div class="form-group col-sm-6">
 <label for="product_name">product name:</label>
<input class="form-control " type="text" name="pnm"/>
</div>
  <div class="form-group col-sm-6">
 <label for="product_price">product price:</label>
<input class="form-control " type="text" name="pprice"/>
</div>
</div>

<div class="row" >
  <div class="form-group col-sm-6">
 <label for="product_quality">product quantity:</label>
<input class="form-control " type="text" name="pqty"/>
</div>
 <div class="form-group col-sm-6">
 <label for="email">product image:</label>
<input class="form-control " type="file" name="pimage">
</div>
</div>

<div class="row" >
<div class="form-group col-sm-6">
 <label for="email">product discription:</label>
 <textarea  class="form-control" cols="15" rows="10" name="pdes" ></textarea>
</div>
<div class="form-group col-sm-6">
<label for="email">product catogory:</label>
<select name="pcategory" class="form-control">
<option value="jeans">jeans</option>
<option value="shirts">shirts</option>
<option value="pents">pents</option>
<option value="shoes">shoes</option>
</select>
</div>
</div>
<div class="row" >
    <center>
<div class="form-group col-sm-12">

<button type="submit" class="btn btn-primary"  name="submit1" value="upload">Submit</button>
</div>
</center>
</div>
</form>

<?php
if(isset($_POST["submit1"]))
{

  //echo "iuhgiuhgufih";
$v1=rand(1111,9999);
$v2=rand(1111,9999);
$v3=$v1.$v2;
$v3=md5($v3);
$fnm=$_FILES["pimage"]["name"];
$dst="./images/".$v3.$fnm;
move_uploaded_file($_FILES["pimage"]["tmp_name"],$dst);
//$qry="insert into pr(ht) values('$_POST['pnm']',$_POST['pprice'],$_POST['pqty'],'$dst','$_FILES['pimage']['name']','$_POST['pcategory']')";
$qry = "insert into pr(name,image,price,quantity,discription,category) values('".$_POST['pnm']."','".$fnm."',".$_POST['pprice'].",".$_POST['pqty'].",'".$_POST['pdes']."','".$_POST['pcategory']."')";
//print_r($qry);
mysqli_query($conn,$qry);
	}
	?>
</div>
</body>
</html>

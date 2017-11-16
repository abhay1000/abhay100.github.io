<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="index.css">
 <style>
 table
 { 
 border: 2px solid white;
 position:absolute;
 top: 110px;
 }
 </style>
</head>
<body>
 <header>
		<ul>
		<center>
		     <a href="index.hmtl"><img id="logo" src="../osg/image/logo.jpg" alt="logo" /></a>
			 <li><a href="index.html">Home</a</li>
			 <li><input type="search" name="search"><li>
			 <li><img src="../osg/image/icon.png" style="width:15px;" alt="search"/></li>
			 <li><a href="cart.php">Cart</a></li>
			 <li><a href="login.html">Login</a></li>
			 <li><a href="register.html">Register</a></li>
		</center>
		</ul>
  </header>
 
<table>
 <tr>
 <td>
 <?php
 session_start();
 include("config.php");
 $email = $_SESSION['email'];
 /*Product_id*/
 $product_id="SELECT product_id from cart WHERE email='$email'";
 $eproduct_id=mysqli_query($conn,$product_id);
 $deproduct_id=mysqli_fetch_row($eproduct_id);
 echo $deproduct_id[0];
?>
 
</td>

<td>
<?php
session_start();
include("config.php");
/*Product_Name*/
 $product_name="SELECT product_description from cart where email='$email'";
 $eproduct_name=mysqli_query($conn,$product_name);
 $deproduct_name=mysqli_fetch_row($eproduct_name);
 echo $deproduct_name[0];
 ?>
</td>

<td>
<?php
session_start();
include("config.php");
/*Product_Name*/
 $quantity="SELECT quantity from cart where email='$email'";
 $equantity=mysqli_query($conn,$quantity);
 $dequantity=mysqli_fetch_row($equantity);
 echo $dequantity[0];
 ?>
</td>
</tr>
 
<tr>
 <form action="cart_update.php" method="post">
 <td><input type="submit" value="Update"></td>
</form>

 <form action="cart_delete.php" method="post">
 <td><input type="submit" value="Delete"></td>
</form>
</tr>
</table>
</body>
</html>

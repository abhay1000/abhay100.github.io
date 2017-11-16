<!DOCTYPE html>
<html>
<head>
 <title>Online Shopping</title>
 <link rel="stylesheet" type="text/css" href="index.css">
 <style>
    div#register_page
	{
		color: red;
		background-color: white;
		height: 500px;
		position: absolute;
		top: 100px;
		width: 100%;
		
	}
	h2#register_page
	{
		position: absolute;
		top: 50%;
		left: 50%;
	}
 
 
 
 
 </style>
</head>
<body>

<header>
		<ul>
		<center>
		     <img id="logo" src="../osg/image/logo.jpg" alt="logo" />
			 <li>Home</li>
			 <li><input type="search" name="search"><li>
			 <li><img src="../osg/image/icon.png" style="width:15px;" alt="search"/></li>
			 <li>Cart</li>
			 
		</center>
		</ul>
  </header>

 <div id="register_page">
  <h2 id="register_page"> 
<?php
/*data fetch by register.html*/
$name = $mobile = $email = $password = "";
$name = $_POST['yname'];
$mobile = $_POST['tel'];
$email = $_POST['email'];
$upassword = $_POST['password'];

include("config.php");

$chrp = "SELECT email FROM customer WHERE email='$email'";
$echrp = mysqli_query($conn,$chrp);
$sql = "INSERT INTO customer(name,mobile,email,password) VALUES('$name','$mobile','$email','$upassword')";

if(!(mysqli_num_rows($echrp) == TRUE))
{
if(mysqli_query($conn, $sql))
	{
    echo "Successfully Register:" . $_POST['email'];
    } 
else
	{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
}
?>
<a href="login.html">Click to Login</a>
 </h2>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
 <head>
    <title>Online Shopping</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>
</body bgcolor="white">


<header>
		<ul>
		<center>
		     <img id="logo" src="../osg/image/logo.jpg" alt="logo" />
			 <li><a href="index.html">Home</a></li>
			 <li><input type="search" name="search"><li>
			 <li><img src="../osg/image/icon.png" style="width:15px;" alt="search"/></li>
			 <li>Cart</li>
			 <li>
			 <?php
			
			 
			 
			 
			 
			 
			 ?>
			 </li>
		</center>
		</ul>
</header> 

<div style="width:100%;position:absolute;top:105px;">
<center>
<?php
session_start();
$cookie_user = $cookie_userv = $cookie_pass = $cookie_passv = $semail = #supassword = $email = $upassword = "";
$email = $_POST['email'];
$upassword = $_POST['password'];


/*echo $email . "<br>" . $upassword;*/

include("config.php");

echo "<br>";

$temp1 = "SELECT email FROM customer WHERE email='$email'";
/*print_r($temp1);*/
echo "<br>";

$user = mysqli_query($conn,$temp1);
/*print_r($user*/
echo "<br>";

$temp2 = "SELECT password FROM customer WHERE password='$upassword'";
/*print_r($temp2);*/
echo "<br>";

$pass = mysqli_query($conn,$temp2);
/*print_r($pass);*/
echo "<br>";
$_SESSION['image'] = "icon.png";

if(mysqli_num_rows($user) && mysqli_num_rows($pass))
{
	$cookie_user = "user";
	$cookie_userv = $_POST['email'];
	$cookie_pass = "pass";
	$cookie_passv = $_POST['password'];
	setcookie($cookie_user,$cookie_userv,time()+(86400*30),"/");
	setcookie($cookie_pass,$cookie_passv,time()+(86400*30),"/");
	$_SESSION['email'] = $email;
	$_SESSION['password'] = $upassword;
	echo "Welcome to Steam";
	echo "<center>" . "Hello," . $_COOKIE[$cookie_user] . "</center>";

}
else if($semail=='admin@gmail.com' && $supassword==admin)
{
	header('Location: ../osg/index.html');
}

else
{
	echo "failed";
}
?>
<a href="index_sp.php">Click Here</a>
</center>
</div>

</body>
</html>
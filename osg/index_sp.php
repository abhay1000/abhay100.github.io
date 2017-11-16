<!DOCTYPE html>
<html>
 <head>
    <title>Online Shopping</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="index.css">
 </head>
 <body>
  <header>
		<ul>
		<center>
		     <img id="logo" src="../osg/image/logo.jpg" alt="logo" />
			 <li>Home</li>
			 <li><input type="search" name="search"><li>
			 <li><img src="../osg/image/icon.png" style="width:15px;" alt="search"/></li>
			 <li><a href="cart.php">Cart</a></li>
			 <li>
			 <?php
			 session_start();
			 echo "Hello," . $_SESSION['email'];
			 
			 
			 
			 
			 
			 ?>
			 </li>
		</center>
		</ul>
  </header>
  
  <div id="store">
    <a href="store_sp.php"><h2 id="store">STORE</h2></a>
    <img src="../osg/image/store.jpg" alt="store"/>
  </div>
  
  <div id="opurchase">
    <h2 id="opurchase">ONLINE PURCHASE</h2>
    <img src="../osg/image/opurchase.jpg" alt="online purchase"/>
  </div>
  
  <div id="giftcard">
    <h2 id="giftcard">GIFT CARD</h2>
    <img src="../osg/image/giftcard.jpg" alt="giftcard"/>
  </div>
 
 
 
 
 
 
 
 
 
 
 </body>
</html>

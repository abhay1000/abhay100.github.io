<!DOCTYPE html>
<html>
 <head>
    <title>Online Shopping</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>
</body>

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
			 session_start();
			  echo "Hello," . $_SESSION['email'];
			 
			 
			 
			 
			 
			 ?>
			 </li>
		</center>
		</ul>
</header>
 
<div id="graphics">
<img src="../osg/image/graphics.jpg">
<a href="graphicsc_sp.php"><h2 id="graphics">GRAPHICS CARD</h2></a> 
</div>


<div id="headphone">
<img src="../osg/image/headphone.jpg">
<a href="gheadphone_sp.php"><h2 id="headphone">HEADPHONE</h2></a>
</div>
 
<div id="mouse">
<a href="gmouse_sp.php"><h2 id="mouse">MOUSE</h2></a>
<img src="../osg/image/mouse.jpg">
</div>
 
 
 
 
 
 
 
 
 </body>
</html>
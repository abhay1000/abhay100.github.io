<!DOCTYPE html>
<html>
 <head>
    <title>Online Shopping</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

 </head>
<body>
 
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
 
 
 <center>	
 <div style="position:relative;top:100px;" id="container">
    <div id="bxmodel">
    <img src="../osg/image/headphone/sades_sa930.jpg" alt="msi">
	<span>SADES Sa 930 Stereo Gaming Headset With Mic Volume Control</span>
	<span><p>RS 1200/-</span>
	</div>
	
	<div id="bxmodel">
	<img src="../osg/image/headphone/tecknet.jpg" alt="msi">
	<span>TeckNet 7.1 Surround Sound Gaming Headphones Headset and Microphone</span>
	<span><p>RS 1600/-</span>
	</div>

	<div id="bxmodel">
	<img src="../osg/image/headphone/sades.jpg" alt="asus">
	<span>Sades PC osgfessional Gaming Headset With Microphone Mic</span>
	<span><p>RS 2000/-</span>
	</div>
 </div>
 </center>
 
 <center>
 <div style="position:relative;top:90px;" id="container">
    <div id="bxmodel">
    <img src="../osg/image/headphone/ct-820.jpg" alt="msi">
	<span>Ct-820 PC Laptop Gaming Headphones 7 Color LED Light Headset Microphone With Mic</span>
	<span><p>RS 4000/-</span>
	</div>
	
	<div id="bxmodel">
	<img src="../osg/image/headphone/beexcellent.jpg" alt="asus">
	<span>Beexcellent Gaming Headset With Mic, PS4 PC Gaming Headphones</span>
	<span><p>RS 4500/-</span>
	</div>
	
	<div id="bxmodel">
	<img src="../osg/image/headphone/sades2.jpg" alt="msi">
	<span>Sades SA920 3.5mm Wired Over Ear Stereo Gaming Headphones</span>
	<span><p>RS 5000/-</span>
	</div>
 </div>
 </center>
 
  <center>
 <div style="position:relative;top:90px;" id="container">
    <div id="bxmodel">
    <img src="../osg/image/headphone/sades_arcmage.jpg" alt="msi">
	<span>SADES Arcmage 3.5mm PC Gaming Headset Surround Sound Headband Headphones </span>
	<span><p>RS 5500/-</span>
	</div>
	
	<div id="bxmodel">
	<img src="../osg/image/headphone/turtle_beach.jpg" alt="asus">
	<span>Turtle Beach Ear Force XP400 Black/Gray Headband Headsets</span>
	<span><p>RS 6000/-</span>
	</div>
	
	<div id="bxmodel">
	<img src="../osg/image/headphone/logitech.jpg" alt="msi">
	<span>Logitech G230 High Performance Stereo Gaming Headphones </span>
	<span><p>RS 4500/-</span>
	</div>
 </div>
 </center>

 <center>
 <div style="position:relative;top:90px;" id="container">
    <div id="bxmodel">
    <img src="../osg/image/headphone/logitech2.jpg" alt="msi">
	<span>Logitech G35 7.1-Channel Surround Sound Gaming Headset</span>
	<span><p>RS 4000/-</span>
	</div>
	
	<div id="bxmodel">
	<img src="../osg/image/headphone/honstek.jpg" alt="asus">
	<span>Honstek G6 PC Gaming Headset LED USB Stereo Surround Sound Headphones</span>
	<span><p>RS 8000/-</span>
	</div>
	
	<div id="bxmodel">
	<img src="../osg/image/headphone/asus.png" alt="msi">
	<span>ASUS STRIX 7.1 Gaming Headset</span>
	<span><p>RS 10,000/-</span>
	</div>
 </div>
 </center>

 </body>
</html>
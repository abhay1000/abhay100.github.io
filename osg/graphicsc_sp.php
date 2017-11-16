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
 
<center>
 <div style="position:relative;top:100px;" id="container">
    <div id="bxmodel">
    <img src="../osg/image/graphics/evga_gtx_titan_z.jpg" alt="evga_gtx_titan_z">
	<span>EVGA GTX TITAN Z 12GB GDDR5 768BIT DVI-I/D</span>
	<span><p>RS 5,12,000/-</p></span>
	</div>
	
	<div id="bxmodel">
	<img src="../osg/image/graphics/nvidia_gtx_titan_x.jpg" alt="nvidia_gtx_titan_x">
	<span>NVIDIA GTX TITAN X PASCAL 12GB GDDR5X</span>
	<span><p>RS 3,70,000/-</p></span>
	</div>
	
	<div id="bxmodel">
	<img src="../osg/image/graphics/evga_gtx_titan_x.jpg" alt="evga_gtx_titan_x">
	<span>EVGA GTX TITAN X 12GB GDDR5X</span>
	<span><p>RS 2,00,000/-</p></span>
	</div>
 </div>
</center>
 
 
 
<center>
 <div style="position:relative;top:100px;" id="container">
    <div id="bxmodel">
    <img src="../osg/image/graphics/msi_gtx_1080.jpg" alt="msi">
	<span>MSI GTX 1080 8GB GDDR5X</span>
	<span><p>RS 55,264/-</p></span>
	</div>
	
	<div id="bxmodel">
	<img src="../osg/image/graphics/gigabyte_gtx_1080.jpg" alt="asus">
	<span>GIGABYTE GTX 1080 8GB GDDR5X</span><br>
	<span>RS 33,500/-</span>
	</div>
	
	<div id="bxmodel">
	<img src="../osg/image/graphics/asus_gtx_1080.jpg" alt="msi">
	<span>ASUS GTX 1080 8GB GDDR5X</span>
	<span><p>RS 40,500/-</p></span>
	</div>
 </div>
</center>
 
<center>
 <div style="position:relative;top:95px;" id="container">
    <div id="bxmodel">
    <img src="../osg/image/graphics/asus_gtx_1070.jpg" alt="asus_gtx_1070">
	<span>ASUS GEFORCE GTX 1070 8GB ROG STRIX</span>
	<span><p>RS 30,000/-</p></span>
	</div>
	
	<div id="bxmodel">
	<img src="../osg/image/graphics/zotac_gtx_1070.jpg" alt="zotac_gtx_1070">
	<span>ZOTAC GEFORCE GTX 1070 8GB GDDR5</span>
	<span><p>RS 38,000/-</p></span>
	</div>
	
	<div id="bxmodel">
	<img src="../osg/image/graphics/evga_gtx_1070.jpg" alt="evga_gtx_1070">
	<span>EVGA GEFORCE GTX 1070 8GB ACX 3.0</span>
	<span><p>RS 63,000/-</p></span>
	</div>
 </div>
</center>
 
<center>
 <div style="position:relative;top:95px;" id="container">
    <div id="bxmodel">
    <img src="../osg/image/graphics/zotac_gt_710.jpg" alt="zotac_gt_710">
	<span>ZOTAC GT 710 2GB DDR3</span>
	<span><p>RS 3,000/-</p></span>
	</div>
	
	<div id="bxmodel">
	<img src="../osg/image/graphics/msi_gt_710.jpg" alt="msi_gt_710">
	<span>MSI GEFORCE GT 710 2GB DDR3</span><br>
	<span>RS 3,900/-</span>
	</div>
	
	<div id="bxmodel">
	<img src="../osg/image/graphics/asus_gt_710.jpg" alt="asus_gt_710">
	<span>ASUS GEFORCE GT 710 2GB DDR3</span><br>
	<span>RS 3,100/-</span>
	</div>
 </div>
</center>
 
 
 
 
 
 
 
 
 </body>
</html>
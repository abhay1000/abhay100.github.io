<!DOCTYPE html>
<html>
<head>
 <style>
  form#add
   {
    position: absolute;
    top: 100px;
  }
  form#delete
  {
   position: absolute;
   left: 380px;
   top: 100px;
  }
  form#update
  {
   position: absolute;
   left: 715px;
   top: 100px;
  }
  table
  {
   border:2px solid red;
   padding: 10px;
  }
 tr,td
 {
 padding: 5px;
 }
 </style>
</head>
<body>
<?php
include("admin_page.php");

?>

<form id="add" action="gmouse.html" method="post">
	<table>
		<tr>
		<td><label>ADD PRODUCT</label></td>
		</tr>

		<tr>
		<td><label>Product Name:</label></td>
		<td><input type="text" placeholder="Product Name"></td>
		</tr>

		<tr>
		<td><label>Product Description:</label></td>
		<td><textarea></textarea></td>
		</tr>

                <tr>
		<td><label>Product Price:</label></td>
		<td><input type="text"></td>
		</tr>


		<tr>
		<td></td>
		<td><input type="submit" value="Add Product"></td>
		</tr>
	</table>
</form>

<form id="delete" action="" method="">
	<table>
		<tr>
		<td><label>Delete Product</label></td>
		</tr>

		<tr>
		<td><label>Product Name</td>
		<td><input type="text" placeholder="product name"></td>
		</tr>

		<tr>
		<td><label>Product ID</td>
		<td><input type="text" placeholder="product ID"></td>
		</tr>

		<tr>
		<td></td>
		<td><input type="submit" value="Delete Product"></td>
		</tr>

	</table>
</form>

<form id="update" action="" method="">
	<table>
		<tr>
		<td><label>Update Product</label></td>
		</tr>

		<tr>
		<td><label>Update Product Name</td>
		<td><input type="text" placeholder="product name"></td>
		</tr>

                <tr>
		<td><label>Update Product Name</td>
		<td><input type="text" placeholder="product name"></td>
		</tr>
		<tr>
		<td><label>Product ID</td>
		<td><input type="text" placeholder="product ID"></td>
		</tr>

		<tr>
		<td></td>
		<td><input type="submit" value="Delete Product"></td>
		</tr>

	</table>
</form>


</body>
</html>

<!DOCTYPE html>
<html>
 <head>
  <title>Statistics</title>
  <style>
    div#container
	{
	 
	 
	}
    div#user
	{	
	    position: absolute;
	    top: 90px;
		background-color: #42f4bf;
		width: 300px;
		height: 200px;
		display: inline-block;
                opacity: 0.5;
	}
	div#order_detail
	{
		position: absolute;
                left: 320px;
                top: 90px;
		background-color: #e1e570;
		width: 300px;
		height: 200px;
		display: inline-block;
                opacity: 0.5;
	}
  </style>
 </head>
<body>

<?php
 include("admin_page.php");
?>

<div id ="container">
<div id="user">
<?php
include("config.php");
$a=mysqli_query($conn,"SELECT name FROM customer");
$row_cnt = $a->num_rows;
printf("number of users %d", $row_cnt);





?>
</div>

<div id="order_detail">
</div>

<div id="today income">
</div>
</div>

</body>
</html>

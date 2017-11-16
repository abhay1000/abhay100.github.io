<?php
session_start();
include("../config.php");
$qemail = $_SESSION['email'];
$qquantity = $_POST['quantity'];
$prid = $_POST['product_id'];
$prds = $_POST['product_description'];
$qadd = "INSERT INTO cart (product_id,quantity,email,product_description) VALUES ('$prid',$qquantity,'$qemail','$prds')";
/*print_r($qadd);*/
$eadd = mysqli_query($conn,$qadd);


$exist_pid = "SELECT product_id FROM cart WHERE product_id='$prid'";
$qexist_pid = mysqli_query($conn,$exist_pid);

$exist_email = "SELECT email FROM cart WHERE email='$qemail'";
$qexist_email = mysqli_query($conn,$exist_email);

/*
print_r($qexist_pid);
echo "<br>";
print_r($qexist_email);
*/

/*if record exist then it will be loop out*/
if(!(mysqli_num_rows($qexist_pid) && mysqli_num_rows($qexist_email)))
{

if($eadd)
{
	echo "CART ADDED";
}
else
{
	echo "CART ERROR";
}
}
else
{
 echo "CART SUCCESSFULLY";
}
?>

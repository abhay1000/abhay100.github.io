<?php
session_start();
include("config.php");

$delete_row="DELETE FROM cart WHERE product_id='#gms01'";
print_r($delete_row);
$edelete_row=mysqli_query($conn,$delete_row);
echo "<br>";
print_r($edelete_row);
if(mysqli_num_row($edelete_row) == TRUE)
{
 echo "CART DELETED";
 
}
else
{
 echo "FAILED TO DELETE";


}



?>

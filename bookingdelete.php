<?php
include 'connection.php';

$id =$_GET['id'];
$q = " DELETE FROM `booking_details` WHERE hall_id = $id ";
echo "<script>alert('Your booking is Sucessfully Cancled!!!!!'); window.location.href='mybooking.php';</script>";

mysqli_query($connection,$q);

	
?>
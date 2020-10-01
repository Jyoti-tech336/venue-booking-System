<?php
include('security.php');
$id =$_GET['id'];
$q = " DELETE FROM `testimonial` WHERE tid = $id ";

mysqli_query($connection,$q);
if($q){
	echo "<script>alert('one record deleted'); window.location.href='testimonial.php';</script>";
}
else{
    echo "<script>alert('record not deleted'); window.location.href='testimonial.php';</script>";
}
?>

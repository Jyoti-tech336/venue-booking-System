<?php
include('security.php');
$id =$_GET['id'];
$q = " DELETE FROM `contact` WHERE co_id = $id ";

mysqli_query($connection,$q);
if($q){
	echo "<script>alert('one record deleted'); window.location.href='contact.php';</script>";
}
else{
    echo "<script>alert('record not deleted'); window.location.href='contact.php';</script>";
}
?>

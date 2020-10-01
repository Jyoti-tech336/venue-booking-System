<?php
include('security.php');
$id =$_GET['id'];
$q = " DELETE FROM `category_venue` WHERE id = $id ";

mysqli_query($connection,$q);
if($q){
	echo "<script>alert('one record deleted'); window.location.href='cvenue.php';</script>";
}
else{
    echo "<script>alert('record not deleted'); window.location.href='cvenue.php';</script>";
}
?>

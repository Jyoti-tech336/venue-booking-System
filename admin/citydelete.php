

<?php
include('security.php');
$id =$_GET['id'];
$q = " DELETE FROM `city` WHERE city_id = $id ";

mysqli_query($connection,$q);
if($q){
    //echo $q;
	echo "<script>alert('one record deleted'); window.location.href='city.php';</script>";
}
else{
    echo "<script>alert('record not deleted'); window.location.href='city.php';</script>";
}

?>
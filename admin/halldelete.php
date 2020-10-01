<?php
include('security.php');
$id =$_GET['id'];
$q = " DELETE FROM `halls_details` WHERE hall_id = $id ";

mysqli_query($connection,$q);
if($q){
	echo "<script>alert('one record deleted'); window.location.href='halldetails.php';</script>";
}
else{
    echo "<script>alert('record not deleted'); window.location.href='halldetails.php';</script>";
}



//////////////////////////Event delete///////////////////////


$id1 =$_GET['id'];
$q1 = " DELETE FROM `event_name` WHERE event_id = $id1 ";

mysqli_query($connection,$q1);
if($q1){
	echo "<script>alert('one record deleted'); window.location.href='eventsdetail.php';</script>";
}
else{
    echo "<script>alert('record not deleted'); window.location.href='eventsdetail.php';</script>";
}


/////////////////////////////// Hall delete///////////////////////




?>

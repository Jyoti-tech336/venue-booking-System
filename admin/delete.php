<?php
include 'security.php';

$id =$_GET['id'];
$q = " DELETE FROM `registration_form` WHERE user_id = $id ";
echo "<script>alert('do u want delete this reord'); window.location.href='register.php';</script>";

mysqli_query($connection,$q);

	
?>





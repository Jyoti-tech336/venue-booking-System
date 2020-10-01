<?php
if(isset($_POST['submit'])){
    print_r($_FILES); 
$file = $uploaddir.basename($_FILES['image']['name']); 
$file_name=$_FILES['image']['name']; 
 
if (move_uploaded_file($_FILES['image']['tmp_name'], $file)) { 
include('connection.php');
$sql=mysql_query("INSERT INTO `halls_details` (`hall_id`,  `image`)
VALUES ('',  '".$_SERVER['REMOTE_ADDR']."', '$file_name');");
//header("Location:index.php?img=".base64_encode($file_name)."");
} else {
//header("Location:index.php?mgs=error");
}
?>
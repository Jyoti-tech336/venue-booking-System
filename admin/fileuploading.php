<?php 	error_reporting(0);
include("include/conn.php");
if(isset($_POST['submit'])){

	$file = $_FILES['pic']['tmp_name'];
	$size = $_FILES['pic']['size'];
	$filename = rand(100,200)."_".$_FILES['pic']['name'];
	$location = "uploads/".$filename;
	$ext = explode('.',$filename);
	$ext = end($ext);
	$ae = array("jpg","gif","bmp","png","xlsx","docx");
	$err = [];
	if(!in_array($ext,$ae)){
		$err[0] = "Extension Not allowed";
	}
	if($size>1024000){
		$err[1] = "File must be 100 kb or smaller";
	}
	if($filename==''){
	$err[2] = "Please upload pic";	
	}
	print_r($_POST);
	$c= count($err);
	if($c==0){
		if(move_uploaded_file($file,$location)){
			$q ="insert into pics (name,created_on,size) values('$location',NOW(),'$size')";
			echo $q;
			$exe=mysqli_query($conn,$q);
			if($exe){
				echo "file uploaded successfully";
			}else{
				die(mysqli_error($conn).$q);
			}
			}else{
			echo $_FILES['pic']['error'];
		}
			
	}
//var_dump($err);
}
?>

<form method='post' enctype='multipart/form-data'>
<input type='file' name='pic'><br>
<?php echo $err[0];?>
<input type='submit' name='submit' value='Submit'>
<?php include 'include/conn.php';
session_start();

if(isset($_POST['submit'])){
	
	$Cat_id=$_POST['cat_id'];
	$Name=$_POST['Name'];
	$Description=$_POST['Description'];
	
  	$file = $_FILES['Image1']['tmp_name'];
	$size = $_FILES['Image1']['size'];
	$filename = rand(100,200)."_".$_FILES['Image1']['name'];
	$location = "images/".$filename;
	$ext = explode('.',$filename);
	$ext = end($ext);
	
		$file1 = $_FILES['Image2']['tmp_name'];
	$size1 = $_FILES['Image2']['size'];
	$filename1 = rand(100,200)."_".$_FILES['Image2']['name'];
	$location1 = "images/".$filename1;
	$ext1 = explode('.',$filename1);
	$ext1 = end($ext1);
	
  		$file2 = $_FILES['Image3']['tmp_name'];
	$size2 = $_FILES['Image3']['size'];
	$filename2 = rand(100,200)."_".$_FILES['Image3']['name'];
	$location2 = "images/".$filename2;
	$ext2 = explode('.',$filename2);
	$ext2 = end($ext2);

	  		$file3 = $_FILES['Image4']['tmp_name'];
	$size3 = $_FILES['Image4']['size'];
	$filename3 = rand(100,200)."_".$_FILES['Image4']['name'];
	$location3 = "images/".$filename3;
	$ext3 = explode('.',$filename3);
	$ext3 = end($ext3);

	$ae = array("jpg","gif","bmp","png");
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
  	
   if ($Name=="") {
  	  	$err[3]="Please enter your name";
   } 
	if(!move_uploaded_file($file,$location)){
		$err[4]="Please upload image again";
	}
	if(!move_uploaded_file($file1,$location1)){
		$err[5]="Please upload image again";
	}
	if(!move_uploaded_file($file2,$location2)){
		$err[6]="Please upload image again";
	}
	if(!move_uploaded_file($file3,$location3)){
		$err[7]="Please upload image again";
	}
	print_r($_POST);
	var_dump($_POST);
	$c=count($err);
	echo $c;
		if ($c==0) {	
			//$q ="insert into detail1(Cat_id,Name,Image1,Image2,Image3,Image4,Description) values('$Cat_id','$Name','$location1','$location2','$location3','$location4','$Description')";
			$q ="insert into detail1(Cat_id,Name,Image1,Image2,Image3,Image4,Description) values('$Cat_id','$Name','$location','$location1','$location2','$location3','$Description')";
			
			echo $q;
			$exe1=mysqli_query($conn,$q);
			if($exe1){
				echo "<script>alert('one record saved successfully');window.location.href='managedetail.php';</script>";
			}else{
				die(mysqli_error($conn).$q);
			}
			}

		}

?>


		<!-- //header-ends -->
		 <?php include 'include/header.php' ?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h2 class="title1">Forms</h2>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>insert detail</h4>
						</div>
						<div class="form-body">
						<form method='post' enctype='multipart/form-data'>
							<div class="form-group">
							 <label for="exampleInputEmail1">Cat_id</label> 
						
				<select required="true" class="form-control" name="cat_id">
																		
		<?php $query="select * from category";
$res=mysqli_query($conn,$query);
while($fet=mysqli_fetch_array($res)){																	?>
<option value="<?php echo $fet['id']; ?>"><?php echo $fet['Name']; ?></option>
<?php } ?>
											</select>
							
							 <label for="exampleInputEmail1">Name</label> 
							<input type="text" id="Name" placeholder="emter name" name="Name" class="form-control" >

							<label for="exampleInputEmail1">Image1</label> 
							 <input type='file' name='Image1'><br>

							<br>
							<label for="exampleInputEmail1">Image2</label> 
							 <input type='file' name='Image2'><br>
							 
							<label for="exampleInputEmail1">Image3</label> 
							 <input type='file' name='Image3'><br> 
							 
							<label for="exampleInputEmail1">Image4</label> 
						
							<input type='file' name='Image4'><br> 
							
	<!--<label for="exampleInputEmail1">Desc</label> 
	<input type="text" class="form-control" id="Description" placeholder="desc" name="Description" >-->
	<label for="exampleInputEmail1">Desc</label> 
<!--	<input type="text" class="form-control" id="Description" value="<?php echo $fetch['Description']; ?>" name="Description" > -->
	<script src="ckeditor/ckeditor.js"></script>
<textarea id="edit"  name="Description"><?php echo $fetch['Description']; ?></textarea>
<script>
CKEDITOR.replace('edit');
</script> 
<input type="submit" class="btn btn-default" name="submit" value="Submit"> </form> 
						</div>
					</div>
					</div>	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
   
</body>
</html>
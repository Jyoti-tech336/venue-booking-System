<?php session_start(); 
	include('include/connection.php');
	if(!isset($_SESSION['username'])){
		header("location:login.php");
	}
	$id=$_GET['id'];
	$que="select * from categories order by cat_id";
	$res=mysql_query($que);
	$q1="select * from location where id='$id'";
	$result1=mysql_query($q1) or die(mysql_error().$q1);
	$rows=mysql_fetch_array($result1);
	$_SESSION['file']=$rows['mimage'];
	$_SESSION['file1']=$rows['s1image'];
	$_SESSION['file2']=$rows['s2image'];
	$_SESSION['file3']=$rows['s3image'];
		
	if(isset($_POST['update']))
	{
	$err=array();
	$cat=$_POST['category'];
	$title=$_POST['title'];
	$description=$_POST['description'];
	$major=$_POST['major'];
	$tourist=$_POST['tourist'];
	$visit=$_POST['visit'];
	$file= $_FILES['photo']['tmp_name'];
	$rnd=rand(100000,1000000);
	$filename= $rnd.'_'.$_FILES['photo']['name'];
	$size= $_FILES['photo']['size'];
	$error= $_FILES['photo']['error'];
	$target= '../images/locations/'.$filename;
		
	$file1= $_FILES['photo1']['tmp_name'];
	$rnd1=rand(100000,1000000);
	$filename1= $rnd1.'_'.$_FILES['photo1']['name'];
	$size1= $_FILES['photo1']['size'];
	$error1= $_FILES['photo1']['error'];
	$target1= '../images/locations/'.$filename1;
	
	$file2= $_FILES['photo2']['tmp_name'];
	$rnd2=rand(100000,1000000);
	$filename2= $rnd2.'_'.$_FILES['photo2']['name'];
	$size2= $_FILES['photo2']['size'];
	$error2= $_FILES['photo2']['error'];
	$target2= '../images/locations/'.$filename2;
	
	$file3= $_FILES['photo3']['tmp_name'];
	$rnd3=rand(100000,1000000);
	$filename3= $rnd3.'_'.$_FILES['photo3']['name'];
	$size3= $_FILES['photo3']['size'];
	$error3= $_FILES['photo3']['error'];
	$target3= '../images/locations/'.$filename3;
	if($_FILES['photo']['name']!=''){
	if(!move_uploaded_file($file,$target))
		{
		$err[1]="Please upload image";
		}
	}else{
		$filename=$_SESSION['file'];
	}	
	if($_FILES['photo1']['name']!=''){
	if(!move_uploaded_file($file1,$target))
		{
		$err[6]="Please upload image";
		}
	}else{
		$filename1=$_SESSION['file1'];
	}	
	if($_FILES['photo2']['name']!=''){
	if(!move_uploaded_file($file2,$target))
		{
		$err[7]="Please upload image";
		}
	}else{
		$filename2=$_SESSION['file2'];
	}	
	if($_FILES['photo3']['name']!=''){
	if(!move_uploaded_file($file3,$target))
		{
		$err[8]="Please upload image";
		}
	}else{
		$filename3=$_SESSION['file3'];
	}	
	
	if($title==""){
	$err[0]="Please enter title"; }

	if($description==""){
	$err[2]="Please enter description"; }
	if($major==""){
	$err[3]="Please enter major attractions"; }
	if($tourist==""){
	$err[4]="Please enter tourist places"; }
	if($visit==""){
	$err[5]="Please enter when to visit"; }
	//print_r($err);
	$c=count($err);
	if($c==0){	
	$q1="update location set cat_id='$cat', title='$title', mimage='$filename',s1image='$filename1',s2image='$filename2',s3image='$filename3',description='$description',major='$major',tourist='$tourist',visit='$visit' where id='$id'"; 
	//echo $q1;
	$result=mysql_query($q1);
	if($result)
	{
		echo "<script> alert('Category description updated.'); </script>";
	}else{
		echo "Error";
	}
	}
	}
?>	
<?php 	include('include/header.php'); ?>
      <div class="container-fluid padd">
      <!--	DON'T DELETE ANY DIV	-->

<!--	DON'T DELETE ANY DIV	-->
<?php include('include/head.php'); ?>
<div class="col-md-10 content">
<!--	DON'T DELETE ANY DIV	-->
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/font.css" rel="stylesheet">
<link href="css/editor.css" type="text/css" rel="stylesheet"/>
<script src="js/jquery.min.js"></script>
<script src="ckeditor/ckeditor.js"></script>

<script src="js/editor.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-ui.js"></script>
<script src="ckeditor/ckeditor.js"></script>
   
<div class="col-md-12 padd">
   <div class="bradcome-menu">
      <ul>
        
         <li><img  src="images/arrow.png"></li>
         <li><a href="location.php">Category Description</a></li>
         <li><img  src="images/arrow.png"></li>
         <li><a href="locationedit.php"> Update Category Description</a></li>
      </ul>
   </div>
</div>

<div class="row">
   <div class="col-md-8">
      <div style="color:#FF0000; font-size:12px; padding-left:10px;">      </div>
      <form method="POST" name="quizform" id="quizform" action="" enctype="multipart/form-data">
			<div class="form-group">
							<label>Category</label>
			                  <select name='category' class="form-control required">
								 <option value="">--select category--</option>
									<?php while($rows1=mysql_fetch_array($res)){  ?>
								<option value='<?php echo $rows1['cat_id'];?>' <?php if($rows1['cat_id']==$rows['cat_id']){ echo "selected='selected'" ;} ?>>
									<?php echo $rows1['cat_name'];?></option>
									<?php } ?>
							</select>
			</div>					
        <div class="form-group">
            <label for="inputEmail">Title</label>
                        <input type="text" class="form-control" id="name" name="title" value="<?php echo $rows['title'];?>" placeholder="Enter title name" > 
						<label style="color:red;"> <?php echo $err[0]; ?>	</label>				
         </div>
         <div class="form-group">
            <label for="inputEmail">Mimage</label>
						<input type="file" class="form-control" id="name1" name="photo" value="" placeholder="Enter image name" > 
						<img src="images/locations/<?php echo $rows['mimage'];?>" width="60" height="50" style="float:right"  >
					    <label style="color:red;"> <?php echo $err[1]; ?>	</label>
        </div>
         <div class="form-group">
            <label for="inputEmail">S1image</label>
						<input type="file" class="form-control" id="name2" name="photo1" value="" placeholder="Enter slider1 image name" > 
						<img src="images/locations/<?php echo $rows['s1image'];?>" width="60" height="50" style="float:right" >
						<label style="color:red;"> 	<?php echo $err[6]; ?></label>
         </div>
         <div class="form-group">
            <label for="inputEmail">S2image</label>
					   <input type="file" class="form-control" id="name3" name="photo2" value="" placeholder="Enter slider2 image name" > 
					   <img src="images/locations/<?php echo $rows['s2image'];?>" width="60" height="50" style="float:right" >
					   <label style="color:red;"><?php echo $err[7]; ?> 	</label>
		</div>
         <div class="form-group">
            <label for="inputEmail">S3image</label>
                        <input type="file" class="form-control" id="name4" name="photo3" value="" placeholder="Enter slider3 image name" >
						<img src="images/locations/<?php echo $rows['s3image'];?>" width="60" height="50" style="float:right" >
						<label style="color:red;">	<?php echo $err[8]; ?></label>
         </div>
         <div class="form-group">
            <label for="inputEmail">Description</label>
			<textarea id="descc" name="description" value="" ><?php echo $rows['description'];?></textarea>
			<script>
			CKEDITOR.replace('descc');
			</script>
			<!--		<input type="text" class="form-control" id="name" name="description" value="" placeholder="Enter description" > -->
						<label style="color:red;"> <?php echo $err[2]; ?>	</label>	
			</div>
	
         <div class="form-group">
            <label for="inputEmail">Major Attractions</label>
                        <input type="text" class="form-control" id="startdate" name="major" value="<?php echo $rows['major'];?>" placeholder="Enter major attraction places" >
						<label style="color:red;"> <?php echo $err[3]; ?>	</label>
         </div>
         <div class="form-group">
            <label for="inputEmail">Tourist Places</label>
                        <input type="text" class="form-control" id="enddate" name="tourist" value="<?php echo $rows['tourist'];?>" placeholder="Enter tourist places" >
						<label style="color:red;"> <?php echo $err[4]; ?>	</label>
         </div>
         <div class="form-group">
            <label for="inputEmail">When to visit </label>
                        <input type="text" class="form-control" id="deauration" name="visit" value="<?php echo $rows['visit'];?>" placeholder="Enter when to visit the place" >
						<label style="color:red;"> <?php echo $err[5]; ?>	</label>
         </div>
         <input type="submit" id="submitbtn" class="btn btn-primary wnm-user" name="update" value="Update">
      </form>
   </div>
</div>
<!-- Validations -->
<script src="js/jquery.validate.min.js"></script>
<script src="js/additional-methods.min.js"></script>
<script type="text/javascript"> 
   (function($,W,D)
   {
      var JQUERY4U = {};
   
      JQUERY4U.UTIL =
      {
          setupFormValidation: function()
          {				
   		//Additional Methods
   		$.validator.addMethod("dateFormat",function(value, element) { return value.match(/^(0[1-9]|1[012])[\/](0[1-9]|[12][0-9]|3[01])[\/](20)\d\d$/); }, "Please enter a date in the format mm/dd/yyyy (e.g., 06/31/2014).");			
   		
   		//form validation rules
              $("#quizform").validate({
                  
   			ignore: "", //To validate hidden fields
   			rules: {
                      title: {
   					required: true,
   					rangelength: [2, 30]
   				},
				mimage: {
   					required: true
   				},
   				s1image: {
   					required: true
   				},
				s2image: {
   					required: true
   				},
				s3image: {
   					required: true
   				},
   				description: {
   					required: true
   				},
   				major_attraction: {
   					required: true
   					
   				},
				tourist: {
   					required: true
				},
   				visit: {
   					required: true
   				}
   				
                  },
   			
   			messages: {
   				title: {
                          required: "Please enter title for tour."
                      },
   				mimage: {
   					required: "Please enter name of image."
   				},
   				s1image: {
   					required: "Please enter image name for slider1."
   				},
   				s2image: {
   					required: "Please enter image name for slider2."
   				},
				s3image: {
   					required: "Please enter image name for slider3."
   				},
   				description: {
   					required: "Please enter description."
   				},
   				major_attraction: {
   					required: "Please enter major attraction for places."
   				},
				tourist:{
					required: "Please enter tourist places."
				}
   				visit: {
   					required: "Please enter when to visit the place."
   				}
   			},
                  
                  submitHandler: function(form) {
                      form.submit();
                  }
              });
          }
      }
   
      //when the dom has loaded setup form validation rules
      $(D).ready(function($) {
          JQUERY4U.UTIL.setupFormValidation();
      });
   
   })(jQuery, window, document);
</script>

<?php include('include/footer.php'); ?>
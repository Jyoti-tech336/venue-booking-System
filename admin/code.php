<!-----------------admin-------------->
<?php
include('security.php');




if(isset($_POST['registerbtn']))
{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
   
    $phoneno=$_POST['phoneno'];
	$confirmpassword=$_POST['confirmpassword'];
    $usertype=$_POST['usertype'];
    
    if($password === $confirmpassword){
    
     $query="INSERT INTO admin_login( username,email,password,user_type) VALUES('$username','$email','$password','$usertype')";
	$query_run=mysqli_query($connection,$query);

	if ($query_run) {
		
		$_SESSION['success']="Admin Profil Adder";
		header('Location:register.php');
	}
	else{
		$_SESSION['status']="Admin Profil Not Adder";
		header('Location:register.php');
		
	}

    }
else{
	$_SESSION['status']="Not Mathced";
		header('Location:register.php');
}
}


/////////////////////end admin ///////////////////////



/////////////////loginsystem//////////////////////////


if(isset($_POST['loginbtn']))
{
    $email_log = $_POST['email'];
    $password_log =$_POST['password'];
  
    
    $query ="SELECT * FROM admin_login WHERE email='$email_log' AND password='$password_log'";
   // echo $query."abc";
    $query_run =mysqli_query($connection,$query);
    $num= mysqli_num_rows($query_run);
    if($num==1)
    {
        $fetch= mysqli_fetch_array($query_run);
        $_SESSION['email']=$email_log;
        $_SESSION['user_type']=$fetch['user_type'];
        $_SESSION['is Login']='yes';
        header("location:index.php");
//        if($fetch['user_type']==1){
//            header("location:index.php");
//        }
//        if($fetch['user_type']==2){
//            header("location:halldetails.php");
//        }
       // $_SESSION['name']= $fetch['name'];
        
        
    }
    else
    {
        $_SESSION['status']='Invalid data';
        header("location:login.php");
    }
}


///////////////////////////insert hall details//////////////////////


if(isset($_POST['insert_hall']))
{
                       $name = $_POST['name'];
                       $contact = $_POST['contact'];
                       $email = $_POST['email'];
                       $bookingcost = $_POST['booking_cost'];
                       $foodcost = $_POST['food_cost'];
                       $capacity = $_POST['Capacity'];
                       $address = $_POST['address'];
                       $service = $_POST['services'];
                       $description = $_POST['description'];
                       $cid=$_POST['cat_id'];
                       $event=$_POST['event_id'];
                       $city=$_POST['city_id'];
                           $image = $_FILES['fileimage1']['tmp_name'];
                         $filename = rand(100,200)."_".$_FILES['fileimage1']['name'];
                        $location = "../image2/".$filename;
                      // $ext = explode('.',$filename);
                     	//$ext = end($ext);
	
            
    
                             $image2 = $_FILES['fileimage2']['tmp_name'];
                         $filename1 = rand(100,200)."_".$_FILES['fileimage2']['name'];
                        $location1 = "../image2/".$filename1;
                        // $ext2 = explode('.',$filename1);
                     	//$ext2 = end($ext2);
            
    
                           $image3 = $_FILES['fileimage3']['tmp_name'];
                         $filename2 = rand(100,200)."_".$_FILES['fileimage3']['name'];
                        $location2 = "../image2/".$filename2;
                        // $ext2 = explode('.',$filename2);
                     	//$ext2 = end($ext3);
    
     
	if(!move_uploaded_file($image,$location)){
		$err[0]="Please upload image again";
	}
	if(!move_uploaded_file($image2,$location1)){
		$err[1]="Please upload image again";
	}
	if(!move_uploaded_file($image3,$location2)){
		$err[2]="Please upload image again";
	}
	        
 $query ="INSERT INTO halls_details ( cid,event_id,city_id,name, contact, email, booking_cost, food_cost, Capacity, address, services, description, image,image2,image3) VALUES ('$cid','$event','$city','$name','$contact',' $email','$bookingcost','$foodcost','$capacity','$address','$service','$description','$location','$location1','$location2')";
     echo $query;
                 $query_run = mysqli_query($connection,$query);
   
                    if($query_run){
                       echo "<script>alert('one record saved successfully');window.location.href='halldetails.php';</script>";
                        $_SESSION['success']="Hall Added";
                        header("Location:halldetails.php");
                    }
                   else{
                        $_SESSION['status']="Hall Not Added";
                        header("Location:halldetails.php");
                   }    
}

?>
                
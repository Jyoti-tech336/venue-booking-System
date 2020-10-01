<!-----------------admin-------------->
<?php
include('security.php');




if(isset($_POST['registerbtn']))
{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
    $address=$_POST['address'];
    $phoneno=$_POST['phoneno'];
	$confirmpassword=$_POST['confirmpassword'];
    
    if($password === $confirmpassword){
    
     $query="INSERT INTO admin_login( email,password) VALUES('$email','$password')";
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
    
    $query ="SELECT * FROM admin_login WHERE email='$email_log'AND password='$password_log'";
    $query_run =mysqli_query($connection,$query);
    if(mysqli_fetch_assoc($query_run))
    {
        
        $_SESSION['username']=$email_log;
        header("location:index.php");
        
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
    $image = $_FILES['fileimage']['name'];
          
            
                   $query ="INSERT INTO halls_details ( cid,name, contact, email, booking_cost, food_cost, Capacity, address, services, description, image) VALUES ('$cid','$name','$contact',' $email','$bookingcost','$foodcost','$capacity','$address','$service','$description','$image')";
                 $query_run = mysqli_query($connection,$query);
                    if($query_run){
                        move_uploaded_file($_FILES["fileimage"]["tmp_name"],"../image/".$_FILES["fileimage"]["name"]);
                        $_SESSION['success']="Hall Added";
                        header("Location:halldetails.php");
                    }
                   else{
                        $_SESSION['success']="Hall Not Added";
                        header("Location:halldetails.php");
                   }
    
}






?>
                
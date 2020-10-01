<?php
session_start();
include'connection.php';
include('includes/header.php');
include('includes/navbar.php');
$username= $_SESSION['username'];
           $q1="select * from registration_form where username='$username' ";
                    $exe= mysqli_query($connection,$q1);
                    $fetch1= mysqli_fetch_array($exe);
                    
        //include 'connection.php';
                   if(isset($_POST['submit1'])){
                      // $username= $_SESSION['username'];
                       $username1 = $_POST['username'];
                       $email = $_POST['email'];
                    //   $password = $_POST['password'];
                       $address = $_POST['address'];
                       $phone = $_POST['phone'];
                       $q = " UPDATE registration_form SET username='$username1',email = '$email',address='$address',phoneno='$phone' WHERE username='$username'";
                    
                       $query = mysqli_query($connection,$q);
                      if($query){

                         echo"<script>alert('Record are Updated');window.location.href='index.php';</script>";
                        
                      }
                       else{
                            echo"<script>alert('Record Not Updated');window.location.href='editprofile.php';</script>";
                       }
                   }
                   
?>
 <body style=" background-color: #FFE53B;
background-image: linear-gradient(147deg, #FFE53B 0%, #FF2525 74%);"
>
          <div class="container" >
        <div class="container-fluid bg">
        <div class="container" >
         <div class="my-5">
  <div class="py-5">
        <div class="row">
           <div class="col-md-12 col-sm-4 col-xm-12"></div>
            <div class="col-md-12 col-sm-4 col-xm-12">
               <form action="#" method="post">
        
                
                  
 <h4 style="text-align: center;color:black;">EDIT PROFILE<hr></h4>
            <div class="form-group" >
                <label><i class="fas fa-user-friends"></i>&nbsp;User name:</label>
                <input type="text" name="username"  value="<?php echo $fetch1['username'];?>" class="form-control" >
                <span id="usernameid" class="text-warning font-weight-bolder"></span>
            </div>
            
             <div class="form-group">
                <label><i class="fas fa-envelope"></i>&nbsp;Email:</label>
                <input type="email" name="email" value="<?php echo $fetch1['email'];?>"  class="form-control" >
                <span id="emailid" class="text-warning font-weight-bolder"></span>
            </div>
            
<!--
             <div class="form-group">
                <label><i class="fas fa-key"></i>&nbsp;Password:</label>
                <input type="password" name="password" value="<?php //echo $fetch1['password'];?>" class="form-control" >
                <span id="passwordid" class="text-warning font-weight-bolder"></span>
            </div>
-->
            
             <div class="form-group">
                <label><i class="fas fa-home"></i>&nbsp;Address:</label>
                <textarea name="address" value="" class="form-control"><?php echo $fetch1['address'];?></textarea><span id="addressid" class="text-warning font-weight-bolder"></span>
                 </div>
                 
             <div class="form-group">
                <label><i class="fas fa-phone-alt"></i>&nbsp;Phone No:</label>
                <input type="text" name="phone" value="<?php echo $fetch1['phoneno'];?>" class="form-control" maxlength="10" >
                <span id="phoneid" class="text-warning font-weight-bolder"></span><br>
                
            
    
        
                    <button  type="submit" name="submit1" class="  btn-block btn btn-warning" >Update</button></div>

                      
                    
                           
                </form>
         
    
                 
            </div>
           
           </div>
        </div>
    </div>
    </body>
 
       
                   
                  
<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');

?>

 
   
        <!-- End of Topbar -->
        
        <div class="container-fluid">
        <div class="container-fluid bg">
        <div class="row">
           <div class="col-md-12 col-sm-4 col-xm-12"></div>
            <div class="col-md-12 col-sm-4 col-xm-12">
               <form action="#" method="post">
          <?php
                   
       
                   if(isset($_POST['submit1'])){
                       $id = $_GET['id'];
                       $username = $_POST['username'];
                       $email = $_POST['email'];
                       $password = $_POST['password'];
                       $address = $_POST['address'];
                       $phone = $_POST['phone'];
                       $q = " UPDATE registration_form SET username='$username',email = '$email',password='$password',address='$address',phoneno='$phone' WHERE user_id=$id";
                       
                       $query = mysqli_query($connection,$q);
                      if($query){
                          echo "updation successful";
                        
                      }
                       else{
                           echo "failed";
                       }
                   }
                   
                   
                   
                   
                   
                   ?>     
                   
                  
 <h4 style="text-align: center;color:black;">EDIT PROFILE<hr></h4>
            <div class="form-group" >
                <label><i class="fas fa-user-friends"></i>&nbsp;User name:</label>
                <input type="text" name="username"  value="" class="form-control" >
                <span id="usernameid" class="text-warning font-weight-bolder"></span>
            </div>
            
             <div class="form-group">
                <label><i class="fas fa-envelope"></i>&nbsp;Email:</label>
                <input type="email" name="email" value=""  class="form-control" >
                <span id="emailid" class="text-warning font-weight-bolder"></span>
            </div>
            
             <div class="form-group">
                <label><i class="fas fa-key"></i>&nbsp;Password:</label>
                <input type="password" name="password" value="" class="form-control" >
                <span id="passwordid" class="text-warning font-weight-bolder"></span>
            </div>
            
             <div class="form-group">
                <label><i class="fas fa-home"></i>&nbsp;Address:</label>
                <textarea name="address" value="" class="form-control"></textarea><span id="addressid" class="text-warning font-weight-bolder"></span>
                 </div>
                 
             <div class="form-group">
                <label><i class="fas fa-phone-alt"></i>&nbsp;Phone No:</label>
                <input type="text" name="phone" value="" class="form-control" maxlength="10" >
                <span id="phoneid" class="text-warning font-weight-bolder"></span><br>
                
            
    
        
                    <button  type="submit" name="submit1" class="  btn-block btn btn-primary" >Update</button></div>

                      
                    
                           
                </form>
         
    
                 
            </div>
           
           </div>
        </div>
         
    
        
        


<?php include('includes/scripts.php');
include('includes/footer.php');?>
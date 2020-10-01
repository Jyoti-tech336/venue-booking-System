<nav class="navbar navbar-expand-lg navbar-dark  fixed-top " style="background-color:rgba(220, 72, 40,0.7)">
  <div class="container">
  <a class="navbar-brand" href="#"><i class='fab fa-centos fa-lg'></i> Heritage Venue</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><i class="fas fa-home"></i>&nbsp;Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="about%20us.php"><i class="far fa-question-circle"></i>&nbsp;Aboutus</a>
      </li>
    
       <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Venue
        </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         <?php
          include'connection.php';
          $q1="select * from category_venue";
           $exe= mysqli_query($connection,$q1);
            while($fetch= mysqli_fetch_array($exe)){ ?>
          <a class="dropdown-item" href="list.php?id=<?php echo $fetch['id']?>"><?php echo $fetch['category_name']; ?></a> <?php } ?>
       </div>
        </li>
        
    <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Events
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <?php
          include'connection.php';
          $q2="select * from event_name";
           $exe2= mysqli_query($connection,$q2);
            while($fetch1= mysqli_fetch_array($exe2)){ ?>
          <a class="dropdown-item" href="Events.php?id=<?php echo $fetch1['event_id']?>"><?php echo $fetch1['event_name']; ?></a> <?php } ?>
       </div>
        </li>
         <li class="nav-item active">
        <a class="nav-link" href="testimonial.php"><i class="far fa-edit"></i>&nbsp;Testimonial</a>
      </li>
      
       <?php
        
        ?>
         <li class="nav-item active">
        <a class="nav-link" href="contact.php" name="con" ><i class="fa fa-phone fa-sm" > </i>&nbsp;ContactUs</a>
      </li>
    
     
        
        
   <?php  
            if(!isset($_SESSION['username'])){ ?>
              
        <li class="nav-item active">
 
    
    <a  class='nav-link' href='#myModal' data-toggle='modal' ><i class='fas fa-user'></i> &nbsp;Login</a>
            
       </li> 
        
      
       
         <?php   } ?> 
        <?php if(isset($_SESSION['username'])){ ?>
    
              
    <li class='nav-item dropdown active'>
        
       <a  class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> <?php echo $_SESSION['username']; ?>
         <span>
            
            
              
                
            </span>
        </a>
        <?php        }?>  
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <!-- <from action="profileedit.php" method="">-->
          <a class="dropdown-item" href="profileedit.php" > Edit Profile</a>
        <!--  </from>-->
          <a class="dropdown-item" href="Cpassword.php">change Password</a>
           <a class="dropdown-item" href="mybooking.php">My Booking</a>
       <form action="logout.php" method="post">
               <button class="dropdown-item"  name="logout" href="#">Logout
           
               </button>
          </form>
          
            </div>
       
      </li>
                    
     
 </ul>
     </div>
      
   </div> 
</nav>


<div class="container" id="modal11">
  <div class="modal fade" id="myModal"  tabindex="-1" role="dialog" aria-labelledby="model" aria-hidden="true">
    <div class="modal-dialog" role="document" >
      <div class="modal-content" style=" background-color: rgba(220, 72, 40,0.5); ">
      
        <!-- Modal Header -->
       <!-- <div class="modal-header">
         <h4 style="text-align: center;color: white;">LOGIN</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>-->
        
        <!-- Modal body -->
        <div class="modal-body">
        <div class="container-fluid bg">
        <div class="row">
           <div class="col-md-12 col-sm-4 col-xm-12"></div>
            <div class="col-md-12 col-sm-4 col-xm-12">
              
                <form action="login.php" method="post" id="login">
              <h4 style="text-align: center;color: white;">LOGIN<hr></h4>
            <div class="form-group ">
                <label><i class="fas fa-user-friends"></i>&nbsp;User name:</label>
                <input type="text" name="username1" id="username1" class="form-control" >
                <span id="usernameid" class="text-warning font-weight-bolder"></span>
            </div>
            
             
             <div class="form-group">
                <label><i class="fas fa-key"></i>&nbsp;Password:</label>
                <input type="password" name="password1" id="password1" class="form-control" >
                <span id="passwordid" class="text-warning font-weight-bolder"></span><br>
           
            
                 <button type="submit"   name="login" class="  btn-block btn btn-outline-warning" value="login" > Login</button>                     </div>
                    <div class="form-group">
                       <label>Don't have account?&nbsp;&nbsp;<a href="#mymodel" data-toggle="modal" data-dismiss="modal"id="signup" style="color:white">sign up here</a></label>
                      
                    </div>
                     <div>
                    
        <a class=" nav-item active nav-link" href="forgetpassword.php" style="color:white" >ForgetPassword?</a>
     
                    </div>  
                         <!-- <div class="form-group">
                    <lable>  <a href="forgetpass.php"   style="color:white;">Forgot Password?</a></lable>
                      
                    </div>-->
                           
                </form>
            </div>
           <div class="col-md-12 col-sm-4 col-xm-12"></div>
           </div>
    </div>

        </div>
        </div>
    </div>
  </div>
  
</div>
<!-------------------------------End of first model------------------------------------------>



<!-------------------------------- second model start---------------------------------------->
 <div class="container" id="modal22">
  <div class="modal fade  " id="mymodel" >
    <div class="modal-dialog" >
      <div class="modal-content" style=" background-color: rgba(220, 72, 40,0.5); ">
      
        <!-- Modal Header -->
       <!-- <div class="modal-header">
          <h4 class="modal-title"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>-->
        
        <!-- Modal body -->
        <div class="modal-body">
        <div class="container-fluid bg">
        <div class="row">
           <div class="col-md-12 col-sm-4 col-xm-12"></div>
            <div class="col-md-12 col-sm-4 col-xm-12">
              <?php  
                   include 'connection.php';
                   if(isset($_POST['submit']))
                             {
	                            $username = trim($_POST['username']);
                                $email = trim($_POST['email']);
                                $password =md5 ($_POST['password']);
                                $address = trim($_POST['address']);
                                $phone = trim($_POST['phone']);
     $query="INSERT INTO registration_form( username,email,password,address,phoneno) VALUES('$username','$email','$password','$address','$phone')";
	$query_run=mysqli_query($connection,$query);
                       if($query_run){
                    
                         echo"<script>alert('successfull')</script>"; 
                        
                      }
                       else{
                          
                           echo"<script>alert('unsuccessful')</script>";
                       }
                   }
                 ?>
               <form action="#" id="register" method="post">
               
                
                
               <h4 style="text-align: center;color: white;">SIGN UP<hr></h4>
            <div class="form-group" >
                <label><i class="fas fa-user-friends"></i>&nbsp;User name:</label>
                <input type="text" name="username" id="username" class="form-control" required>
                <span id="usernameid" class="text-warning font-weight-bolder"></span>
            </div>
            
             <div class="form-group">
                <label><i class="fas fa-envelope"></i>&nbsp;Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
                <span id="emailid" class="text-warning font-weight-bolder"></span>
            </div>
            
             <div class="form-group">
                <label><i class="fas fa-key"></i>&nbsp;Password:</label>
                <input type="password" name="password" id="password" class="form-control" required>
                <span id="passwordid" class="text-warning font-weight-bolder"></span>
            </div>
            
             <div class="form-group">
                <label><i class="fas fa-home"></i>&nbsp;Address:</label>
                <textarea name="address" id="address" class="form-control" required></textarea><span id="addressid" class="text-warning font-weight-bolder"></span>
                 </div>
                 
             <div class="form-group">
                <label><i class="fas fa-phone-alt"></i>&nbsp;Phone No:</label>
                <input type="text" name="phone" id="phone" class="form-control" maxlength="10"  required>
                <span id="phoneid" class="text-warning font-weight-bolder"></span><br>
                
            
    
        
                    <button id="hide" name="submit" type="submit" class="  btn-block btn btn-outline-warning" >Sign Up</button></div>

                      
                    
                           
                </form>
            </div>
           
           </div>
    </div>

        </div>
        </div>
    </div>
  </div>
  
</div>

    
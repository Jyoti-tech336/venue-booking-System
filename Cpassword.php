<?php 
session_start();
include'connection.php';
include("includes/header.php");
include("includes/navbar.php");
$username=$_SESSION['username'];
//echo $username;
$q="select * from registration_form where username='$username'";
$exe= mysqli_query($connection,$q);
$fetch= mysqli_fetch_array($exe);
$password= $fetch['password'];
//echo $password;

if(isset($_POST['submit1'])){
    $oldpass= md5($_POST['oldpass']);
    $newpass= md5($_POST['newpass']);
    $conpass= md5($_POST['conpass']);
    
    if($oldpass==$password && $newpass==$conpass){
        $update="update registration_form set password='$conpass' where username='$username'";
       // echo $update;
        $exe= mysqli_query($connection,$update);
        if($exe){
            echo "<script>alert('Password Changed Please Login ');window.location.href='index.php';</script>";
        }
        else{
             echo "<script>alert('Password Changed Please Login ');window.location.href='Cpassword.php';</script>";
        }
    }
}

?>
          


            
            <!--contact-->
                
<body style=" background-color: #FFE53B;
background-image: linear-gradient(147deg, #FFE53B 0%, #FF2525 74%);"
>

<div class="container" >
         <div class="my-5">
  <div class="py-5">
<div class="contact">
 
        <div class="row">
           <div class="col-md-12 col-sm-4 col-xm-12"></div>
            <div class="col-md-12 col-sm-4 col-xm-12">
               <form action="#" method="post">
               <h4 style="text-align: center;color:black;">CHANGE PASSWORD<hr></h4>
            <div class="form-group" >
                <label><i class="fas fa-user-friends"></i>&nbsp;Password:</label>
                <input type="text" name="oldpass"  value="" class="form-control" placeholder="Type Old Password" >
               
            </div>
            
             <div class="form-group">
                <label><i class="fas fa-envelope"></i>&nbsp;Passsword:</label>
                <input type="text" name="newpass" value=""  class="form-control" placeholder="Type New Password" >
                
            </div>
            
             <div class="form-group">
                <label><i class="fas fa-key"></i>&nbsp;Password:</label>
                <input type="text" name="conpass" value="" class="form-control" placeholder=" Confirm Password">
               
            </div>
            <div>
                    <button  type="submit" name="submit1" class="  btn-block btn btn-warning" >SUBMIT</button></div>

                      
                    
                           
                </form>
         
    
                 
            </div>
           
           </div>
        </div>
    </div>
    </div>
    </div>
    

    


</body><br><br><br><br><br><br><br>






            
<?php include("includes/footer.php"); ?>
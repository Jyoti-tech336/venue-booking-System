<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
   function getName2($connection,$id1){
    $q2="select * from halls_details where hall_id='$id1'";
    $exe2= mysqli_query($connection,$q2);
    $fet2= mysqli_fetch_array($exe2);
    $name2= $fet2['name'];
    return $name2;
}


 function getName3($connection,$id2){
    $q3="select * from event_name where event_id='$id2'";
    $exe3= mysqli_query($connection,$q3);
    $fet3= mysqli_fetch_array($exe3);
    $name3= $fet3['event_name'];
    return $name3;
}

function getName4($connection,$id4){
    $q4="select * from time where time_id='$id4'";
    $exe4= mysqli_query($connection,$q4);
    $fet4= mysqli_fetch_array($exe4);
    $name4= $fet4['time'];
    return $name4;
}







 $id= $_GET['id'];
  $q1="select * from booking_details where user_id='$id'";
   $exe= mysqli_query($connection,$q1);
 $fetch1= mysqli_fetch_array($exe);
                    
 if(isset($_POST['bookup'])){
      $id = $_GET['id'];
    $hallid = $_POST['hallid'] ;
      $userid = $_POST['userid'] ;
      $name = $_POST['username'] ;
      $email = $_POST['email'] ;
      $phone = $_POST['phone'] ;
      $date = $_POST['date'] ;
      $event = $_POST['ocassion'] ;
      $guest = $_POST['guest'] ;
      $time = $_POST['time'] ;
      $pay = $_POST['payment'] ;
     
     
       $q = " UPDATE booking_details SET  timings='$time', payment_type='$pay' where user_id=$id"; 
                       echo $q;
                       $query = mysqli_query($connection,$q);
                       
                      if($query){
                          echo "<script>alert('Hall Update sucessful'); window.location.href='bookingdetail.php';</script>";

                        //  $_SESSION['success'] = "Hall Updated Successfully";
                         // header("Location:halldetails.php");
                        
                      }
                       else{
                            echo "<script>alert('Hall not Update sucessful'); window.location.href='bookingdetail.php';</script>";
                           //$_SESSION['status'] ="Hall details Not Updated";
                          // header("Location:halledit.php");
                       }
                   }
     
     


?>


<div class="container-fluid">
    <div class="container-fluid bg">
        <div class="row">
            <div class="col-md-12 col-sm-4 col-xm-12"></div>
            <div class="col-md-12 col-sm-4 col-xm-12">
                <form action="#" method="post">
                  <h4 style="text-align: center;color:black;">UPDATE BOOKING DETAILS
                        <hr>
                    </h4> 
                    
         <div class="form-group">
     <label style="color:black;">Hall Name</label>
     <input type="text" name="hallid" class="form-control" value="<?php echo getName2($connection, $fetch1['hall_id']);?>">
     </div>             
        <div class="form-group">
     <label style="color:black;">User_ID</label>
     <input type="text" name="userid" class="form-control"  value="<?php echo $fetch1['user_id'];?>" >
     </div>                  
                   
                    
      <div class="form-group">
       <label style="color:black;">Username</label>
      <input type="text" name="username" class="form-control"  value="<?php echo $fetch1['username'];?>" >
     </div>
    <div class="form-group">
       <label style="color:black;">Email</label>
      <input type="email" name="email" class="form-control" value="<?php echo $fetch1['email'];?>" >
     </div>
  <div class="form-group">
       <label style="color:black;">Phone No.</label>
      <input type="text" name="phone" class="form-control"  value="<?php echo $fetch1['phone'];?>" >
     </div>
    <div class="form-group">
       <label style="color:black;">Date Of Booking</label>
      <input type="text"  id="txtdate" class="form-control" name="date" value="<?php echo $fetch1['date_of_book'];?>" >
     </div> 
      <div class="form-group">
     <label style="color:black;">Ocassion</label>
     <input type="text" name="ocassion" class="form-control"  value="<?php echo getName3($connection, $fetch1['occassion']);?>">
     </div>
     <div class="form-group">
     <label style="color:black;">No.Of Guest</label>
     <input type="text" name="guest" class="form-control" value="<?php echo $fetch1['no_of_guest'];?>">
     </div>
            <div class="form-group">
     <label style="color:black;">Timings</label>
     <input type="text" name="time" class="form-control" value="<?php echo getName4($connection, $fetch1['timings']);?>">
     </div>
            <div class="form-group">
     <label style="color:black;">Payment</label>
     <input type="text" name="payment" class="form-control" value="<?php echo $fetch1['payment_type'];?>" >
     </div>
       <button type="submit" name="bookup" class="  btn-block btn btn-primary">UPDATE</button> 
                </form>
            </div>
        </div>
    </div>
</div>

<?php
session_start();
include'connection.php';
include('includes/header.php');
include('includes/navbar.php');
 if(isset($_POST['write'])){
   if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {

 echo"<script>alert('Login First for Booking!!!!');</script>";                       
                        

}
}
 
?>

<div class="card img-fluid" style="width:500px%">
   <img class="card-img-top " src="image/slider2.jpg" alt="Card image" style="background-size: cover;height:70vh;width: 100%; background-repeat: no-repeat;">
    <div class="card-img-overlay">
     <div class="headerrrrr">
      <h3 >  Meet our wonderful customers and learn the<br> magical journey they went through, with us.<br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<!--<button type="submit" class="btn btn-warning" >Write Review</button>--><button type="submit" name="write" class="btn btn-warning" data-toggle="modal" data-target="#myModal13" id="review">
    WRITE A REVIEW
  </button></h3>
    </div>
  </div>
</div> 
<div class="modal fade" id="myModal13">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
       
           <?php
             if(isset($_POST['test']))
{  
	$username=$_POST['username'];
	$review=$_POST['review'];
 $book=$_POST['hall'];
 $event=$_POST['event'];
	 $query="INSERT INTO testimonial( username,review,hall,event,created) VALUES('$username','$review','$book','$event',Now())";
	$query_run=mysqli_query($connection,$query);

	if ($query_run) {
 echo "<script>alert('Thankyou for Your Review!!!');</script>";	
	
	}
	else{
		
		echo "<script>alert('Something Wrong!!!');</script>";
	}

    }

?>
          <form action="#" method="POST" id="login">
          
  
      <div class="form-group">
    <label style="color:black">Username:</label>
    <input type="text" name="username" class="form-control" style="border:2px solid orange;" value="" >
  </div>
  <div class="form-group">
    <label style="color:black">Review:</label>
    <textarea name="review" rows="4" cols="50" style="border:2px solid orange;" class="form-control"></textarea>
  </div>
   
     <div class="form-group">
    <label style="color:black">Venue:</label>
    <input name="hall" style="border:2px solid orange;" class="form-control">
  </div>
         
   <div class="form-group">
    <label style="color:black">Event:</label>
    <input name="event" style="border:2px solid orange;" class="form-control">
  </div>
  
  <button type="submit" name="test" class="btn btn-warning">Submit</button>
</form>
        </div>
        
      
       
        
      </div>
    </div>
  </div>
 
<!-------------------------------------first slide--------------------------------->

<div class="container  mb-4 rounded-lg">
    
     <hr class="my-4">
<!--Slides-->
 <div class="carousel-inner" role="listbox">
<!--First slide-->
<div class="carousel-item active">
<div class="row">
           <?php
                 $select3="select * from Booking_details ";
       $exe3= mysqli_query($connection,$select3); 
       $fetch3= mysqli_fetch_array($exe3);
       // $user= $fetch2['user_id'];
       // echo $user;
        // $num2=mysqli_num_rows($exe3);
            $select1="select * from testimonial";
              $q=mysqli_query($connection,$select1);
              while($row=mysqli_fetch_array($q)){?>
            <div class="col-lg-4 mb-5" >
              <div class="card border-warning mb-2">
               <div class="card-body " style=" box-shadow: 10px 10px 5px rgb(245, 98, 7);height:20rem; ">
                 <div class="card-header"><?php echo $row['username'];?></div>
                  <h4 class="card-title"> </h4>
                  <i class="fas fa-quote-left"style="color:#b0a7a7;"  ></i>&nbsp;
                  <p class="card-text text-muted"><?php echo $row['review'];?></p><br><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-quote-right" style="color:#b0a7a7;" ></i>
             
                   
                    <div class="card-footer ">
                         <h6 class="card-text text-muted">Booked: <?php echo $row['hall'];?></h6>
                          <h6 class="card-text text-muted">Event: <?php echo $row['event'];?></h6>
                           <h6 class="card-text text-muted">BookingDate: <?php echo $row['created'];?></h6>
                        </div>
                 <!-- <a class="btn btn-primary">Button</a>-->
                </div>
              </div>
            </div>
<?php } ?>
          
           </div>
            </div>
    </div>
    </div>   
  <br>
  <br>
  <br>

<?php
include('includes/footer.php');
?>

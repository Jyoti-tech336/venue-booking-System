<?php
session_start();
include'connection.php';
include('includes/header.php');
include('includes/navbar.php');

if(isset($_POST['booking'])){
   if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {

 echo"<script>alert('Login First for Booking!!!!');</script>";                       
                        

}
}
     


?>
 <script language="javascript">
        $(document).ready(function () {
            $("#txtdate").datepicker({
                minDate: 0
            });
        });
    </script>

<script language="javascript">
    $(document).ready(function () {
        $("#txtdate").datepicker({
            minDate: 0
        });
    });
</script>
 
 <div class="card img-fluid" style="width:500px%">
    <img class="card-img-top" src="image/shutterstock_386489839.jpg" alt="Card image" style="background-size: cover;height:60vh;width: 100%; background-repeat: no-repeat;">
    <div class="card-img-overlay">
     <div class="headerrrrr">
      <h1 class="animated " > Check Availbilty& Book......</h1>
   </div>
     </div>
    </div>
    
   
   <?php
 
     $id=$_GET['hotelid'];
 $select="select * from halls_details where hall_id=$id";
$result=mysqli_query($connection,$select);
     
        while($row=mysqli_fetch_assoc($result)){ ?>
 <div class="container">
    <div class="my-5">
  <div class="py-5">
   <div class="row">
   <div class="card" style="width: 40rem;">
     <div class="card-body" >
  <h3 class="card-title" align="center" style="font-family: 'Lobster', cursive;" ><?php echo $row['name'];?></h3>
 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image/<?php echo $row['image'];?>"
        alt="First slide" style="height:30rem;"> 
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/<?php echo $row['image2'];?>"
        alt="Second slide" style="height:30rem;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/<?php echo $row['image3'];?>"
        alt="Third slide" style="height:30rem;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a><br>
  <br>
  <hr>
  <h3 style="font-family: 'Lobster', cursive;">About&nbsp;<?php echo $row['name']?></h3>
   <p class="card-text" style="font-size: 15px;font-family: 'Montserrat', sans-serif;"><?php echo $row['description'];?></p>
   <br>
   <hr>
    <ul class="list-group list-group-flush ">
   
   
    <li class="list-group-item"> <i class="fas fa-home fa-sm"></i>&nbsp;&nbsp;Adderss:-<ul>
      <li style="font-size: 15px;font-family: 'Montserrat', sans-serif;"><?php echo $row['address'];?></li> 
    </ul></li>
  </ul>

  <hr> <div class="row row-divided">
        <div class="col-xs-6 column-one">
    <ul class="list-group list-group-flush ">
   
   
    <li class="list-group-item"> <i class="fas fa-phone-alt fa-sm"></i>&nbsp;&nbsp;Contact:-<ul>
      <li style="font-size: 15px;font-family: 'Montserrat', sans-serif;"><?php echo $row['contact'];?> </li> 
    </ul></li>	
    
            </ul> </div>&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;
  <div class="vertical-divider"></div>
    	<div class="col-xs-6 column-two">
             <ul class="list-group list-group-flush ">
    <li class="list-group-item"> <i class="fas fa-envelope fa-sm"></i>&nbsp;&nbsp;Email:-<ul>
      <li style="font-size: 15px;font-family: 'Montserrat', sans-serif;"><?php echo $row['email'];?></li> 
    </ul></li>
  </ul>
    	</div>
     </div>
     <hr>
    <div class="row row-divided">
        <div class="col-xs-6 column-one">
    <ul class="list-group list-group-flush ">
   
   
      <li class="list-group-item"> <i class="fas fa-utensils  fa-sm"></i>&nbsp;&nbsp;Food_cost:-<ul>
      <li style="font-size: 15px;font-family: 'Montserrat', sans-serif;"><?php echo $row['food_cost'];?></li>
    </ul></li>	
    
            </ul> </div>&nbsp; 
  <div class="vertical-divider"></div>
    	<div class="col-xs-6 column-two">
             <ul class="list-group list-group-flush ">
    <li class="list-group-item"> <i class="fas fa-male fa-sm"></i>&nbsp;&nbsp;Capacity:-<ul>
      <li style="font-size: 15px;font-family: 'Montserrat', sans-serif;"><?php echo $row['Capacity'];?></li> 
    </ul></li>
  </ul>
    	</div>
     </div> 
     

   <hr>
    <div class="row row-divided">
        <div class="col-xs-6 column-one">
    <ul class="list-group list-group-flush ">
   
   
      <li class="list-group-item"> <i class="fas fa-concierge-bell fa-sm"></i>&nbsp;&nbsp;Services:-<ul>
      <li style="font-size: 15px;font-family: 'Montserrat', sans-serif;"><?php echo $row['services'];?></li>
    </ul></li>	
    
            </ul> </div>&nbsp; 
  <div class="vertical-divider"></div>
    	<div class="col-xs-6 column-two">
             <ul class="list-group list-group-flush ">
                 <li class="list-group-item"> <i class="fas fa-rupee-sign fa-sm"></i>&nbsp;&nbsp;Booking-Cost:-<ul>
      <li style="font-size: 15px;font-family: 'Montserrat', sans-serif;"><?php echo $row['booking_cost'];?></li> 
    </ul></li>
  </ul>
    	</div>
     </div> 
  
</div> 
 </div> 
</div>
   
   <?php
       
     $id=$_GET['hotelid'];                                       
      if(isset($_POST['booking'])){
        $id = $_POST['id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $guest = $_POST['guest'];
        $occassion = $_POST['occassion'];
        $time = $_POST['time'];
        $intr=$_POST['usertype'];
          
        $sql= mysqli_query($connection,"select * from booking_details where hall_id='$id' and timings='$time' and date_of_book='$date' ");
  if(mysqli_num_rows($sql)) 
  {
       echo "<script>alert('Hall is Not Available!!!!!')</script>";


  }  
          
  else{
      $insert = "INSERT INTO booking_details(hall_id,username,email,phone,date_of_book,no_of_guest,occassion,timings,payment_type,created)VALUES('$id','$username','$email','  $phone','$date','$guest','$occassion','$time','$intr',NOW())";  
      $run=mysqli_query($connection,$insert);
      if($run){
           echo "<script>alert('Thankyou For Booking!!!!')</script>";

      }
  }        
          
      }
          
          
          
          
         // $insert = "INSERT INTO booking_details(hall_id,username,email,phone,date_of_book,no_of_guest,occassion,timings,payment_type,created)VALUES('$id','$username','$email','  $phone','$date','$guest','$occassion','$time','$intr',NOW())";
//$run=mysqli_query($connection,$insert);
        //  if($run){
  //$query= "select *from halls_details where hall_id not in (select hall_id from booking_details where timimgs=$time) ";
          //  $run1 =  mysqli_query($connection,$query);  
     //echo "<script>alert('done')</script>";
///}

        
        
   
  //else{       

        
     
             // echo "<script>alert ('Hall is not Avaiable on this timmimg.')</script>";
        
  //}
     // }
                       
       
       
       
       
       
       ?>
   

   &nbsp;&nbsp;  &nbsp;&nbsp;
 
  <div class="main" >
 <div class="card mr-2 " style="width: 25rem;">
 
 <div class="py-2">
<div class="card-body"style="background-color:rgb(242, 157, 19)" >
 
  <h5  style="background-color:rgb(242, 157, 19)" align="center">Check Avalibility& Book</h5>
  <hr>
<form action="#" method="post"> 
      <div class="form-group" >
      
      <input type="hidden" name="id" class="form-control" placeholder="Enter Your Name" value="<?php echo $id;?>" style="border:2px solid orange;" required>
     </div>
     
     
      <div class="form-group">
       <label style="color:black;">Username</label>
      <input type="text" name="username" class="form-control" placeholder="Enter Your Name" value="" style="border:2px solid orange;" required>
     </div>
    <div class="form-group">
       <label style="color:black;">Email</label>
      <input type="email" name="email" class="form-control" placeholder="Enter Your Email" value="" style="border:2px solid orange;" required>
     </div>
  <div class="form-group">
       <label style="color:black;">Phone No.</label>
      <input type="text" name="phone" class="form-control" placeholder="Enter Your Contact" value="" style="border:2px solid orange;" required>
     </div>
    <div class="form-group">
       <label style="color:black;">Date Of Booking</label>
      <input type="text"  id="txtdate" class="form-control" name="date" value="" style="border:2px solid orange;"  required>
     </div> 
      <div class="form-group">
     <label style="color:black;">No.Of Guest</label>
     <input type="text" name="guest" class="form-control" placeholder="Enter Number Of Guest" style="border:2px solid orange;" required>
     </div>
   <div class="form-group">
     <label style="color:black;">Ocassion</label>
     <select  name="occassion" style="border:2px solid orange;" class="form-control" required>
         <?php
         // include'connection.php';
          $q1="select * from event_name";
           $exe= mysqli_query($connection,$q1);
            while($fetch= mysqli_fetch_array($exe)){ ?>
             <option value="<?php echo $fetch['event_id']?>"><?php echo $fetch['event_name']; ?></option>
          <?php } ?>
       </select></div>
        
     <div class="form-group">
                        <label style="color:black;">Timing</label>
                        <select name="time" style="border:2px solid orange;"class="form-control"   required>
                           <?php
                           $q1="select * from time";
           $exe= mysqli_query($connection,$q1);
            while($fetch= mysqli_fetch_array($exe)){ ?>
             <option value="<?php echo $fetch['time_id']?>"><?php echo $fetch['time']; ?></option>
          <?php } ?>
             </select>
                    </div>
                    
      <div class="form-group">
   
    <input type="radio" name="usertype" id="usertype1" value="cash" />Cash
    <input type="radio" name="usertype" id="usertype2" value="paypal" />Paypal/CreditCard
     </div>     
                    
    <button  name="booking" type="submit" class="  btn-block btn-warning form-control" >Book</button>
</form>
     </div>
     </div>
      </div>
       </div>
      </div>
        </div>
     </div>
     
</div>
 <?php }?>
 
 
 <?php
include'includes/footer.php';
?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

  
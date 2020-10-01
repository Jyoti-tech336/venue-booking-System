<?php
session_start();
 include'connection.php';
include('includes/header.php');
include('includes/navbar.php');
?>






 
 <div class="card img-fluid" style="width:500px%">
    <img class="card-img-top" src="image/vishnu-r-nair-m1WZS5ye404-unsplash.jpg" alt="Card image" style="background-size: cover;height:50vh;width: 100%; background-repeat: no-repeat;">
    <div class="card-img-overlay">
     <div class="headerrrrr">
      <h1 class="animated " > Events Listings....</h1>
   </div>
     </div>
    </div>
    
   <br>
   <br>
   
   <!--end of banner-->
   
          <?php
           
          
             // include'connection.php';
         $id=$_GET['id'];
$select="select * from halls_details where event_id='$id'";
$exe= mysqli_query($connection,$select);
while($fetch= mysqli_fetch_array($exe)){ ?>
 
 <div class="container mb-4 rounded-lg" style="border: 1px solid grey; box-shadow: 10px 10px 5px orange; " >
  <div class="my-0">
  <div class="py-2">
   <div class="row">
       <div class="col-lg-6 col-md-6 col-12">
  
              <img src="image/<?php echo $fetch['image'];?>" style="background-size: cover;height:40vh;width: 65%; background-repeat: no-repeat;" >
            </div>
           <div class="col-lg-6 col-md-6 col-12">
           <h2 class="display-8" style="color: black; "><?php echo $fetch['name'];?></h2>
           <p><?php echo $fetch['address'];?></p>
           <p align="center"><a href="nirvanahotel.php?hotelid=<?php echo $fetch['hall_id']?>" style="color:#FF5733 ;">Click For More Details</a></p>
           </div>
       </div>
   </div>
      </div>  
      </div>
      <?php } ?>
      
   

    
    
   <!--  --footer--->
     <?php
    include('includes/footer.php');
    
    ?>
      
  
   
 
 
 
 

 
 
 
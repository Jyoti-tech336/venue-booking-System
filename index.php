<?php session_start();
include "connection.php";
include('includes/header.php');
include('includes/navbar.php');


$sql5 ="UPDATE visitor_counter SET count=count+1 WHERE count_id =1";
$connection->query($sql5);
$sql5="SELECT count FROM visitor_counter WHERE count_id = 1";
$result8=$connection->query($sql5);
if ($result8->num_rows > 0) {
        while($row = $result8->fetch_assoc()) {
            $visits = $row["count"];
            //echo $visits;
        }
    } else {
        echo "no results";
    }
    
?>

<!----------------------------------start of search bar------------------------------------------>




  
  <div class="card img-fluid" style="width:500px%">
    <img class="card-img-top" src="image/corporate-event-pic1.jpg" alt="Card image" style="background-size: cover;height:110vh;width: 100%;">
    <div class="card-img-overlay">
      <h4 class="card-title"></h4>
      <p class="card-text">
       <div class="header">
           
          
        <form action="search.php" method="POST">
    
         <h2 class=" animated swing">Find Your Best Place</h2>
         <div class="form-group  bg">
  <!---------------------------------select event------------------------------------>
             <select name="event" class="search-filed Event" placeholder="Event">
             <?php
         // include'connection.php';
          $q1="select * from event_name";
           $exe= mysqli_query($connection,$q1);
            while($fetch= mysqli_fetch_array($exe)){ ?>
             <option value="<?php echo $fetch['event_id']?>"><?php echo $fetch['event_name']; ?></option>
          <?php } ?>
             </select>
 <!-----------------------------------select city------------------------------------>
              <select name="city" class="search-filed Event" placeholder="Location">
              <?php
         // include'connection.php';
          $q1="select * from city";
           $exe= mysqli_query($connection,$q1);
            while($fetch= mysqli_fetch_array($exe)){ ?>
              <option value="<?php echo $fetch['city_id']?>"><?php echo $fetch['name']; ?></option>
          <?php } ?>
              
             </select>
              <button class="search-btn " name="submit1" type="submit"><i class="fas fa-search"></i>&nbsp;&nbsp;Search</button>
             
         </div>
        
     </form>
  
    
    </div>
    
  </div>
</div>
  
 <!---------------------------search bar end------------------------------------------->
     
   <!-----------------------------------cards start------------------------------------->
   
   <div class="container">
    <h1 align="center" class="animated bounceInLeft">Why Book With Heritage Venue </h1>
    <div class="card-group">
    <div class="card" style="width: 18rem; background-color: azure;">
  <div class="card-body">
   
    <h5 class="card-title"><i class="fas fa-clipboard-list fa-3x align-center"></i></h5>
    <h6 class="card-subtitle mb-2 text-muted">Shortlist</h6>
    <p class="card-text">Shortlist from list <br>of recommended venues</p>
   <!-- <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>-->
  </div>
</div>
    <div class="card" style="width: 18rem; background-color: azure;">
  <div class="card-body">
   <h5 class="card-title"><i class="fas fa-map-marker-alt fa-3x align-items-center"></i></h5>
    <h6 class="card-subtitle mb-2 text-muted">Venue Visit</h6>
    <p class="card-text">Visit the venue with <br>our area experts</p>
  
  </div>
</div>
    <div class="card" style="width: 18rem; background-color: azure;">
  <div class="card-body">
   <h5 class="card-title"><i class="fas fa-address-card fa-3x align-items-center"></i></h5>
    <h6 class="card-subtitle mb-2 text-muted">Choose your vendors</h6>
    <p class="card-text">Book other vendors for your<br>event all at one place</p>
  
  </div>
</div>
    <div class="card" style="width: 18rem; background-color: azure;">
  <div class="card-body">
   <h5 class="card-title"><i class="fab fa-slideshare fa-3x align-items-center"></i></h5>
    <h6 class="card-subtitle mb-2 text-muted">Creative Ideas</h6>
    <p class="card-text">Send free e-invites, get inspired <br>from real event pictures and ideas</p>
  
  </div>
</div>
    </div>
    </div>
    
    <div class="container">
   
    <div class="card-group">
    <div class="card" style="width: 18rem; background-color: azure;">
  <div class="card-body">
   
    <h5 class="card-title"><i class="far fa-credit-card fa-3x align-center"></i></h5>
    <h6 class="card-subtitle mb-2 text-muted">Fast</h6>
    <p class="card-text">Faster and on time bookings</p>
   <!-- <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>-->
  </div>
</div>
    <div class="card" style="width: 10rem; background-color: azure;">
  <div class="card-body">
   <h5 class="card-title"><i class="fas fa-hand-holding-usd fa-3x align-items-center"></i></h5>
    <h6 class="card-subtitle mb-2 text-muted">Save </h6>
    <p class="card-text">Time/Money</p>
  
  </div>
</div>
    <div class="card" style="width: 10rem; background-color: azure;">
  <div class="card-body">
   <h5 class="card-title"><i class="fas fa-address-card fa-3x align-items-center"></i></h5>
    <h6 class="card-subtitle mb-2 text-muted">Choose your best Place</h6>
    <p class="card-text">Easier selection process with all <br>accurate and updated </p>
  
  </div>
</div>
    <div class="card" style="width: 10rem; background-color: azure;">
  <div class="card-body">
   <h5 class="card-title"><i class="fab fa-slideshare fa-3x align-items-center"></i></h5>
    <h6 class="card-subtitle mb-2 text-muted"></h6>
    <p class="card-text">Heritage Venue believes that online<br> venue booking should be as simple<br> as Browse, Book, and Celebrate! </p>
  
  </div>
</div>
    </div>
    </div>
    
    <!------------------------------cards end----------------------------------------------->
    
    <!---------------------------------------grid carousal----------------------------------->
    
    <h1 align="center">Featured Listing</h1>
    <div class="jumbotron jumbotron-fluid" style="background-image: url(image/b3-1350x450.jpg)">
    
  <div class="container my-4">

   

    <hr class="my-4">

    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

      <!--Controls-->
      <div class="col-12 text-right mb-4">
        <a class="btn btn-outline-warning prev" href="#multi-item-example" data-slide="prev" ><i class="fa fa-chevron-left"></i></a>
        <a class="btn btn-outline-warning next" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div>
      <!--/.Controls-->

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1"></li>
        <li data-target="#multi-item-example" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">

          <div class="row">
               <?php
               // $select="select * from halls_details  order by hall_id desc limit 3";
            $select= "select * from halls_details order by rand() limit 0,3";
           $result= mysqli_query($connection,$select);
           while($row=mysqli_fetch_assoc($result)){ ?>     
           
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2" >
                <img class="card-img-top rounded" src="image/<?php echo $row['image'];?>"
                  alt="Card image cap" style="height:15rem;">
                  <div class="carousel-caption mt-30px">
                      <h3 style="font-size: 20px;"><?php echo $row['name']?></h3>
                      <a href="nirvanahotel.php?hotelid=<?php echo $row['hall_id']?>"style="color: white">Click for detials</a>
                      <p><?php //echo $row['address']; ?></p>
                  </div>
                
              </div>
            </div><?php } ?>

 
          </div>

        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">

          <div class="row">
              <?php
               // $select="select * from halls_details  order by hall_id desc limit 3";
            $select= "select * from halls_details order by hall_id desc limit 0,3";
           $result= mysqli_query($connection,$select);
           while($row=mysqli_fetch_assoc($result)){ ?>     
           
            <div class="col-md-4 clearfix d-none d-md-block ">
              <div class="card mb-2" >
                <img class="card-img-top rounded" src="image/<?php echo $row['image'];?>"
                  alt="Card image cap" style="height:15rem;">
                  <div class="carousel-caption mt-30px">
                      <h3 style="font-size: 20px;"><?php echo $row['name']?></h3>
                      <a href="nirvanahotel.php?hotelid=<?php echo $row['hall_id']?>"style="color: white">Click for detials</a>
                      <p><?php //echo $row['address']; ?></p>
                  </div>
                
              </div>
            </div>
            
<?php } ?>
            </div>
          </div>
        
        <!--/.Second slide-->

       

      </div>
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->


  </div>

    
    
  </div> 
  <br>
  <br> 
  <!------------------------------------------------------------------------------------->
   <div class="container">
	<div class="row">
	    <br/>
	    
	   <div class="col text-center">
		<!--<h2>Bootstrap 4 counter</h2>
		<p>counter to count up to a target number</p>-->
		</div>
		
             
		
	</div>
	 <?php
                               
                          $query ="SELECT count FROM visitor_counter WHERE count_id = 1";
                          $query_run =  mysqli_query($connection,$query);
                          $row=mysqli_fetch_assoc($query_run);
                         
                         
                              ?>
		<div class="row text-center">
	        <div class="col-4">
	        <div class="counter">
      <i class="fa fa-code fa-2x"></i>
      <h2 class="timer count-title count-number" style="color:black;" data-to="<?php echo $row["count"]?>" data-speed="1500"></h2>
       <p class="count-text ">Our Customer</p>
    </div>
	        </div>
             
              <div class="col-4">
               <div class="counter">
               
      <i class="fa fa-smile-beam fa-2x"></i>
      <h2 class="timer count-title count-number" style="color:black;" data-to="1700" data-speed="1500"></h2>
      <p class="count-text ">Happy Clients</p>
    </div>
              </div>
              <div class="col-4">
                  <div class="counter">
      <i class="fa fa-lightbulb-o fa-2x"></i>
      <h2 class="timer count-title count-number" style="color:black;" data-to="11900" data-speed="1500"></h2>
      <p class="count-text ">Bookings</p>
    </div></div>
              <div class="col">
             
              </div>
         </div>
</div>

    <br>
    <br>
   
   
   
    <!--------------------------------- new grid------------------------------->
    
    <h1 align="center">Finest Venue For Every Occasion</h1>
     <div class="jumbotron jumbotron-fluid" style="background-image: url(image/corporate-event-pic1.jpg)">
  

    <div class="container pt-3">

    
    <div class="row">

    <!--Carousel Wrapper-->
    <div id="multi-item-example2" class="carousel slide carousel-multi-item" data-ride="carousel">

      <!--Controls-->
      <div class="col-12 text-right mb-4">
        <a class="btn btn-outline-warning prev" href="#multi-item-example2" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="btn btn-outline-warning next" href="#multi-item-example2" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div>
      <!--/.Controls-->

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example2" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example2" data-slide-to="1"></li>
        <li data-target="#multi-item-example2" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="container pt-0 mt-2  carousel-inner" >

        <!--First slide-->
        <div class="carousel-item active">

          <div class="row">
            <?php
               // $select="select * from halls_details  order by hall_id desc limit 3";
            $select= "select * from halls_details order by hall_id asc limit 0,3";
           $result= mysqli_query($connection,$select);
           while($row=mysqli_fetch_assoc($result)){ ?>     
           
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="image/<?php echo $row['image']?>"
                  alt="Card image cap" style="height:15rem;">
                   
                <div class="card-body"  style="height:10rem;">
                <h4 class="card-title"><?php echo $row['name']?></h4>
                
                  
                 <a class="btn btn-warning" href="nirvanahotel.php?hotelid=<?php echo $row['hall_id']?>">View Details</a>
                </div>
              </div>
            </div>
<?php } ?>
            </div>
          </div>
          
          
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">

          <div class="row">
             <?php
               // $select="select * from halls_details  order by hall_id desc limit 3";
            $select= "select * from halls_details order by rand() limit 0,3";
           $result= mysqli_query($connection,$select);
           while($row=mysqli_fetch_assoc($result)){ ?>     
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2" >
                <img class="card-img-top" src="image/<?php echo $row['image']?>"
                  alt="Card image cap"  style="height:15rem;">
                   
                <div class="card-body " style="height:10rem;">
                <h4 class="card-title"><?php echo $row['name']?></h4>
                
     <a class=" align-self-end btn btn-warning" href="nirvanahotel.php?hotelid=<?php echo $row['hall_id']?>">View Details</a>
                  
                  
                  
                </div>
              </div>
            </div>
<?php } ?>
            </div>
          </div>
          
         
        <!--/.Second slide-->

        
      </div>
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->
        </div>

  </div>
</div>

<!----------------------------------------birthday party slider----------------------------->



<h1 align=" center"> Book Heritage Recomended Venues</h1>
    <div class="jumbotron jumbotron-fluid" style="background-image: url(image/slider2.jpg)">
    <div class="container pt-3">

    
    <div class="row">

    <!--Carousel Wrapper-->
    <div id="multi-item-example3" class="carousel slide carousel-multi-item" data-ride="carousel">

      <!--Controls-->
      <div class="col-12 text-right mb-4">
        <a class="btn btn-outline-warning prev" href="#multi-item-example3" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="btn btn-outline-warning prev" href="#multi-item-example3" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div>
      <!--/.Controls-->

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example3" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example3" data-slide-to="1"></li>
        <li data-target="#multi-item-example3" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="container pt-0 mt-2  carousel-inner" >

        <!--First slide-->
        <div class="carousel-item active">

          <div class="row">
           <?php
               // $select="select * from halls_details  order by hall_id desc limit 3";
            $select= "select * from halls_details order by rand() limit 0,3";
           $result= mysqli_query($connection,$select);
           while($row=mysqli_fetch_assoc($result)){ ?>  
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="image/<?php echo $row['image'];?>"
                  alt="Card image cap"  style="height:15rem;">
                <div class="card-body" style="height:10rem;">
                
                  <h4 class="card-title" ><?php echo $row['name']?></h4>
                  
         <a class="btn btn-warning" href="nirvanahotel.php?hotelid=<?php echo $row['hall_id']?>">View details</a>
                </div>
              </div>
            </div>
<?php } ?>
            </div>
          </div>
          
                  <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">

          <div class="row">
            <?php
               // $select="select * from halls_details  order by hall_id desc limit 3";
            $select= "select * from halls_details order by rand() limit 0,3";
           $result= mysqli_query($connection,$select);
           while($row=mysqli_fetch_assoc($result)){ ?>  
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="image/<?php echo $row['image']?>"
                  alt="Card image cap"  style="height:15rem;">
                   <!-- <h4 class="card-title">Card title</h4>-->
                <div class="card-body" style="height:10rem;">
                <h4 class="card-title"><?php echo $row['name']?></h4>
                  
                  <a class="btn btn-warning"  href="nirvanahotel.php?hotelid=<?php echo $row['hall_id']?>">View details</a>
                  
                  
                </div>
              </div>
            </div>
<?php } ?>
            </div>
          </div>
        </div>
         
       
      </div>
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->
        </div>
</div>

 
   <br>
   <br>
   <br>
   <!--------------------------- birthday party slider end----------------------------->
    
    
   <!-- -------------------------------Footer start------------------------------------>
<?php include('includes/footer.php');?>
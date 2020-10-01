<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
$email=$_SESSION['email'];
 $id= $_SESSION['user_type'];

?>

<!----model------->


<div class="modal fade" id="halldetailmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hall Deatils</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="code.php" method="POST" enctype="multipart/form-data">
               
                <div class="modal-body">
                  <div class="form-group">
                        <label>Select Category:</label>
                                            <select class=" form-control" id="cat_id" name="cat_id">
                         <?php $venue="select * from category_venue";
                                  $result= mysqli_query($connection,$venue);
                                  while($fetch=mysqli_fetch_array($result)){ ?>
                                    <option value="<?php echo $fetch['id']; ?>"><?php echo $fetch['category_name']; ?></option>
                                                <?php } ?>
                                            </select>
                                      
                    </div>
                    
                     <div class="form-group">
                        <label>Select Event:</label>
                                            <select class=" form-control" id="event_id" name="event_id">
                         <?php $venue="select * from event_name";
                                  $result= mysqli_query($connection,$venue);
                                  while($fetch=mysqli_fetch_array($result)){ ?>
                                    <option value="<?php echo $fetch['event_id']; ?>"><?php echo $fetch['event_name']; ?></option>
                                                <?php } ?>
                                            </select>
                                      
                    </div>
                   
                     <div class="form-group">
                        <label>Select City:</label>
                                            <select class=" form-control" id="city_id" name="city_id">
                         <?php $venue="select * from city";
                                  $result= mysqli_query($connection,$venue);
                                  while($fetch=mysqli_fetch_array($result)){ ?>
                                    <option value="<?php echo $fetch['city_id']; ?>"><?php echo $fetch['name']; ?></option>
                                                <?php } ?>
                                            </select>
                                      
                    </div>
                   
                   
                    <div class="form-group">
                        <label>Hall Name:</label>
                        <input type="text" name="name"  class="form-control" required>
                        <span id="hallnameid" class="text-warning font-weight-bolder"></span>
                    </div>

                    <div class="form-group">
                        <label>Contact:</label>
                        <input type="contact" name="contact"  class="form-control" maxlength="13" required>
                        <span id="contactid" class="text-warning font-weight-bolder"></span>
                    </div>

                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email"  class="form-control">
                        <span id="passwordid" class="text-warning font-weight-bolder"></span>
                    </div>

                    <div class="form-group">
                        <label>Booking Cost:</label>
                        <input type="text" name="booking_cost"  class="form-control" required><span id="bookingcostid" class="text-warning font-weight-bolder"></span>
                    </div>

                    <div class="form-group">
                        <label>Food Cost:</label>
                        <input type="text" name="food_cost"  class="form-control" required><span id="foodcostid" class="text-warning font-weight-bolder"></span>
                    </div>

                    <div class="form-group">
                        <label>Capacity:</label>
                        <input type="text" name="capacity" class="form-control" required><span id="capacityid" class="text-warning font-weight-bolder"></span>
                    </div>

                    <div class="form-group">
                        <label>Address:</label>
                        <textarea name="address" rows="3"  class="form-control" required></textarea><span id="addressid" class="text-warning font-weight-bolder"></span>
                    </div>

                    <div class="form-group">
                        <label>Services:</label>
                        <textarea name="services" rows="3" class="form-control" required></textarea><span id="servicesid" class="text-warning font-weight-bolder"></span>
                    </div>

                    <div class="form-group">
                        <label>Description:</label>
                        <textarea name="description" rows="3"  class="form-control" required></textarea><span id="descriptionid" class="text-warning font-weight-bolder"></span>
                    </div>


                    <div class="form-group">
                        <label>UploadImage:</label>
                        <input type="file" name="fileimage1" id="hallimage"  class="form-control" required>
                        <span id="imageid" class="text-warning font-weight-bolder"></span><br>
                 </div>
                 
                 <div class="form-group">
                        <label>UploadImage:</label>
                        <input type="file" name="fileimage2" id="hallimage"  class="form-control" required>
                        <span id="imageid" class="text-warning font-weight-bolder"></span><br>
                 </div>
                 
                 <div class="form-group">
                        <label>UploadImage:</label>
                        <input type="file" name="fileimage3" id="hallimage"  class="form-control" required>
                        <span id="imageid" class="text-warning font-weight-bolder"></span><br>
                 </div>
                 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="insert_hall" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="container-fluid width=100%">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m=0 font-weight-bold text-primary">Hall Details
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#halldetailmodel">
                    Insert Hall Details
                </button>
            </h6>
        </div>





        <!-------model------->

        <div class="card-body">

            <?php
if(isset($_SESSION['success'])&& $_SESSION['success']!='')
{
	echo'<h2>'.$_SESSION['success'].'</h2>';
	unset($_SESSION['success']);
}


if(isset($_SESSION['status'])&& $_SESSION['status']!='')
{
	echo'<h2 class="big-info">'.$_SESSION['status'].'</h2>';
	unset($_SESSION['status']);
}


?>
            <h4>Hall Details</h4>
            <div class="table-responsive" >

                <?php
                if (isset($_GET['page_no']) && $_GET['page_no']!="") {
  $page_no = $_GET['page_no'];
  } else {
  $page_no = 1;
  }

  $total_records_per_page = 3;
  $offset = ($page_no-1) * $total_records_per_page;
  $previous_page = $page_no - 1;
  $next_page = $page_no + 1;
  $adjacents = "2"; 

  $result_count = mysqli_query($connection,"SELECT COUNT(*) As total_records FROM halls_details");
  $total_records = mysqli_fetch_array($result_count);
  $total_records = $total_records['total_records'];
  $total_no_of_pages = ceil($total_records / $total_records_per_page);
  $seconnd_last = $total_no_of_pages - 1; // total page minus 1

  //$result = mysqli_query($connection,"SELECT * FROM halls_details  LIMIT $offset, $total_records_per_page ");
                if($id==1){
    $results ="SELECT * FROM halls_details LIMIT $offset, $total_records_per_page "; }
                else{
$results ="SELECT * FROM halls_details where admin_id='$id' LIMIT $offset, $total_records_per_page ";}
$result= mysqli_query($connection,$results);
function getName($connection,$id){
    $q1="select * from category_venue where id='$id'";
    $exe= mysqli_query($connection,$q1);
    $fet= mysqli_fetch_array($exe);
    $name= $fet['category_name'];
    return $name;
}
     function getName2($connection,$id1){
    $q2="select * from event_name where event_id='$id1'";
    $exe2= mysqli_query($connection,$q2);
    $fet2= mysqli_fetch_array($exe2);
    $name2= $fet2['event_name'];
    return $name2;
}
                
    function getName3($connection,$id2){
    $q3="select * from city where city_id='$id2'";
    $exe3= mysqli_query($connection,$q3);
    $fet3= mysqli_fetch_array($exe3);
    $name3= $fet3['name'];
    return $name3;
}
            
                
                
        ?>
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                           
                           
                             <th>HallID</th>
                            <th>Category_ID</th>
                            <th>Event</th>
                            <th>City</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Booking Cost</th>
                            <th>Food Cost</th>
                            <th>Capacity</th>
                            <th class="p-5">Address</th>
                            <th>Services</th>
                            <th class="p-5">Description</th>
                            <th>Image</th>
                             <th>Image2</th>
                              <th>Image3</th>
                            <th>UPDATE</th>
                            <th>DELETE</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    
                        while($row = mysqli_fetch_assoc($result))
                        {
                           ?>


                        <tr>
                            <td><?php echo $row['hall_id'];?></td>
                            <td><?php echo getName($connection,$row['cid']);?></td>
                            <td><?php echo getName2($connection,$row['event_id']);?></td>
                            <td><?php echo getName3($connection,$row['city_id']);?></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['contact'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['booking_cost'];?></td>
                            <td><?php echo $row['food_cost'];?></td>
                            <td><?php echo $row['Capacity'];?></td>
                            <td><?php echo $row['address'];?></td>
                            <td><?php echo $row['services'];?></td>
                           
                            <td><?php echo $row['description'];?></td>
                             <td><?php echo '<img src="../image2/'.$row['image'].'"width="100px;" height="100px;" alt="image">'?></td>
                              <td><?php echo '<img src="../image2/'.$row['image2'].'"width="100px;" height="100px;" alt="image">'?></td>
                               <td><?php echo '<img src="../image2/'.$row['image3'].'"width="100px;" height="100px;" alt="image">'?></td>
                            <td>                         
                                <button class="btn btn-success"><a style="color:white" href="halledit.php?id=<?php echo $row ['hall_id'];?>">UPDATE</a></button>
                            </td>
                            <td>

                                <button class="btn btn-danger"><a style="color:white" href="halldelete.php?id=<?php echo $row ['hall_id'];?>">DELETE</a></button>
                            </td>

                        </tr>
                        <?php
                        
                    }
                    
                    
                    ?>
                    </tbody>
                </table>
                <ul class="pagination">
  <?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>
    
  <li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
  <a <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
  </li>       
    <?php 
  if ($total_no_of_pages <= 10){     
    for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
      if ($counter == $page_no) {
       echo "<li class='active'><a>$counter</a></li>";  
        }else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
           }
        }
  }
  elseif($total_no_of_pages > 10){    
  if($page_no <= 4) {     
   for ($counter = 1; $counter < 8; $counter++){     
      if ($counter == $page_no) {
       echo "<li class='active'><a>$counter</a></li>";  
        }else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
            }
        }
    echo "<li><a>...</a></li>";
    echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
    echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
    }

   elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {     
    echo "<li><a href='?page_no=1'>1</a></li>";
    echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";
        for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {     
           if ($counter == $page_no) {
       echo "<li class='active'><a>$counter</a></li>";  
        }else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
        }                  
       }
       echo "<li><a>...</a></li>";
     echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
     echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
            }
    
    else {
        echo "<li><a href='?page_no=1'>1</a></li>";
    echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";

        for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
          if ($counter == $page_no) {
       echo "<li class='active'><a>$counter</a></li>";  
        }else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
        }                   
                }
            }
  }
?>
    
  <li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
  <a <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
  </li>
    <?php if($page_no < $total_no_of_pages){
    echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
    } ?>
</ul>


  <?php  mysqli_close($connection); ?>
  
            </div>
        </div>


        <?php include('includes/scripts.php');
include('includes/footer.php');?>

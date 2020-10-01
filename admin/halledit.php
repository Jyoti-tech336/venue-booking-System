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
                <form action="#" method="post" enctype="multipart/form-data">
                    <?php
                    $id= $_GET['id'];
                   $q1="select * from halls_details where hall_id='$id'";
                    $exe= mysqli_query($connection,$q1);
                    $fetch1= mysqli_fetch_array($exe);
                    
       
                   if(isset($_POST['submit22'])){
                       $id = $_GET['id'];
                       $cid=$_POST['cat_id1'];
                       $event=$_POST['event_id1'];
                       $city=$_POST['city_id1'];
                       $name = $_POST['name'];
                       $contact = $_POST['contact'];
                       $email = $_POST['email'];
                       $bookingcost = $_POST['booking_cost'];
                       $foodcost = $_POST['food_cost'];
                       $capacity = $_POST['Capacity'];
                       $address = $_POST['address'];
                       $services = $_POST['services'];
                       $description = $_POST['description'];
                      
                       $image = $_FILES['file2']['tmp_name'];
                       $filename = rand(100,200)."_".$_FILES['file2']['name'];
	                   $location = "../image/".$filename;
                         
                       $image2 = $_FILES['file3']['tmp_name'];
                       $filename1 = rand(100,200)."_".$_FILES['file3']['name'];
	                   $location1 = "../image/".$filename1;
                       
                        $image3 = $_FILES['file4']['tmp_name'];
                       $filename2 = rand(100,200)."_".$_FILES['file4']['name'];
	                   $location2 = "../image/".$filename2;
                       $err=[];
                       
if(!move_uploaded_file($image,$location)){
    $err[0]="please upload image again";
}
                       if(!move_uploaded_file($image2,$location1)){
    $err[1]="please upload image again";
}
                       if(!move_uploaded_file($image3,$location2)){
    $err[2]="please upload image again";
}
    
    $q = " UPDATE halls_details SET  cid='$cid',event_id='$event',city_id='$city', name='$name',contact = '$contact', email='$email',booking_cost='$bookingcost',food_cost='$foodcost',Capacity='$capacity',address='$address',services='$services',description='$description',image='$location',image2='$location1',image3='$location2' WHERE hall_id=$id";
                       echo $q;
                       $query = mysqli_query($connection,$q);
                       
                      if($query){
                          echo "<script>alert('Hall Update sucessful'); window.location.href='halldetails.php';</script>";

                        //  $_SESSION['success'] = "Hall Updated Successfully";
                         // header("Location:halldetails.php");
                        
                      }
                       else{
                            echo "<script>alert('Hall not Update sucessful'); window.location.href='halldetails.php';</script>";
                           //$_SESSION['status'] ="Hall details Not Updated";
                          // header("Location:halledit.php");
                       }
                   }
                   ?>


                    <h4 style="text-align: center;color:black;">UPDATE HALL DETAILS
                        <hr>
                    </h4>
                    <div class="form-group">
                        <label><i class="fas fa-user-friends"></i>&nbsp;Select Category:</label>
                        <select class=" form-control" id="cat_id1" name="cat_id1">
                            <?php $venue="select * from category_venue";
                                  $result= mysqli_query($connection,$venue);
                                  while($fetch=mysqli_fetch_array($result)){ ?>
                            <option value="<?php echo $fetch['id']; ?>"><?php echo $fetch['category_name']; ?></option>
                            <?php } ?>
                        </select>

                    </div>
                    
                     <div class="form-group">
                        <label><i class="fas fa-user-friends"></i>&nbsp;Select Category:</label>
                        <select class=" form-control" id="event_id1" name="event_id1">
                            <?php $event="select * from event_name";
                                  $result= mysqli_query($connection,$event);
                                  while($fetch=mysqli_fetch_array($result)){ ?>
                            <option value="<?php echo $fetch['event_id']; ?>"><?php echo $fetch['event_name']; ?></option>
                            <?php } ?>
                        </select>

                    </div>
                    
                     <div class="form-group">
                        <label><i class="fas fa-user-friends"></i>&nbsp;Select Category:</label>
                        <select class=" form-control" id="city_id1" name="city_id1">
                            <?php $city="select * from city";
                                  $result= mysqli_query($connection,$city);
                                  while($fetch=mysqli_fetch_array($result)){ ?>
                            <option value="<?php echo $fetch['city_id']; ?>"><?php echo $fetch['name']; ?></option>
                            <?php } ?>
                        </select>

                    </div>


                    <div class="form-group">
                        <label><i class="fas fa-user-friends"></i>&nbsp;Hall Name:</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $fetch1['name'];?>" required>
                        <span id="hallnameid" class="text-warning font-weight-bolder"></span>
                    </div>

                    <div class="form-group">
                        <label><i class="fas fa-envelope"></i>&nbsp;Contact:</label>
                        <input type="contact" name="contact" class="form-control" maxlength="13" value="<?php echo $fetch1['contact'];?>" required>
                        <span id="contactid" class="text-warning font-weight-bolder"></span>
                    </div>

                    <div class="form-group">
                        <label><i class="fas fa-key"></i>&nbsp;Email:</label>
                <input type="email" name="email" class="form-control" value="<?php echo $fetch1['email'];?>">
                        <span id="passwordid" class="text-warning font-weight-bolder"></span>
                    </div>
                    <div class="form-group">
                        <label><i class="fas fa-home"></i>&nbsp;Booking Cost:</label>
 <input type="text" name="booking_cost" class="form-control" value="<?php echo $fetch1['booking_cost'];?>" required><span id="bookingcostid" class="text-warning font-weight-bolder"></span>
                    </div>
                    <div class="form-group">
                        <label><i class="fas fa-home"></i>&nbsp;Food Cost:</label>
        <input type="text" name="food_cost" class="form-control" value="<?php echo $fetch1['food_cost'];?>" required><span id="foodcostid" class="text-warning font-weight-bolder"></span>
                    </div>
                    <div class="form-group">
                        <label><i class="fas fa-home"></i>&nbsp;Capacity:</label>
          <input type="text" name="Capacity" class="form-control" value="<?php echo $fetch1['Capacity'];?>" required><span id="capacityid" class="text-warning font-weight-bolder"></span>
                    </div>
                    <div class="form-group">
                        <label><i class="fas fa-home"></i>&nbsp;Address:</label>
         <textarea name="address" rows="3" class="form-control" value=""  required><?php echo $fetch1['address'];?></textarea><span id="addressid" class="text-warning font-weight-bolder"></span>
                    </div>
                    <div class="form-group">
                        <label><i class="fas fa-home"></i>&nbsp;Services:</label>
                     <textarea name="services" rows="3" class="form-control" value=""  required><?php echo $fetch1['services'];?></textarea>
                    </div>
                    <div class="form-group">
                        <label><i class="fas fa-home"></i>&nbsp;Description:</label>
 <textarea name="description" rows="3" class="form-control" value=""  required><?php echo $fetch1['description'];?></textarea><span id="descriptionid" class="text-warning font-weight-bolder"></span>
                    </div>
                    <div class="form-group">
                        <label><i class="fas fa-phone-alt"></i>&nbsp;UploadImage:</label>
                        <input type="file" name="file2" id="hallimage" class="form-control" required>
                        <span id="imageid" class="text-warning font-weight-bolder"></span><br>
                        <img src="../image/<?php echo $fetch1['image']?>" width="200px">
                    </div>
                         <div class="form-group">
                        <label><i class="fas fa-phone-alt"></i>&nbsp;UploadImage:</label>
                        <input type="file" name="file3" id="hallimage" class="form-control" required>
                        <span id="imageid" class="text-warning font-weight-bolder"></span><br>
                        <img src="../image/<?php echo $fetch1['image2']?>" width="200px">
                    </div>
                         <div class="form-group">
                        <label><i class="fas fa-phone-alt"></i>&nbsp;UploadImage:</label>
                        <input type="file" name="file4" id="hallimage" class="form-control" required>
                        <span id="imageid" class="text-warning font-weight-bolder"></span><br>
                        <img src="../image/<?php echo $fetch1['image3']?>" width="200px"><br>
                        
                         <button type="submit" name="submit22" class="  btn-block btn btn-primary">UPDATE</button>   
                        
                   </div>
                </form>
            </div>
        </div>
    </div>






    <?php include('includes/scripts.php');
include('includes/footer.php');?>

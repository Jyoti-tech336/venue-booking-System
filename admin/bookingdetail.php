<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
$email=$_SESSION['email'];
 $id= $_SESSION['user_type'];


   
?>

<!----model------->
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
            <h4>Booking Details</h4>
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

  $result_count = mysqli_query($connection,"SELECT COUNT(*) As total_records FROM booking_details");
  $total_records = mysqli_fetch_array($result_count);
  $total_records = $total_records['total_records'];
  $total_no_of_pages = ceil($total_records / $total_records_per_page);
  $seconnd_last = $total_no_of_pages - 1; // total page minus 1

 // $result = mysqli_query($connection,"SELECT * FROM booking_details LIMIT $offset, $total_records_per_page");
                 if($id==1){
    $results ="SELECT * FROM booking_details LIMIT $offset, $total_records_per_page "; }
                else{
$results ="SELECT * FROM booking_details where admin_id='$id' LIMIT $offset, $total_records_per_page ";}
                $result= mysqli_query($connection,$results);
function getName($connection,$id){
   $q1="select * from event_name where event_id='$id'";
    $exe= mysqli_query($connection,$q1);
   $fet= mysqli_fetch_array($exe);
   $name= $fet['event_name'];
    return $name;
}
                function getName4($connection,$id1){
    $q5="select * from halls_details where hall_id='$id1'";
    $exe5= mysqli_query($connection,$q5);
    $fet2= mysqli_fetch_array($exe5);
    $name2= $fet2['name'];
    return $name2;
}
                
                
                function getName5($connection,$id2){
    $q6="select * from time where time_id='$id2'";
    $exe6= mysqli_query($connection,$q6);
    $fet3= mysqli_fetch_array($exe6);
    $name3= $fet3['time'];
    return $name3;
}
        ?>
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                           <th>Hall_ID</th>
                            <th>User_ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Date of Booking</th>
                            <th>Occassion</th>
                            <th>Total Guest</th>
                            <th>Timings</th>
                             <th>Timings</th>
                            <th>CREATED</th>
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
                            <td><?php echo getName4($connection,$row['hall_id']);?></td>
                            <td><?php echo $row['user_id'];?></td>
                            <td><?php echo $row['username'];?></td>
                             <td><?php echo $row['email'];?></td>
                              <td><?php echo $row['phone'];?></td>
                            <td><?php echo $row['date_of_book'];?></td>
                            <td><?php echo getName($connection,$row['occassion']);?></td>
                            <td><?php echo $row['no_of_guest'];?></td>
                            <td><?php echo $row['timings'];?></td>
                            
                              <td><?php echo $row['created'];?></td>
                             <td>

                                <button class="btn btn-success"><a style="color:white" href="bookingupdate.php?id=<?php echo $row ['user_id'];?>">UPDATE</a></button>
                            </td>
                            
                            
                            <td>

                                <button class="btn btn-danger"><a style="color:white" href="bookdelete.php?id=<?php echo $row ['user_id'];?>">DELETE</a></button>
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





 <?php      
include('includes/footer.php');?>

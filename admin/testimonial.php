<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
//if(isset($_SESSION['email'])){
if(isset($_SESSION['user_type']) && $_SESSION['user_type']!=='1'){
     echo "<script>alert('You cannot visit this page.');window.location.href='halldetails.php';</script>";
   die();
}

?>




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
            <h4>Review</h4>
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

  $result_count = mysqli_query($connection,"SELECT COUNT(*) As total_records FROM testimonial");
  $total_records = mysqli_fetch_array($result_count);
  $total_records = $total_records['total_records'];
  $total_no_of_pages = ceil($total_records / $total_records_per_page);
  $seconnd_last = $total_no_of_pages - 1; // total page minus 1

  $result = mysqli_query($connection,"SELECT * FROM testimonial LIMIT $offset, $total_records_per_page");
//function getName($connection,$id){
  //  $q1="select * from category_venue where id='$id'";
   // $exe= mysqli_query($connection,$q1);
   // $fet= mysqli_fetch_array($exe);
   // $name= $fet['category_name'];
   // return $name;

        ?>
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>User_ID</th>
                            <th>Name</th>
                            <th>Review</th>
                            <th>Hall</th>
                            <th>Event</th>
                            <th>Created</th>
                            <th>DELETE</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    
                        while($row = mysqli_fetch_assoc($result))
                        {
                           ?>


                        <tr>
                            <td><?php echo $row['tid'];?></td>
                           
                            <td><?php echo $row['username'];?></td>
                            <td><?php echo $row['review']?></td>
                            <td><?php echo $row['hall']?></td>
                            <td><?php echo $row['event']?></td>
                            <td><?php echo $row['created']?></td>
                            
                            
                            
                            <td>

                                <button class="btn btn-danger"><a style="color:white" href="testimonialdelete.php?id=<?php echo $row ['tid'];?>">DELETE</a></button>
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

<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
if(isset($_SESSION['user_type']) && $_SESSION['user_type']!=='1'){
     echo "<script>alert('You cannot visit this page.');window.location.href='halldetails.php';</script>";
   die();
}


?>


 

<!-- Modal -->
<!--<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">
      <div class="modal-body">
        <div class="form-group">
        	<label>Username</label>
        	<input type="text" name="username" class="form-control" placeholder="enter your name">
        </div>
        <div class="form-group">
        	<label>Email</label>
        	<input type="email" name="email" class="form-control" placeholder="enter your name">
        </div>
        <div class="form-group">
        	<label>Password</label>
        	<input type="password" name="password" class="form-control" placeholder="enter your name">
        </div>
        <div class="form-group">
        	<label>confirmpassword</label>
        	<input type="password" name="confirmpassword" class="form-control" placeholder="enter your name">
        </div>
        
          <div class="form-group">
        	<label>UserType</label>
        	<input type="text" name="usertype" class="form-control" placeholder="enter user type">
        </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="container-fluid width=100%">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m=0 font-weight-bold text-primary">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
				Add Admin Profile	
				</button>
			</h6>
</div>-->


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

	<div class="table-responsive" style="width:90%">
	<?php
        $connection = mysqli_connect("localhost","root","","heritage_venue");
	$query="SELECT * FROM registration_form";
	$run=mysqli_query($connection,$query);
        ?>
		<table class="table table-bordered" width="100%" cellspacing="0">
			<thead>
				<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Email</th>
				
				<th>Address</th>
				<th>Contact</th>
				
				<th>EDIT</th>
				<th>DELETE</th>
				
               </tr>
               </thead>
               	<tbody>
               	<?php
                    
                        while($row = mysqli_fetch_assoc($run))
                        {
                           ?> 
                           
                          
               		<tr>
               			<td><?php echo $row['user_id'];?></td>
               			<td><?php echo $row['username'];?></td>
               			<td><?php echo $row['email'];?></td>
               		
               			<td><?php echo $row['address'];?></td>
               			<td><?php echo $row['phoneno'];?></td>
               			
               			<td>
                                  <button  class="btn btn-success"><a style="color:white" href="registration_main.php?id=<?php echo $row ['user_id'];?>">EDIT</a></button>
               			       </td>
               			<td>
                              
               			      <button  class="btn btn-danger"><a  style="color:white" href="delete.php?id=<?php echo $row ['user_id'];?>">DELETE</a></button> 
               			</td>
               	
               		</tr>
               		 <?php
                        
                    }
                    
                    
                    ?>
               	</tbody>
               </table>
           </div>
       </div>
   </div>
</div>




<?php include('includes/scripts.php');
include('includes/footer.php');?>
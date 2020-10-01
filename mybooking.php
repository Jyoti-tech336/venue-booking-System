<?php
session_start();
include'connection.php';
include("includes/header.php");
include("includes/navbar.php");
$username=$_SESSION['username'];
$q="select * from booking_details where username='$username'";
$result= mysqli_query($connection,$q);
function getName($connection,$id){
    $q1="select * from halls_details where hall_id='$id'";
    $exe= mysqli_query($connection,$q1);
    $fet= mysqli_fetch_array($exe);
    $name= $fet['name'];
    return $name;
}
function getName1($connection,$id2){
    $q2="select * from event_name where event_id='$id2'";
    $exe2= mysqli_query($connection,$q2);
    $fet2= mysqli_fetch_array($exe2);
    $name2= $fet2['event_name'];
    return $name2;
}



?>
<br>
<br>
<html>
<head>
<title>Profile</title>
<link rel="stylesheet" type="text/css" href="css/profile.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!------ Include the above in your HEAD tag ---------->
</head>
<body style=" background-color: #FFE53B;
background-image: linear-gradient(147deg, #FFE53B 0%, #FF2525 74%);"
>

<div class="container" >
         <div class="my-5">
  <div class="py-5">
<div class="contact">
 <h1 align=center>MY BOOKING</h1>
        <div class="row">
           
            
            <table class="table table-bordered" width="100%" cellspacing="0">
			<thead>
				<tr>
				<th>Venue Name</th>
				<th>Username</th>
				<th>Email</th>
				<th>Contact</th>
				<th>Date of Book</th>
				<th>Ocassion</th>
				<th>No.of Guest</th>
				<th>Timimngs</th>
				<th>CANCLE</th>
				
				
               </tr>
               </thead>
               	<tbody>
               	<?php
                    
                        while($fetch= mysqli_fetch_array($result))
                        {
                           ?> 
                           
                          
               		<tr>
               			  <td><?php echo getName($connection,$fetch['hall_id']);?></td>
               			<td><?php echo $fetch['username'];?></td>
               			<td><?php echo $fetch['email'];?></td>
               			<td><?php echo $fetch['phone'];?></td>
               			<td><?php echo $fetch['date_of_book'];?></td>
               			 <td><?php echo getName1($connection,$fetch['occassion']);?></td>
               			<td><?php echo $fetch['no_of_guest'];?></td>
               			<td><?php echo $fetch['timings'];?></td>
               			
               			<td>
                                  <button  class="btn btn-danger"><a style="color:white" href="bookingdelete.php?id=<?php echo $fetch ['hall_id'];?>">CANCLE</a></button>
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

    </div>
    </body>


<?php
include("includes/footer.php");

?>
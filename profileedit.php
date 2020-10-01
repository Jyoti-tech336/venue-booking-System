<?php 

session_start();
include("connection.php");
$username=$_SESSION['username'];
$q="select * from registration_form where username='$username'";
$result= mysqli_query($connection,$q);
$fetch= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<link rel="stylesheet" type="text/css" href="css/profile.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!------ Include the above in your HEAD tag ---------->
</head>
<body style="background-color: #FFE53B;
background-image: linear-gradient(147deg, #FFE53B 0%, #FF2525 80%);" >
    <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5 class="text-center">
                                       Profile
                                    </h5>
                                    <br>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    
                </div>
                
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p style="color:black;"><?php echo  $_SESSION['username'];?></p>
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p  style="color:black;"><?php echo  $fetch['email'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p  style="color:black;"><?php echo $fetch['address']?>
                                                    
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Contact</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p  style="color:black;"><?php echo  $fetch['phoneno'];?></p>
                                            </div>
                                        </div>
                                        
                            </div>
                            <br>
                            <br>
                            <div class="col-md-4">
                        <a href="editprofile.php" name="submit1" class="btn btn-warning">Edit-Profile</a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="index.php" class="btn btn-warning">Back</a>  
                    </div>
                    
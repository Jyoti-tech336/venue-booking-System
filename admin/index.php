<?php 
include"security.php";
include "includes/header.php";
include "includes/navbar.php";
if(isset($_SESSION['user_type']) && $_SESSION['user_type']!=='1'){
     echo "<script>alert('You cannot visit this page.');window.location.href='halldetails.php';</script>";
   die();
}


?>      
         <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
         <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
           <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
          </div>
          <div class="container-fluid">
  
          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Register User</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                          
                          $query ="SELECT user_id FROM registration_form ORDER BY user_id";
                          $query_run =  mysqli_query($connection,$query);
                          $row = mysqli_num_rows($query_run);
                          echo '<h4> Total user:'.$row.'</h4>';
                           ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i  class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total City</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                          
                          $query ="SELECT city_id FROM city ORDER BY city_id";
                          $query_run =  mysqli_query($connection,$query);
                          $row = mysqli_num_rows($query_run);
                          echo '<h4> Total city:'.$row.'</h4>';
                           ?>
                    </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-city fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Venues</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                            <?php
                               
                          $query ="SELECT id FROM category_venue ORDER BY id";
                          $query_run =  mysqli_query($connection,$query);
                          $row = mysqli_num_rows($query_run);
                          echo '<h4> Total Venue:'.$row.'</h4>';
                              ?>
                        </div>
                        </div>
                        <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Halls</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                       <?php
                          
                          $query ="SELECT hall_id FROM halls_details ORDER BY hall_id";
                          $query_run =  mysqli_query($connection,$query);
                          $row = mysqli_num_rows($query_run);
                          echo '<h4> Total Halls:'.$row.'</h4>';
                           ?>
                           </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          

          <!-- Content Row -->
 <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow  py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Venues</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                            <?php
                               
                          $query ="SELECT count FROM visitor_counter WHERE count_id = 1";
                          $query_run =  mysqli_query($connection,$query);
                          $row=mysqli_fetch_assoc($query_run);
                         
                         
                              ?>
                               <h4 class="card-title"> Total visitor:<?php echo $row["count"]?></h4>
                        </div>
                        </div>
                        <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>

         
</div>
</div>
      
    <!-- End of Content Wrapper -->

 

 

  <!-- Logout Modal-->
 
  <!-- Bootstrap core JavaScript-->
 <?php include "includes/footer.php"; ?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
         
        </div>
        <div class="sidebar-brand-text mx-3 text-center" >WEBSITE ADMIN</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <?php if($_SESSION['user_type']==1){?>
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Navigations
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
         <i class="fas fa-file-alt"></i>
          <span>Category</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
           
            <a class="collapse-item" href="cvenue.php">Venues</a>
           
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
         <i class="fas fa-users"></i>
          <span>Register User</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
           <!-- <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>-->
            <a class="collapse-item" href="register.php">Profile</a>
          </div>
        </div>
      </li>

   
   
   
    
    
    
     

      <!-- Heading -->
     

      <!-- Nav Item - Pages Collapse Menu -->
    <!--  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.php">Login</a>
            <a class="collapse-item" href="register.php">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            
            </div>
          </div>
      </li>-->
 <li class="nav-item">
        <a class="nav-link" href="admin.php">
          <i class="fas fa-users"></i>
          <span>Admin Profile</span></a>
      </li>
      
     
    
    
       <!------------------------------city start-------------------------->
      
     <li class="nav-item">
        <a class="nav-link" href="city.php">
        <i class="fas fa-city"></i>
          <span>City</span></a>
      </li>
      
      <!------------------------------city end-------------------------->
     
     <!------------------------------event start-------------------------->
      
     
     <li class="nav-item">
        <a class="nav-link" href="eventsdetail.php">
         <i class="fas fa-edit"></i>
          <span>Events</span></a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="testimonial.php">
         <i class="fas fa-edit"></i>
          <span>Reviews</span></a>
      </li>
      
      
      
      <?php }?>
      <!------------------------------city end-------------------------->
      
     
      <!------------------------------ Booking details start-------------------------------> 
        <li class="nav-item">
        <a class="nav-link" href="bookingdetail.php">
         <i class="fas fa-calendar-week"></i>
          <span>Booking Details</span></a>
      </li>
       
       
         <li class="nav-item">
        <a class="nav-link" href="contact.php">
         <i class="fas fa-calendar-week"></i>
          <span>Contact Us</span></a>
      </li>
        <!------------------------------Booking deatail end-------------------------->
       <!------------------------------hall detail start-------------------------->
      
       <li class="nav-item">
        <a class="nav-link" href="halldetails.php">
       <i class="fas fa-map-marker-alt"></i>
          <span>Hall Details</span></a>
      </li>
      <!------------------------------hall detail end-------------------------->
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
      
      

    </ul>
    <!-- End of Sidebar -->
    
     <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

<!--------------------------------------------login model start---------------------------------->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <form action="logout.php" method="post">
             <button type="submit" name="logout_btn" class="btn btn-primary"  >Logout</button>   
          </form>
        
        </div>
      </div>
    </div>
  </div>

<!--------------------------------------------login model end---------------------------------->
 <!-- Sidebar -->
   
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

           
            
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                     <?php echo $_SESSION['email'];?>
                </span>
                <img class="img-profile rounded-circle" src="img/mahraja hotel.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
              
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
<?php
session_start();
include'connection.php';
include('includes/header.php');
include('includes/navbar.php');
if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {

 echo"<script>alert('Login First!!!!');window.location.href='index.php';</script>";                       
                        

}
 if(isset($_POST['contact'])){
       
        $name = $_POST['first'];
        $lastname = $_POST['last'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
   
$insert = "INSERT INTO contact(name,lastname,email,subject,message,created)VALUES('$name','$lastname','$email','$subject','$message',NOW())";
$run=mysqli_query($connection,$insert);
          if($run){
           
              echo "<script>alert ('Done!!!!!!!')</script>";
          }
        
  else{
                          
  echo"<script>alert('unsuccessful')</script>";
      }
                   

 }

?>


<!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" type="text/css" href="style/style.css">
    <!-- Add font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>Responsive Form</title>
    </head>
     <body>
   <!-- contact section -->
       
         <section id="contact-section">
           <div class="container">
                <br>
                <br>
                <br>
                <br>
                
            
           	 <h2>Contact Us</h2>
              <p>Contact us and keep upto date with our latest news</p>
             <div class="contact-form">

                  <!-- First grid -->
               <div>
                 <i class="fa fa-map-marker"></i><span class="form-info"> 672 City Jalandhar India </span><br>
                 <i class="fa fa-phone" > </i><span class="form-info">  +91 7087241900</span><br>
                 <i class="fa fa-envelope"></i><span class="form-info">  hritagevenue@gmail.com</span>
                 
                  <hr> <br>

         <!-- social media icons -->
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-google"></a>
          <a href="#" class="fa fa-linkedin"></a>
          <a href="#" class="fa fa-youtube"></a>
               </div>
               
                   <!-- second grid -->
           <div>        
             <form method="post">
               <input type="text" placeholder="Your Name" name="first" required>
               <input type="text" placeholder="Last Name" name="last" ><br>
               <input type="Email" placeholder="Email" name="email" required><br>
               <input type="text" placeholder="Subject of this message" name="subject"><br>
               <textarea name="message" placeholder="Message" rows="5" name="message" required></textarea><br>
               <button class=" submit " name="contact" >Send Message</button> 
             </form>   
               </div>
             </div>
           </div>
         </section>

         
     </body>
     
    <?php
    include'includes/footer.php';
     
     ?>
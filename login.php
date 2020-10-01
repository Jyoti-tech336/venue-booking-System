<?php
include'connection.php';
//print_r($_POST);
//echo "<br>";
session_start();

if(isset($_POST['login'])){
  $username = trim($_POST['username1']);
    $password =md5($_POST['password1']);
    
   // echo $username;
   // echo "<br>";
     $query ="SELECT * FROM registration_form WHERE username='$username' AND password='$password'";
    $query_run =mysqli_query($connection,$query);
   
if(mysqli_fetch_assoc($query_run))
    {
       // echo "if";
        $_SESSION['username']=$username;
   // echo $_SESSION['username'];
     echo "<script>alert('sucessfully login');window.location.href='index.php';</script>";
   // header("location:index.php");
    }
    else
    {//echo "else";
        $_SESSION['status']='Invalid data';
         echo "<script>alert('incorrect username and password');window.location.href='index.php';</script>";
    // header("Location:index.php");
        
    }
}
//if(isset($_POST['login']))
//{
//    $username = $_POST['username'];
//    $password =$_POST['password'];
//    
//    $query ="SELECT * FROM registration_form WHERE username='$username' AND password='$password'";
//    $query_run =mysqli_query($connection,$query);
//    echo " isset";
//    
//    if(mysqli_fetch_assoc($query_run))
//    {
//        echo "if";
//        $_SESSION['username']=$username;
//      
//    }
//    else
//    {echo "else";
//        $_SESSION['status']='Invalid data';
//        header('location:login.php');
//    }
//}





?>
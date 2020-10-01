<?php

session_start();
//error_reporting(0);
include('database/connection.php');
if($dbconfig)
{
 // echo"Database Connected";  
}
else
{
    header("Location:database/connection.php");
}
if(!$_SESSION['email'])
{
    header("Location:login.php");
    
}
//if(!$_SESSION['username'])
//{
   // header("location:login.php");
//}
?>
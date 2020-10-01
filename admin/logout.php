<?php
session_start();

if(isset($_POST['logout_btn']))
{
    //session_destroy();
    unset($_SESSION['email']);
    unset($_SESSION['user_type']);
    unset($_SESSION['is Login']);
	echo "<script>alert('logout sucessful'); window.location.href='login.php';</script>";

}
?>
<?php
session_start();
include('database/connection.php');


if(!$_SESSION['username1'])
{
    header('location:login.php');
}
?>
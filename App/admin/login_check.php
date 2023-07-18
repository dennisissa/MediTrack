<?php
if(!isset($_SESSION['user']))
{
$_SESSION['nologin']="Login to access admin panel";
header('location:'.SITEURL.'admin/login.php');
}
?>

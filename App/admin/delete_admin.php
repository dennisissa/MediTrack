<?php
include("constants.php");

$id=$_GET['id'];
$sql="delete from admin where id=$id";
$res=mysqli_query($conn,$sql);

if($res==TRUE)
{
  $_SESSION['delete']="Admin deleted successfully";
  header('location:'.SITEURL.'admin/manage_admin.php');
}
else {
  $_SESSION['delete']="Failed to delete Admin";
  header('location:'.SITEURL.'admin/manage_admin.php');
}
?>

<?php

session_start();

define('SITEURL','http://localhost/App/');
define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','project');

$conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error()); //connect to db
$db_select=mysqli_select_db($conn,DB_NAME) or die (mysqli_error()); //select the db

?>

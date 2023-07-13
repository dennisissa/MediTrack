<?php

$dbhost = 'localhost';
$dbname = 'project'; 
$dbuser = 'root'; 
$dbpass = ''; 

$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if($db->connect_errno > 0) {
   die('Unable to connect to database [' . $db->connect_error . ']');
}
?>
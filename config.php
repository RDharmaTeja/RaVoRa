<?php
/*
 * database configuration file
 * */
define('DB_NAME','ravora');
define('DB_USER','root');
define('DB_PASS','');
define('DB_HOST','localhost');
$connect = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
 if (mysqli_connect_errno()){
  die ("Failed to connect to MySQL: " . mysqli_connect_error());
  }
 
?>

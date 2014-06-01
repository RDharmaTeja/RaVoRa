<?php
$sign_up=$_GET['sign_up'];
?>
<html class="no-js" lang="en">
<head>
<title>
Ra-Vo-Ra
</title>
<link href="includes/foundation/css/foundation.css" rel='stylesheet'>
<link href="includes/css/home.css" rel='stylesheet'>
<script src="includes/foundation/js/foundation.min.js"></script>
</head>
<body >
<?php
include("header.php");
include("login.php");  
 if($sign_up=="true")
{
	require("signup_center.php");}
	else
	{
     require("home_center.php");
     }  
?>
	</body>
</html>

<?php
ob_start();
session_start();
if(isset($_SESSION['user_email']))
{
	header("location: /RVR/user");
	exit();
}
$sign_up=$_GET['sign_up'];
$forgot_pass=$_GET['forgot_pass'];
?>
<html class="no-js" lang="en">
<head>
<title>
Ra-Vo-Ra
</title>
<link href="includes/foundation/css/foundation.css" rel='stylesheet'>
<link href="includes/css/home.css" rel='stylesheet'>
  <script src="includes/foundation/js/vendor/jquery.js"></script>
<script src="includes/foundation/js/vendor/fastclick.js"></script>
 <script src="includes/foundation/js/vendor/modernizr.js"></script>
  <script src="includes/foundation/js/foundation.min.js"></script>
  

</head>
<body class="sites off-canvas hide-extras no-top-border">
<?php
include("header.php");
include("login.php");  
 if($sign_up=="true")
{
	require("signup_center.php");}
	elseif($forgot_pass=="true")
	{
		require("forgot_pass.php");
		}
	else
	{
     require("home_center.php");
     }  
     
?>


<script>
  $(document).foundation();
</script>
	</body>
</html>

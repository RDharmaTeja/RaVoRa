<?php
/*
 * login_check_ajax_div.php
 * 
 * code to check session inside ajax loading division
 * if not logged in this returns to login_center_ajax_div.php 
 * 
 * 
 */

ob_start();
session_start();
if(!isset($_SESSION['user_email']))
{
	header("location: /RVR/login_center_ajax_div.php");
	exit();
}
?>



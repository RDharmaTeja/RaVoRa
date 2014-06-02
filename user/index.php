<?php
ob_start();
session_start();
if(isset($_SESSION['login_core']))
{
	header("location: core.php");
	exit();
}
if(!isset($_SESSION['login_user']))
{
	header("location: /RVR/");
	exit();
}
?>
<html class="no-js" lang="en">
<head>
<title>
Ra-Vo-Ra
</title>
<link href="../includes/foundation/css/foundation.css" rel='stylesheet'>
<link href="../includes/css/home.css" rel='stylesheet'>
<script src="../includes/foundation/js/foundation.min.js"></script>
</head>
<body>
<?php
/*
 * user index.php page
 * 
 * Copyright 2014 RADAVARAM <radavaram@radavaram>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */
require('header.php');
?>
</body>
</html>

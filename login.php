<?php
/*
 * login.php
 * login script to check 'user' and directing to home page
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
 * 
 */
if ($_SERVER["REQUEST_METHOD"] == "POST"){
require("config.php");
   $username=$_POST['user_email'];
   $password=$_POST['user_pass'];
  $clean_username = strip_tags(mysql_real_escape_string($username));
  $clean_pass = strip_tags(mysql_real_escape_string($password));
  
  $check="SELECT * FROM users WHERE user_email='$username' and user_pass='$clean_pass'";
  $result=mysqli_query($connect, $check)or die ("Query failed");//checking indb
  $user_details= mysqli_fetch_array($result);
  $count=mysqli_num_rows($result);
  if($count == 1)
  {
     session_register("myusername");
     $_SESSION['user_email']=$user_details['user_email'];
     $_SESSION['user_name']=$user_details['display_name'];
     $_SESSION['user_id']=$user_details['ID'];
     header("location: /RVR/user");
 }

}
?>

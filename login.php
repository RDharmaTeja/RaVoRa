<?php
/*
 * login.php
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
   $username=$_POST['user_name'];
   $password=$_POST['user_pass'];
   echo $username;
   echo $password;
  $clean_username = strip_tags(mysql_real_escape_string($username));
  $clean_pass = strip_tags(mysql_real_escape_string($password));
  
  $check="SELECT * FROM users WHERE user_login='$clean_username' and user_pass='$clean_pass'";
  $result=mysqli_query($connect, $check)or die ("Query failed");//checking indb
  $count=mysqli_num_rows($result);
  
 if($count == 1)
  {
     echo  "login successfull";
     session_register("myusername");
     $_SESSION['login_user']=$clean_username;
     header("location: /RVR/");
 }

}
?>

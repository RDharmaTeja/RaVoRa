<?php
/*
 * signup.php
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
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
require("config.php");
   $display_name=$_POST['display_name'];
   $user_email=$_POST['user_email'];
   $user_pass=$_POST['user_pass'];
   $check="SELECT * FROM users WHERE user_email='$user_email'";
   $result=mysqli_query($connect, $check)or die ("Query failed");//checking indb
   $count=mysqli_num_rows($result);
   if($count==1){
	   header("location: /RVR/?sign_up=true&email_exist=true");
	   }
  if($count == 0)
  {
	  $add_user=mysqli_query($connect,"INSERT INTO users (user_pass,user_email,display_name) VALUES ('$user_pass','$user_email','$display_name')");
      session_register("myusername");
     $_SESSION['user_email']=$user_email;
     $_SESSION['user_name']=$display_name;
     header("location: /RVR/user");
 }

}

?>


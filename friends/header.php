<?php
/*
 *user friends header.php 
 * shows image at the right cornor
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
session_start();
?>

<?php
?>
<nav class="top-bar" data-topbar data-options="is_hover: false">
  <!--<ul class="title-area">
    <li class="name">
      <h1><a href="#">Rate-Vote-Rank</a></h1>
    </li>
  </ul>-->

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    
    <ul class="right">
	<li><a href="#"><b><?echo $_SESSION['user_name'];?></b></a></li>
    <li class="has-dropdown on-click"><a href="#"><img src="../includes/images/01.png" width="42" height="30"></a>
	  <ul class="dropdown">
	  <li><a href="#"><i class="step fi-torso size-24"></i>&nbsp;&nbsp;Profile</a></li>
	  	  <li><a href="#"><i class="step fi-wrench size-24"></i>&nbsp;&nbsp;Settings</a></li>
	  <li><a href="../logout.php"><i class="step fi-x size-24"></i>&nbsp;&nbsp;Sign Out</a></li>
	  </ul>
	  <li>
		  <li >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
	<li >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
    </ul>

    <!-- Left Nav Section--> 
    <ul class="middle">
	  <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>	
	  <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>	
      <li><a href="/RVR/user/"><i class="step fi-home size-24"></i>&nbsp;<b>Home</b></a></li>
	  <li class="divider"></li>
	   <li><a href="/RVR/notifications"><i class="step fi-alert size-24"></i>&nbsp;<b>Notifications</b></a><li>
	  <li class="divider"></li>
	  <li ><a href="/RVR/groups"><i class="step fi-torsos-all size-24"></i>&nbsp;<b>Groups</b></a><li>
	  <li class="divider"></li>
	  <li class="active"><a href="#"><i class="step fi-torsos size-24"></i>&nbsp;<b>Friends</b></a><li>
	  <li class="divider"></li>
	   <li class="has-dropdown"><a href="#"><i class="step fi-star size-24"></i>&nbsp;<b>Start a RaVoRa</b></a>
	  <ul class="dropdown">
		   <li><a href="#" onclick="show_rating();"><i class="step fi-star size-24"></i>&nbsp; <b>Rating</b></a></li>
      <li><a href="#" onclick="show_voting();"><i class="step fi-like size-24"></i>&nbsp; <b>Voting</b></a></li>
      <li><a href="#" onclick="show_ranking();"><i class="step fi-list-number size-26"></i>&nbsp; <b>Ranking</b></a></li>
		  
		  </ul>
	  </li>
       <li class="divider"></li>
    </ul> 
  </section>
</nav>
<div>
<form>
	</form>
</div>

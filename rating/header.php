<?php
/*
 * new rating header page
 * 
 * Copyright 2014 RADAVARAM <radavaram@radavaram>
 * 

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
      <li><a href="/RVR/user"><i class="step fi-home size-24"></i>&nbsp;<b>Home</b></a></li>
	  <li class="divider"></li>
	   <li><a href="/RVR/notifications"><i class="step fi-alert size-24"></i>&nbsp;<b>Notifications</b></a><li>
	  <li class="divider"></li>
	  <li ><a href="/RVR/groups"><i class="step fi-torsos-all size-24"></i>&nbsp;<b>Groups</b></a><li>
	  <li class="divider"></li>
	  <li><a href="/RVR/friends"><i class="step fi-torsos size-24"></i>&nbsp;<b>Friends</b></a><li>
	  <li class="divider"></li>
	  <li class="active"><a href="#"><i class="step fi-star size-24"></i>&nbsp;<b>New Rating</b></a>
	  </li>
       <li class="divider"></li>
    </ul> 
  </section>
</nav>
<div>
<form>
	</form>
</div>

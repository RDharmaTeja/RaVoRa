<?php
?>
<nav class="top-bar" data-topbar>
  <!--<ul class="title-area">
    <li class="name">
      <h1><a href="#">Rate-Vote-Rank</a></h1>
    </li>
  </ul>-->

  <section class="top-bar-section">
    <!-- Right Nav Section -->


    <!-- Left Nav Section--> 
    <ul class="left">
      <li class="active"><a href="#"><b>RATE-VOTE-RANK</b></a></li>
	  <li class="divider"></li>
	  <li><a href="#">How It Works</a><li>
	  <li class="divider"></li>
	  <li><a href="#">Features</a><li>
	  <li class="divider"></li>
	  <li class="has-dropdown not-click"><a href="#">Examples</a>
	  <ul class="dropdown">
	  <li><a href="#">Rating</a></li>
	  <li><a href="#">Voting</a></li>
	  <li><a href="#">Ranking</a></li>
	  </ul>
	  <li>
	  <li class="divider"></li>
    </ul> 
    
        
    <ul class="right">
	  <li class="has-form">
		  <?
		  if($sign_up=="true"||$forgot_pass=="true"){
		  echo "<a href='/RVR/' class='small button'><b>Login</b></a>";
		  }
		  else
		  {
			  echo"<a href='/RVR/?sign_up=true' class='small button'><b>Sign Up</b></a>";}
		  ?>
		  </li>
    </ul>
  </section>
</nav>
<div>
<form>
	</form>
</div>

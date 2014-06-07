<?php
/*
 * this is the code appears in ajax div when session expires
 * */

?>
<center><a><b>Session has expaired. Please login again.</b></a></center>
	<form method="post" action="/RVR/">
      <div class="row">
		 <div class="small-9 columns"></div> 
        <div class="small-3 columns">
          <input type="email" id="right-label" required name="user_email" placeholder="Email Id">
    </div>
  </div>
  <div class="row">
		 <div class="small-9 columns"></div> 
        <div class="small-3 columns">
          <input type="password" id="right-label" required name="user_pass" placeholder="Password">
          <? 
          if(isset($count)&&$count==0){
          echo "<small class='error'>Invalid username or password</small>";
         }
    ?>
    </div>
  </div>
  <div class="row">
		 <div class="small-9 columns"></div> 
        <div class="small-3 columns">
          <button class="button tiny"><b>Login</b></button>  &nbsp;&nbsp;&nbsp;<a style="font-size:12px; color:#563d7c" href="/RVR/?forgot_pass=true"><span data-tooltip class="has-tip tip-right" title="Need your email id">forgot Password ?</span></a>
    </div>
  </div>
		</form>

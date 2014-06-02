<?php?>

	<form method="post" action="/RVR/" data-abide>
      <div class="row">
		 <div class="small-9 columns"></div> 
        <div class="small-3 columns">
          <input type="text" id="right-label" required name="user_name" placeholder="User or Email Id">
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
          <button class="button tiny"><b>Login</b></button>  <a style="font-size:12px; color:#563d7c" href="">forgot password</a>
    </div>
  </div>
		</form>
<div style="top:5%; position:relative">
<div class="row">
	<div class="large-4 columns">
	<div class="small-8 columns"><a href="#" class="medium button secondary hide-for-small">Rating</a></div>
	</div>
    <div class="large-4 columns">
	<div class="small-8 columns"><a href="#" class="medium button secondary hide-for-small">Voting</a></div>
	</div>
	<div class="large-4 columns">
	<div class="small-8 columns"><a href="#" class="medium button secondary hide-for-small">Ranking</a></div>
	</div>
	</div>
<div class="row">
 <div class="large-4 columns">
</div>
 <div class="large-4 columns">
</div>
 <div class="large-4 columns">
</div>
	</div>	
	
</div>

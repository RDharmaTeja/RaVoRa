

<?php
/*
 * signup page center
 * this apperars when get signup=true;
 * */
$email_exist=$_GET['email_exist'];
?>
<center><div class="large-3"><?if($email_exist=="true") echo '<div data-alert class="alert-box alert">Email Id already exists.<a href="#" class="close">&times;</a>';?></div></center>
<form data-abide method="post" action="/RVR/signup.php">
	<fieldset>
<div class="row name-field">
    <div class="small-8">
      <div class="row">
        <div class="small-6 columns">
          <label for="right-label" class="right inline">Name:
        </div>
        <div class="small-6 columns">
          <input type="text" name="display_name" required pattern="[a-zA-Z]+" id="right-label" placeholder="must contain only alphabets"></label>
          <small class="error">Required with correct pattern</small>
        </div>
      </div>
    </div>
  </div>

<div class="row email-field">
    <div class="small-8">
      <div class="row">
        <div class="small-6 columns">
          <label for="right-label" class="right inline">Email Id:
        </div>
        <div class="small-6 columns">
          <input type="email" name="user_email" required id="right-label" placeholder="email id"></label>
          <small class="error">This field is required with correct pattern</small>
        </div>
      </div>
    </div>
  </div>  
<div class="row">
    <div class="small-8">
      <div class="row">
        <div class="small-6 columns">
          <label for="right-label"  class="right inline">Password:</label>
        </div>
        <div class="small-6 columns">
          <input type="password" name="user_pass" required id="right-label" placeholder="password">
          <small class="error">This field is required</small>
        </div>
      </div>
    </div>
  </div>
 
 <div class="row">
    <div class="small-8">
      <div class="row">
        <div class="small-6 columns">
          <label for="right-label"  class="right inline">Retype Password:</label>
        </div>
        <div class="small-6 columns">
          <input type="password" name="user_pass2" required id="right-label" placeholder="retype password">
          <small class="error">This field is required</small>
        </div>
      </div>
    </div>
  </div> 
   <div class="row">
    <div class="small-8">
      <div class="row">
		  <div class="small-6 columns"></div>
        <div class="small-6 columns">
			<button class="button tiny"><b>Sign Up</b></button>
  </div>
  </div>
  </div>
  </div>
  </fieldset>
</form>

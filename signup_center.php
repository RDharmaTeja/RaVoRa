

<?php
/*
 * signup page center
 * this apperars when get signup=true;
 * */

?>
<form data-abide>
	<fieldset>
<div class="row name-field">
    <div class="small-8">
      <div class="row">
        <div class="small-6 columns">
          <label for="right-label" class="right inline">Name:
        </div>
        <div class="small-6 columns">
          <input type="text" required pattern="[a-zA-Z]+" id="right-label" placeholder="must contain only alphabets"></label>
          <small class="error">have a nice day</small>
        </div>
      </div>
    </div>
  </div>

<div class="row">
    <div class="small-8">
      <div class="row">
        <div class="small-6 columns">
          <label for="right-label" class="right inline">User Name:
        </div>
        <div class="small-6 columns">
          <input type="text" required id="right-label" placeholder="user login"></label>
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
          <input type="email" required id="right-label" placeholder="email id"></label>
        </div>
      </div>
    </div>
  </div>  

<div class="row">
    <div class="small-8">
      <div class="row">
        <div class="small-6 columns">
          <label for="right-label" class="right inline">Website:
        </div>
        <div class="small-6 columns">
          <input type="url" id="right-label" placeholder="Enter your URL.."></label>
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
          <input type="password" required id="right-label" placeholder="password">
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
          <input type="password" required id="right-label" placeholder="password">
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

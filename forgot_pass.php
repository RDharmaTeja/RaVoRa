<script>
	function loadxml(){
		var xmlhttp;
		var email_id=document.getElementById("email").value;
		document.getElementById("center").innerHTML='<center>Checking Email..</centerc><center><img src="includes/images/728.GIF"></center>';
	
		if (window.XMLHttpRequest){
		xmlhttp=new XMLHttpRequest();
		}
		else{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
		xmlhttp.open("POST","forgot_pass.php",true);
		xmlhttp.setRequestHeader("content-type","application/x-www-form-urlencoded");
		var post_email="email="+email_id;
		xmlhttp.send(post_email);
		xmlhttp.onreadystatechange=function(){
			if(xmlhttp.readyState==4&&xmlhttp.status==200){
				document.getElementById("center").innerHTML=xmlhttp.responseText;
				}	
				
			}
		}
	</script>
<?php
/*
 * forgot_pass.php
 * 
 * Copyright 2014 RADAVARAM <radavaram@radavaram>
 * 
 * 
 */
 if($_SERVER["REQUEST_METHOD"] == "POST"){
	 require("config.php");
	 $email_id=$_POST['email'];
	 $check="SELECT * FROM users WHERE user_email='$email_id'";
	 $result=mysqli_query($connect, $check)or die ("Query failed");
	 $count=mysqli_num_rows($result);
	 }

?>
<center><div id="loading"></div></center>
<div id="center">
	<center>Enter your <b>Email Id</b>, we will send you a link for changing password.</center><br>
	<center><div class="large-3"><input name='email'  required  id="email" type="email" placeholder="Email Id.."></div></center>
	<center><button class="button tiny" onclick="loadxml()"><b>Send</b></button></center>
	<center><div class="large-3"><?if(isset($count)&&$count==1) echo '<div data-alert class="alert-box success">Email has been successfully sent.';?></div></center>
	<center><div class="large-3"><?if(isset($count)&&$count==0) echo '<div data-alert class="alert-box alert">This Email Id does not exist.';?></div></center>
	
</div>

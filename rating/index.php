<?php
require('../login_check.php')
?>
<html class="no-js" lang="en">
<head>
<title>
Ra-Vo-Ra
</title>
<link href="../includes/foundation/css/foundation.css" rel='stylesheet'>
<link href="../includes/css/home.css" rel='stylesheet'>
<link href="../includes/css/rating.css" rel='stylesheet'>
<link href="../includes/foundation-icons/foundation-icons.css" rel='stylesheet'>
<script src="../includes/js/angular.min.js"></script>
<script src="../includes/js/my_angular_apps.js"></script>
 <script>
	 /*
	  function display_matrix(){
		  
		  var rows=document.getElementById("sliderOutput1").value;
		  var cols=document.getElementById("sliderOutput2").value;
		  var i,j,content="";
		  for (i=1;i<=rows;i++){
	  content+="<div class='row'><div class='large-5 columns'><input type='text'></div><div class='large-6 columns'><span class='rating'>";
			  for(j=1;j<=cols;j++){
				content+="    <input type='radio' class='rating-input'><label class='rating-star'></label>";  
				  }
				  content+="</span></div></div>";  
				
			  }
			  	 document.getElementById("matrix").innerHTML=content;	
		  }
		  */
	  </script>
  <script src="../includes/foundation/js/vendor/jquery.js"></script>
<script src="../includes/foundation/js/vendor/fastclick.js"></script>
 <script src="../includes/foundation/js/vendor/modernizr.js"></script>
  <script src="../includes/foundation/js/foundation.min.js"></script>
 
  
</head>
<body ng-app="app1">
<?php
/*
 * rating index.php page
 * 
 */
require('header.php');
require('rat_center.php');
?>

<script>
  $(document).foundation();
</script>
</body>
</html>

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
<link href="../includes/foundation-icons/foundation-icons.css" rel='stylesheet'>
<script src="../includes/foundation/js/vendor/jquery.js">   </script>
<script src="../includes/foundation/js/vendor/fastclick.js"></script>
<script src="../includes/foundation/js/vendor/modernizr.js"></script>
<script src="../includes/foundation/js/foundation.min.js">  </script>
<script>
	function show_rating(){
		var xmlhttp;
		document.getElementById("show_ravora").innerHTML='<center>Loading content..</center><br><center><img src="../includes/images/728.GIF"></center>';
		document.getElementById("rating_li").className="active";
		document.getElementById("voting_li").className="";
		document.getElementById("ranking_li").className="";
		document.getElementById("all_li").className="";
		
		if (window.XMLHttpRequest){
		xmlhttp=new XMLHttpRequest();
		}
		else{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
		xmlhttp.open("POST","show_rating.php",true);
		xmlhttp.send();
		xmlhttp.onreadystatechange=function(){
			if(xmlhttp.readyState==4&&xmlhttp.status==200){
				document.getElementById("show_ravora").innerHTML=xmlhttp.responseText;
				}
			}
		}
		
		function show_voting(){
		var xmlhttp;
		document.getElementById("show_ravora").innerHTML='<center>Loading content..</center><br><center><img src="../includes/images/728.GIF"></center>';
	    document.getElementById("rating_li").className="";
		document.getElementById("voting_li").className="active";
		document.getElementById("ranking_li").className="";
		document.getElementById("all_li").className="";
		
		if (window.XMLHttpRequest){
		xmlhttp=new XMLHttpRequest();
		}
		else{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
		xmlhttp.open("POST","show_voting.php",true);
		xmlhttp.send();
		xmlhttp.onreadystatechange=function(){
			if(xmlhttp.readyState==4&&xmlhttp.status==200){
				document.getElementById("show_ravora").innerHTML=xmlhttp.responseText;
				}
			
			}
		}
		
		function show_ranking(){
		var xmlhttp;
		document.getElementById("show_ravora").innerHTML='<center>Loading content..</center><br><center><img src="../includes/images/728.GIF"></center>';
		document.getElementById("rating_li").className="";
		document.getElementById("voting_li").className="";
		document.getElementById("ranking_li").className="active";
		document.getElementById("all_li").className="";
		
		if (window.XMLHttpRequest){
		xmlhttp=new XMLHttpRequest();
		}
		else{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
		xmlhttp.open("POST","show_ranking.php",true);
		xmlhttp.send();
		xmlhttp.onreadystatechange=function(){
			if(xmlhttp.readyState==4&&xmlhttp.status==200){
				document.getElementById("show_ravora").innerHTML=xmlhttp.responseText;
				}
			}
		}
	</script>
</head>
<body>
<?php
/*
 * user index.php page
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
require('header.php');
require('left_nav.php');
?>
<script>
  $(document).foundation();
</script>
</body>
</html>

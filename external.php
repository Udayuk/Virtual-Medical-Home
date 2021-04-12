	<?php
session_start();
    if(!isset($_SESSION['username']))
	header('location:login.html')?>
<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css?family=Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">


	<style type="text/css">
        body{
        	background-image: url("profback.jpg");
        	height: 100%;
        	width: auto;
           	background-size: cover;
        	background-position: center;
        	background-repeat: no-repeat;

        }
        img{
          width: 30px;
          height: 30px;
        }
        #cont a{
          text-decoration: none;
        }
		#topli a:hover{
		color:red;
		text-decoration: none;
		}
		#topli a:active{
			color: white;
			
		}
	#top {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: sticky;
}

#topli {
  float: right;
  border-right:1px solid #bbb;
}
#logo{
	float: left;
	display: block;
  color: white;
  font-family: Raleway;
  text-align: center;
  padding: 14px 16px;
}
#topli a {
  display: block;
  color: white;
  font-family: Raleway;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

#topli a:hover:not(.active) {
  background-color: #111;
  text-align: center;
}
		#d1{
			padding-left: 30px;
			background-color: #f9faf5;
			margin-left: 30%;
			margin-top: 5%;
			margin-right: 30%;
			line-height: 1.7;
			border-radius: 20px;

		}
		h1{ margin-top: 2%;
			text-shadow: 2px 3px 5px yellow;
			font-family: comic Sans ms;
		}
		#sub{
			height: 50px;
			margin-top: 20px;
            margin-left: 90px;
            margin-right: auto;
            width: 30%;
		}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-image: url("profmenu.jpg");
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;

}

.sidenav a {
  font-family: 'Muli', sans-serif;

  border-color: black;
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #5e9476;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
  background-color: silver;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  height:80%;
  padding: 0.5px;
}
#foot{
  margin-top: 8%;
	width: 80%;
	margin-left: 10%;
	background-color: #3c5c8c;
	color: #e5e1e1;
	border-radius: 4px;
	text-align: center;
	font-size: 20px;
	font-family: Raleway;
	height: 30px;

}
#cont{
  font-size: 30px; 
  font-family: 'Montserrat', sans-serif;

}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
	</style>
</head>		
<body>
<ul id="top">
	<li id="topli"><a href="contact.html">Contact Us</a></li>
	<li id="topli"><a href="complaint.html">Complaints</a></li>
	 <li id="topli"><a href="testimonal.html">Testimonals</a>
  	<li id="topli"><a href="doctor2.html">Doctors</a></li>
	<li id="topli"><a href="login.html">Login</a></li>
    <li id="topli"><a href="about.html">About Us</a></li>		
    <li id="topli"><a href="medi.html">Home</a></li>
    <li id="logo">VMH</li>

</ul>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="myprofile.html">My Profile</a>
  <a href="#">History</a>
  <a href="doctor.html">Book an Appointment</a>
  <a href="suggestions.html">Suggestions</a>
  <a href="about.html" id="">VMH Family</a>
  <a href="external.html" id="">External Links</a>
	<a href="logout.php" id="">logout</a>



  <a href="#"></a>
</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<div id="main">
  <br><br><br><br><br><br>
  <ul style="margin-left: 7%;">
    <li id="cont"><a href=""><img src="twitterfac.png"> Twitter</a>
      <br><br>

    <li id="cont"><a href=""><img src="fbfav.png"> Facebook</a>
      <br><br>
    

    <li id="cont"><a href=""><img src="instafav.png"> Instagram</a>
      <br><br>
    
    <li id="cont"><a href=""><img src="linkedin.png"> LinkedIn</a>
      <br><br>

    <li id="cont"><a href=""><img src="worldhealth.jpg"> World Health Organization</a>
      <br><br>    
  </ul>
</div>
<div id="foot">
		Thank you for choosing us! It's been a pleasure helping you get healthy!
	</div>

 
</body>
</html>
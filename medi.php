<?php


?>


<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="jquery-3.4.1.js"></script>
<script src="slideshow.js"></script>

	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">

	<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
	<link href="navstyle.css" rel="stylesheet">
	<style type="text/css">
		body{
			background-image: url("back2.jpg");
			overflow: scroll;
		}
		a:hover{
		color:red;
		text-decoration: none;
		}
		a:active{
			color: white;
			
		}
		ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: sticky;
  top: 0;
}

li {
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
li a {
  display: block;
  color: white;
  font-family: Raleway;

  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
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
		#b3{
			position: relative;
			border:2px black solid;
			margin-top: 40px;
			height: 300px;
			background-color: rgb(228, 238, 248,0.7);
			float: right;
			margin-bottom: 10%;
			margin-right: 5%;
			margin-top: 40%;
			border-radius: 15px;
		}
		a{
			text-decoration: none;
		}
		#b2{ 
			position: relative;
			border:2px black solid;
			background-color: rgb(228, 238, 248,0.7);
			float: left;
			width: 65%;
			font-size: 30px;
			margin-top: 40%;
			margin-bottom: 3%;
			border-radius: 15px;
			padding: :20px;

		}
	</style>
	<title></title>
</head>
<body >
	<center><h1 style="text-shadow: 2px 5px 6px blue;font-size: 70px;font-family: 'Indie Flower', cursive;
">VIRTUAL MEDICAL HOME</h1></center>
	<ul>
	<li><a href="contact.html">Contact Us</a></li>
	<li><a href="complaint.html">Complaints</a></li>
	 <li><a href="testimonal.html">Testimonals</a>
  	<li><a href="doctor.html">Doctors</a></li>
	<li><a href="login.html">Login</a></li>
    <li><a href="about.html">About Us</a></li>		
    <li><a href="medi.html">Home</a></li>
    <li id="logo">VMH</li>
	
</ul>
<div id="slide">
	<div>
		<img src="doct1.jpg">
	</div>
	<div>
		<img src="doct2.png">
	</div>
	<div>
		<img src="back3.jpg">
	</div>
	<div>
		<img src="back5.jpg">
	</div>
	<div>
		<img src="back7.jpg">
	</div>
</div>

	<div id="b2">
	<p style="font-family: 'Quicksand', sans-serif; padding: 12px;">Our Virtual Medical Home concept pairs underserved patients with Specialist MDs who proactively assist with the management of the whole-health process.<br><br>

	Patients no longer need to suffer from barriers in communication, understanding, location, variations of care, limitations of local knowledge, cultural sensitivities, and indignities from well-meaning yet ignorant providers. The dedicated physicians staffing our Virtual Medical Home have the time and ability to help patients navigate the healthcare system and plan for what is to come.
	</p>
	</div>
<br>
<br>
<br>
<div id="b3" >
	
<form style="font-size: 20px;">
	<center><b>EMERGENCY CASE:</b></center><br><pre>
  Enter Patient ID:  <input type="text" name=""> <br>
  Enter Issue:     <input type="text" name=""></pre></form>
	<button style="margin-left: 40px;">SUBMIT</button>
</div>
</body>
</html>	   
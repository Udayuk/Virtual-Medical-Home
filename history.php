<?php
	
	session_start();
		
	echo '<h1 style="transition: margin-left .5s;
  font-size:200%;
  padding: 1px;">History</h1>';
		
	$f=0;
	$link=mysqli_connect("localhost","AJAY","ajay51gond","AJAY");
	$query="SELECT * FROM appointment WHERE mail='".$_SESSION['mail']."'";

	
	if($result=mysqli_query($link,$query)){
		
		while($row=mysqli_fetch_array($result)){
		
			
				{
				$f=1;	
					
		echo '<table border="1px" ><tr style="text-align:center;font-size:120%;background-color:pink;"><th style="text-align:center;">Date</th><th style="text-align:center;" >Time</th><th style="text-align:center;">subject</th></tr><tr style="text-align:center;background-color:beige;" ><td>'.$row['dt'].'</td><td >'.$row['tm'].'</td><td>'.$row['subject'].'</td></table><br><br>';
				
	
				
				}
	}
				if($f==0) echo '<center><br><br><p style="color:navy;font-size:140%;font-weight:700"><u>History not available</u></p></center>';

	}	


?>


<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">


	<style type="text/css">
        body{
        	background-image: url("profback.jpg");
        	height: 100%;
        	width: auto;
           	background-size: cover;
        	background-position: center;
        	background-repeat: no-repeat;

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
		h1{ margin-top: 2%;
      font-family: 'Roboto Slab', serif;
      font-size: 50px;
      margin-left: 7%;
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

#content{
font-family: 'Roboto Slab', serif;
font-size: 25px;
margin-left: 5%;
border-width: 10px;
border-color: black;
width: 90%;
background-color: rgb(200, 208, 216,0.6);
padding: 20px;

}
table {
  border-collapse: collapse;
  width: 100%;
  font-size: 30px;
}

table td, table th {
  border: 1px solid #ddd;
  padding: 8px;
}

table tr:nth-child(even){background-color: #f2f2f2;}

table tr:hover {background-color: #ddd;}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: lightgrey;
  color: black;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
	</style>
</head>		
<body>

    <li id="logo">VMH</li>


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="myprofile.html">My Profile</a>
  <a href="history.html">History</a>
  <a href="doctor2.html">Book an Appointment</a>
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

<div id="foot">
		Thank you for choosing us! It's been a pleasure helping you get healthy!
	</div>

 
</body>
</html>
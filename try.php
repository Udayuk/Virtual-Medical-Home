<?php 
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','AJAY','ajay51gond','AJAY');

if($con)
{
	echo "connection successful but enter the fields";
}
else{
	echo "no connection";
}
$q="select * from newus where naam='$username' && password='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
 $_SESSION['username']=$username;
 header('location:userp.php'); 
}
else{
	header('location:login.html');
}
?>				
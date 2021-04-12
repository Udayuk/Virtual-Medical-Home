<?php
session_start();


$con=mysqli_connect('localhost','AJAY','ajay51gond','AJAY');
if(mysqli_connect_error())echo "err";


$_SESSION['mail']=$_POST['mail'];

$qy="INSERT INTO appointment (mail,dt,tm,subject) VALUES ('".$_POST['mail']."','".$_POST['dt']."','".$_POST['tm']."','".$_POST['subject']."')";
 if(mysqli_query($con, $qy)){
        echo '<script>alert("Records added successfully.");</script>';
    } else{
        echo "ERROR: Could not able to execute $qy. " . mysqli_error($con);
    }
        mysqli_close($con);


?>			
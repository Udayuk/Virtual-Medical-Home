<?php
session_start();

$con=mysqli_connect('localhost','AJAY','ajay51gond','AJAY');
if(mysqli_connect_error())echo "err";




$qy="INSERT INTO complaint (pid,sub,issue) VALUES ('".$_POST['pid']."','".$_POST['subject']."','".$_POST['issue']."')";
 if(mysqli_query($con, $qy)){
        echo '<script>alert("Records added successfully.");</script>';
    } else{
        echo "ERROR: Could not able to execute $qy. " . mysqli_error($con);
    }
        mysqli_close($con);

?>			
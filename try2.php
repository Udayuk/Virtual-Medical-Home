<?php
session_start();

$con=mysqli_connect('localhost','AJAY','ajay51gond','AJAY');
if(mysqli_connect_error())echo "err";




$qy="INSERT INTO newus (naam,password,gender,bloodgp,address,email) VALUES ('".$_POST['naam']."','".$_POST['password']."','".$_POST['gender']."','".$_POST['bloodgp']."','".$_POST['address']."','".$_POST['email']."')";
 if(mysqli_query($con, $qy)){
        echo '<script>alert("Records added successfully.");</script>';
    } else{
        echo "ERROR: Could not able to execute $qy. " . mysqli_error($con);
    }
        mysqli_close($con);

?>			
<?php  
session_start();

 $con=mysqli_connect("localhost:3307","root","","loginsystem");
    $trainerid=$_SESSION["id"];
    $query1="delete from trainer where trainerid='$trainerid'";
    $result1=mysqli_query($con,$query1);
    if ($result1) {
    	 echo "<script>alert('trainer removed.')</script>";
        echo "<script>window.open('admintlists.php','_self')</script>";
    	# code...
    }




?>
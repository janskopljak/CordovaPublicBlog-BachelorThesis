<?php
 	include 'db.php';


	 $username=$_POST['username'];
	 $email=$_POST['email'];
	 $password=$_POST['password']; 
	 $q=mysqli_query($con,"INSERT INTO `users` (`username`,`email`,`password`) VALUES ('$username','$email','$password')");

	 if($q)
	  echo "success";
	 else
	  echo "error";
 
?>
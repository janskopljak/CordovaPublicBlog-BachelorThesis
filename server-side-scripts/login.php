<?php
	include 'db.php';
	
	$data=array();
	$q=mysqli_query($con,"select password from users where username=\"{$_POST['username']}\"");

	if(mysqli_num_rows($q) === 0)
		die('error'); 

	$row=mysqli_fetch_assoc($q);

	if($row['password'] == $_POST['password'])
		echo 'success';
?>

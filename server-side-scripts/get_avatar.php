<?php 
	include 'db.php';

	$username = $_POST['username'];

	$q=mysqli_query($con, "select avatar from users where username = \"{$_POST['username']}\"");
	$data=[];
	while ($row=mysqli_fetch_assoc($q))
	 $data[]=$row;
	echo json_encode($data);
?>
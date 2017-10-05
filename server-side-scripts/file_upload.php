<?php
	include 'db.php';

	// $output = print_r($_POST, true);
	// file_put_contents('username.txt', $output);
	// $output = print_r($_FILES, true);
	// file_put_contents('file.txt', $output);

	$username = $_POST['username'];
	$tmp_file_name = $_FILES["file"]["tmp_name"];
	$file_name = "images/" . $username . '.jpg';

	// remove the file if exists
	if(file_exists($file_name)) {
	    unlink($file_name); 
	}
	// upload new file
	move_uploaded_file($tmp_file_name, $file_name);



	$file_name = "http://sanjaprodan.net/jan_dipl/".$file_name;


	// update database
	$q = mysqli_query($con,"UPDATE users SET avatar = '$file_name' WHERE username = '$username'");

	if($q)
		echo "success";
	else
		echo "error";

?>
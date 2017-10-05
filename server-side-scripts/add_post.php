<?php
	include 'db.php';

	 $username=$_POST['username'];
	 $title=$_POST['title'];
	 $content=$_POST['content'];
	 $date=date('Y-m-d');
	 $q=mysqli_query($con,"INSERT INTO `posts` (`author_id`,`title`,`content`,`date`) VALUES ((SELECT id FROM `users` WHERE username = '$username'),'$title','$content','$date')");
	 if($q)
	  echo "success";
	 else
	  echo "error";

?>
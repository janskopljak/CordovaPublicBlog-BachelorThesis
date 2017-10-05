<?php
	include 'db.php';
	
	$q=mysqli_query($con,"select date, title, content, username, avatar from posts, users where author_id = id order by date desc");
	$data=[];
	while ($row=mysqli_fetch_assoc($q)){
	 $data[]=$row;
	}
	echo json_encode($data);
?>
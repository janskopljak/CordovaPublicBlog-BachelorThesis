<?php
	include 'db.php';

	$q=mysqli_query($con, "select date, title, content from posts where author_id = (select id from users where username = \"{$_POST['username']}\") order by date desc");
	$data=[];
	while ($row=mysqli_fetch_assoc($q))
	 $data[]=$row;
	echo json_encode($data);

	?>
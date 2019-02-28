<?php
	$db = mysqli_connect('localhost','root','root','blog');
	if(mysqli_connect_errno()){
		echo 'errors haha: '. mysqli_connect_error();
		die();
	}
?>
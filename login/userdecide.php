<?php
	session_start();
	$user_type = $_SESSION['user_type'];
	
	if($user_type == 1){
		header("Location: ../admin/dashboard.php");
	}
	else{
		print_r($user_type);
	}
?>
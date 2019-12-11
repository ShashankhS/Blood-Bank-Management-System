<?php
	session_start();
	$user_type = $_SESSION['user_type'];
	
	if($user_type == 1){//type = 1 for admin
		header("Location: ../admin/dashboard.php");
	}
	else if($user_type == 2){//type = 2 for physician
		header("Location: ../physician/dashboard.php");
	}
	else if($user_type == 3){//type = 3 for lab attendant
		header("Location: ../lab/dashboard.php");
	}
	else if($user_type == 4){//type = 4 for blood bank personnel
		header("Location: ../bank/dashboard.php");
	}
	else{
		print_r($user_type);
	}
?>
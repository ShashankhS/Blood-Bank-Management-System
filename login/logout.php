<?php
	session_start();
	if($_SESSION['login'] == 1){
		$_SESSION['login'] = 0;
		$_SESSION['user_type'] = 0;
		$_SESSION['user_id'] = 0;
	}
	header("Location: ../session/sessionexp.php");
?>
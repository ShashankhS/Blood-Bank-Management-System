<?php
	session_start();
	if($_SESSION['login'] == 1){
		session_destroy();
	}
	echo "<script>
	alert('User logged out. Redireting to login page');
	window.location.href='../login/newLogin/login.html';
	</script>";
?>
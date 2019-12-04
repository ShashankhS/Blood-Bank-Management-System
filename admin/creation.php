<?php
	require '../connector/connect.php';
	session_start();
	if($_SESSION['user_type'] == 1 && $_SESSION['login'] == 1){
		$user_id = $_POST['user'];
		$passplain = $_POST['pwd'];
		$user_type = $_POST['user_type'];
		$user_pwd = hash('sha256', $passplain);

		$query = "SELECT * FROM tbl_users WHERE user_id = '".$user_id."';";
		$res = mysqli_query($con, $query);
		$chk = mysqli_num_rows($res);
		if($chk != 0){
			echo "<script>
			alert('ERROR: User Name already exists');
			window.location.href='./create.php';
			</script>";
		}
		else{
			$query = "INSERT INTO tbl_users VALUES('".$user_id."', '".$user_pwd."', '".$user_type."');";
			mysqli_query($con, $query);
			echo "<script>
			alert('User created successfully');
			window.location.href='./dashboard.php';
			</script>";
		}

	}
	else{
		header("Location: ../session/sessionexp.php");
	}
?>
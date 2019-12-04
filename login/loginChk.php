<?php
	require '../connector/connect.php';
	session_start();

	$username = $_POST['user'];
	$passplain = $_POST['pwd'];

	$password = hash('sha256', $passplain);

	$query = "SELECT * FROM tbl_users WHERE user_id = '".$username."' AND user_pwd = '".$password."';";
	$res = mysqli_query($con, $query);
	$chk = mysqli_num_rows($res);

	$_SESSION['user_type'] = 0;

	if($chk == 0){
		$_SESSION['err_msg'] = 'Login Failed';
		$_SESSION['err'] = 1;
		$_SESSION['login'] = 0;
		header("Location: ./fail.php");
	}
	else{
		$row = mysqli_fetch_assoc($res);
		$_SESSION['user_id'] = $row['user_id'];
		$_SESSION['err_msg'] = 'Login success';
		$_SESSION['err'] = 0;
		$_SESSION['login'] = 1;
		$_SESSION['user_type'] = $row['user_type'];
		header("Location: ./userdecide.php");
	}

	//print_r($_SESSION);

?>
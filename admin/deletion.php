<?php
	require '../connector/connect.php';
	session_start();
	if($_SESSION['user_type'] == 1 && $_SESSION['login'] == 1){
		$user_id = $_POST['user_id'];
		if($user_id == 'admin'){
			echo "<script>
			alert('ERROR: CANNOT DELETE ADMIN');
			window.location.href='./delete.php';
			</script>";
		}
		else{
			$query = "SELECT * FROM tbl_users WHERE user_id = '".$user_id."';";
			$res = mysqli_query($con, $query);
			$chk = mysqli_num_rows($res);
			if($chk == 0){
				echo "<script>
				alert('ERROR: User Name does not exist');
				window.location.href='./delete.php';
				</script>";
			}
			else{
				$query = "DELETE FROM tbl_users WHERE user_id = '".$user_id."';";
				mysqli_query($con, $query);
				echo "<script>
				alert('User deleted successfully');
				window.location.href='./dashboard.php';
				</script>";
			}
		}
	}
	else{
		header("Location: ../session/sessionexp.php");
	}
?>
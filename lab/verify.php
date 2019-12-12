<?php
	require '../connector/connect.php';
	session_start();
	if($_SESSION['user_type'] != 3 || $_SESSION['login'] != 1){
		header("Location: ../session/sessionexp.php");
	}
	else{
		$unit = $_POST['unit'];
		$conf = $_POST['unit1'];

		if($unit != $conf){
			echo "<script>
			alert('The blood unit numbers not matching');
			window.location.href='./newVerify.php';
			</script>";
		}
		else{
			$blood_no = $unit;
			$qry = "SELECT verification FROM tbl_donor WHERE blood_no = ".$blood_no.";";
			$r = mysqli_query($con, $qry);
			$val = mysqli_fetch_assoc($r)['verification'];
			print_r($val);
			if($val == 1 || $val == 2){
				echo "<script>
				alert('Verification for given unit number already completed');
				window.location.href='./newVerify.php';
				</script>";
			}
			else{
				$user = $_SESSION['user_id'];
				$query = "UPDATE tbl_donor SET verification = 1, verfied_by = '".$user."' WHERE tbl_donor.blood_no = ".$blood_no.";";
				$res = mysqli_query($con, $query);

				$query1 = "SELECT blood_grp_no FROM tbl_donor WHERE blood_no = ".$blood_no.";";
				$res1 = mysqli_query($con, $query1);
				if(mysqli_num_rows($res1) == 0){
					echo "<script>
					alert('No such donation');
					window.location.href='./newVerify.php';
					</script>";
				}
				else{
					$row = mysqli_fetch_assoc($res1);
					$blood_grp_no = $row['blood_grp_no'];
					$query2 = "UPDATE tbl_group_amount SET blood_amt = blood_amt + 1 WHERE blood_grp_no = ".$blood_grp_no.";";
					$res2 = mysqli_query($con, $query2);
					header("Location: ./dashboard.php");
				}
			}
		}
	}
?>
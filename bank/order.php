<?php
	require '../connector/connect.php';
	session_start();
	if($_SESSION['user_type'] != 4 || $_SESSION['login'] != 1){
		header("Location: ../session/sessionexp.php");
	}
	else{
		$docname = $_POST['docname'];
		$hospital = $_POST['hospital'];
		$blood_amt = $_POST['amt'];
		$blood_grp_no = $_POST['group'];
		$order_by = $_SESSION['user_id'];

		$qry = "SELECT blood_amt FROM tbl_group_amount WHERE blood_grp_no = ".$blood_grp_no.";";
		$res = mysqli_query($con, $qry);
		$amt = mysqli_fetch_assoc($res)['blood_amt'];
		//print_r($amt);
		if($amt < $blood_amt){
			echo "<script>
				alert('Only ".$amt." units of required blood available');
				window.location.href='./newOrder.php';
				</script>";
		}
		else{
			$query = "UPDATE tbl_group_amount SET blood_amt = blood_amt - ".$blood_amt." WHERE blood_grp_no = ".$blood_grp_no.";";
			$result = mysqli_query($con, $query);
			if(!$result){
				echo "<script>
				alert('Order failed');
				window.location.href='./newOrder.php';
				</script>";
			}
			else{
				$query1 = "INSERT INTO `tbl_order`(`docname`, `hospital`, `order_amt`, `order_by`, `blood_grp_no`) VALUES ('".$docname."','".$hospital."',".$blood_amt.",'".$order_by."',".$blood_grp_no.")";
				//print_r($query1);
				$result1 = mysqli_query($con, $query1);
				if(!$result1){
					$query = "UPDATE tbl_group_amount SET blood_amt = blood_amt + ".$blood_amt." WHERE blood_grp_no = ".$blood_grp_no.";";
					$result = mysqli_query($con, $query);
					echo "<script>
					alert('Order failed');
					window.location.href='./newOrder.php';
					</script>";
				}
				else{
					echo "<script>
					alert('Order successful');
					window.location.href='./dashboard.php';
					</script>";
				}
			}
		}
	}
?>
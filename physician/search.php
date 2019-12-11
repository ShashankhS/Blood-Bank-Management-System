<?php
	session_start();
	if($_SESSION['user_type'] != 2 || $_SESSION['login'] != 1){
		header("Location: ../session/sessionexp.php");
	}
	else{
		require '../connector/connect.php';

		$blood_no = $_POST['unit'];

		$qry = "SELECT d.blood_no,d.name, d.email, d.phno, b.group_name FROM tbl_donor d, tbl_blood_grp b WHERE d.blood_grp_no = b.blood_grp_no AND d.blood_no = ".$blood_no.";";
		$res = mysqli_query($con, $qry);
		if(mysqli_num_rows($res) == 0){
			echo "<script>
			alert('No such unit found.');
			window.location.href='./dashboard.php';
			</script>";
		}
		else{
			$row = mysqli_fetch_assoc($res);
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Search Result</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id = "frm">
		<p>
			<h2>
				Donation details
			</h2>
		</p>
		<p>
			<label>Unit number: </label>
			<label><?php echo $row['blood_no']; ?></label>		
		</p>
		<p>
			<label>Donor Name: </label>
			<label><?php echo $row['name']; ?></label>		
		</p>
		<p>
			<label>Donor email: </label>
			<label><?php echo $row['email']; ?></label>		
		</p>
		<p>
			<label>Donor Phone number: </label>
			<label><?php echo $row['phno']; ?></label>		
		</p>
		<p>
			<label>Donor Blood Group: </label>
			<label><?php echo $row['group_name']; ?></label>		
		</p>
	</div>
	<form action = "./dashboard.php">
		<input type="submit" id = "btn" value="Dashboard">
	</form>
</body>
</html>
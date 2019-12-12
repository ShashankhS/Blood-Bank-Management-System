<?php
	require '../connector/connect.php';
	session_start();
	if($_SESSION['user_type'] != 3 || $_SESSION['login'] != 1){
		header("Location: ../session/sessionexp.php");
	}
	$qry = "SELECT blood_no FROM tbl_donor WHERE verification = 0";
	$result = mysqli_query($con, $qry);
	if (mysqli_num_rows($result) == 0) {
		echo "<script>
		alert('No new units to be verified');
		window.location.href='./dashboard.php';
		</script>";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Yet to be Verified</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id = "frm">
		<h2 align="center">Blood units yet to be verified</h2>
		<table align="center" border="1">
			<tr>
			    <th>Blood units Pending</th>
			</tr>
			<?php
				while($rows=mysqli_fetch_assoc($result)){
			?>
			<tr align="center">
				<td><?php echo $rows['blood_no']; ?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</div>
	<form action = "./dashboard.php">
		<input type="submit" id = "btn" value="Dashboard">
	</form>
</body>
</html>
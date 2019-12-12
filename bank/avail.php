<?php
	require '../connector/connect.php';
	session_start();
	if($_SESSION['user_type'] != 4 || $_SESSION['login'] != 1){
		header("Location: ../session/sessionexp.php");
	}
	$qry = "SELECT b.group_name, amt.blood_amt FROM tbl_blood_grp b, tbl_group_amount amt WHERE b.blood_grp_no = amt.blood_grp_no";
	$result = mysqli_query($con, $qry);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Available Blood</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id = "frm">
		<h2 align="center">Blood units available</h2>
		<table align="center" border="1">
			<tr>
			    <th>Blood Group</th>
			    <th>Units available</th>
			</tr>
			<?php
				while($rows=mysqli_fetch_assoc($result)){
			?>
			<tr align="center">
				<td><?php echo $rows['group_name']; ?></td>
				<td><?php echo $rows['blood_amt']; ?></td>
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
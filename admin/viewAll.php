<?php
	require '../connector/connect.php';
	session_start();
	if($_SESSION['user_type'] != 3 || $_SESSION['login'] != 1){
		header("Location: ../session/sessionexp.php");
	}
	$qry = "SELECT `blood_no`, `name`, `email`, `phno`, `address`, `age`, tbl_blood_grp.group_name, `gender`, `donation_time`, `created_by`, `verification`, `verfied_by` FROM `tbl_donor`, tbl_blood_grp WHERE tbl_donor.blood_grp_no = tbl_blood_grp.blood_grp_no ORDER BY blood_no";
	$result = mysqli_query($con, $qry);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Donor records</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div>
		<h2 align="center">All donor records</h2>
		<table align="center" border="1" id = "table">
			<tr>
			    <th>Blood unit number</th>
			    <th>Donor Name</th>
			    <th>Email</th>
			    <th>Phone</th>
			    <th>Address</th>
			    <th>Age</th>
			    <th>Blood Group</th>
			    <th>Gender</th>
			    <th>Donation timestamp</th>
			    <th>Donor Registered</th>
			    <th>Verification</th>
			    <th>Verified by</th>
			</tr>
			<?php
				while($rows=mysqli_fetch_assoc($result)){
			?>
			<tr align="center">
				<td><?php echo $rows['blood_no']; ?></td>
				<td><?php echo $rows['name']; ?></td>
				<td><?php echo $rows['email']; ?></td>
				<td><?php echo $rows['phno']; ?></td>
				<td><?php echo $rows['address']; ?></td>
				<td><?php echo $rows['age']; ?></td>
				<td><?php echo $rows['group_name']; ?></td>
				<td><?php echo $rows['gender']; ?></td>
				<td><?php echo $rows['donation_time']; ?></td>
				<td><?php echo $rows['created_by']; ?></td>
				<td><?php echo $rows['verification']; ?></td>
				<td><?php echo $rows['verfied_by']; ?></td>
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
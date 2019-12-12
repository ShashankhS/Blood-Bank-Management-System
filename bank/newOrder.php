<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id = "frm">
		<form action = "order.php" method = "POST">
			<p>
				<label>Doctor Name:</label>
				<input type="text" name="docname" id = "docname" pattern="[A-Za-z\s]{2,}" required />
			</p>
			<p>
				<label>Hospital:</label>
				<input type="text" name="hospital" id = "hospital" pattern="[A-Za-z0-9\s]{2,}" required />
			</p>
			<p>
				<label>Order Amount:</label>
				<input type="text" name="amt" id = "amt" pattern="[0-9]+" required />
			</p>
			<p>
				<label>Blood Group:</label>
				<select name="group" required>
					<option value="0">O+</option>
					<option value="1">O-</option>
					<option value="2">A+</option>
					<option value="3">A-</option>
					<option value="4">B+</option>
					<option value="5">B-</option>
					<option value="6">AB+</option>
					<option value="7">AB-</option>
				</select>
			</p>
			<p>
				<input type="submit" id = "btn" value="Create" />
			</p>	
		</form>
	</div>
	<form action = "./dashboard.php">
		<input type="submit" id = "btn" value="Dashboard">
	</form>
</body>
</html>
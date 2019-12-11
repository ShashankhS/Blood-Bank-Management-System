<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h3>
		Creation of new user
	</h3>
	<div id = "frm">
		<form action = "creation.php" method = "POST">
			<p>
				<label>Full name:</label>
				<input type="text" name="name" id = "name" pattern="[A-Za-z\s]{2,}" required />
			</p>
			<p>
				<label>Email ID:</label>
				<input type="email" name="email" id = "email" required />
			</p>
			<p>
				<label>Phone Number:</label>
				<input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
			</p>
			<p>
				<label>Residence:</label>
				<input type="text" name="addr1" id = "name" required />
			</p>
			<p>
				<label>Locality:</label>
				<input type="text" name="addr2" id = "name" required />
			</p>
			<p>
				<label>City:</label>
				<input type="text" name="addr3" id = "name" required />
			</p>
			<p>
				<label>Age:</label>
				<input type="number" name="age" id = "age" min = "18" max = "60" required />
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
				<p>
					Gender:
				</p>
				<input type="radio" name="gender" value="M" required> Male<br>
				<input type="radio" name="gender" value="F"> Female<br>
				<input type="radio" name="gender" value="O"> Other<br>
			</p>
			<p>
				<p>
					All medical requirements:
				</p>
				<input type="radio" name="requirements" value="0" required>Verified<br>
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
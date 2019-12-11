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
				<label>Username:</label>
				<input type="text" name="user" id = "user" required />
			</p>
			<p>
					<label>Password:</label>
				<input type="password" name="pwd" id = "pwd" required />
			</p>
			<p>
				<p>
					Please select user type:
				</p>
				<input type="radio" name="user_type" value="2" required> Physician/Nurse<br>
				<input type="radio" name="user_type" value="3"> Lab in-charge<br>
				<input type="radio" name="user_type" value="4"> Blood Bank Personnel<br>  
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
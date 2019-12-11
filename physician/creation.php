<?php
	require '../connector/connect.php';
	session_start();
	if($_SESSION['user_type'] == 2 && $_SESSION['login'] == 1){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phno = $_POST['phone'];
		$address = $_POST['addr1'].", ".$_POST['addr2'].", ".$_POST['addr3'];
		$age = $_POST['age'];
		$blood_grp = $_POST['group'];
		$gender = $_POST['gender'];
		$created_by = $_SESSION['user_id'];
		$qry = "INSERT INTO `tbl_donor`(`name`, `email`, `phno`, `address`, `age`, `blood_grp_no`, `gender`, `created_by`) VALUES ('".$name."', '".$email."', '".$phno."', '".$address."', ".$age.",".$blood_grp.", '".$gender."','".$created_by."');";
		$insert = mysqli_query($con, $qry);
		if($insert){
			echo "<script>
			alert('Donor addition successful');
			window.location.href='./dashboard.php';
			</script>";
			//header("Location: ./dashboard.php");
		}
		else{
			echo "<script>
			alert('Error in addition of donor');
			window.location.href='./newDonor.php';
			</script>";	
			//header("Location: ./newDonor.php");
		}
	}
	else{
		header("Location: ../session/sessionexp.php");
	}
?>
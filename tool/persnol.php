<?php
	include('getDB.php');

	$email = $_POST['email'];
	$name = $_POST['name'];
	$designation = $_POST['designation'];
	$dob = $_POST['dob'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];
	$postal_code = $_POST['postal_code'];
	$appointment = $_POST['appointment'];

	$q = "INSERT INTO `persnol_details`(`email`, `name`, `designation`, `dob`, `mobile`, `address`, `postal_code`, `appointment`) VALUES ('$email','$name','$designation','$dob','$mobile','$address','$postal_code','$appointment')";
	
	$result = mysqli_query($con, $q);

	header('location: dashboard.php');
?>
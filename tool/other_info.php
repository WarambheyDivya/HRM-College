<?php
	include('getDB.php');

	session_start();
	$email = $_SESSION['teacher'];
	$gender= $_POST['gender'];
	$telephone=$_POST['telephone'];
	$date_of_joining=$_POST['appointment_date'];
	$per_address=$_POST['address'];
	$religion=$_POST['religion'];
	$city = $_POST['city'];
	$q = "INSERT INTO `other_info`(`email`, `gender`, `Telephone`, `date_of_joining`, `per_address`, `religion`, `city`) VALUES ('$email','$gender','$telephone','$date_of_joining','$per_address','$religion','$city')";
	
	$result = mysqli_query($con, $q);

header('location: dashboard.php');
?>
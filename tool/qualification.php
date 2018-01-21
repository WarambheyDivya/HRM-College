<?php
	include('getDB.php');
	session_start();
	$email = $_SESSION['teacher'];
	$qualification_1 = $_POST['qualification1'];
	$qualification_2 = $_POST['qualification2'];
	$qualification_3 = $_POST['qualification3'];
	$phd_status = $_POST['phd'];
	$completed = $_POST['completed'];

	$q = "INSERT INTO `qualification`(`email`, `qualification_1`, `qualification_2`, `qualification_3`, `phd_status`, `completed`) VALUES ('$email','$qualification_1','$qualification_2','$qualification_3','$phd_status','$completed')";
	
	$result = mysqli_query($con, $q);
	var_dump($qualification_3);
	header('location: dashboard.php');
?>
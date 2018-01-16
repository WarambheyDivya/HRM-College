<?php
	include('getDB.php');

	$email = $_POST['email'];
	$qualification_1 = $_POST['qualification_1'];
	$qualification_2 = $_POST['qualification_2'];
	$qualification_3 = $_POST['qualification_3'];
	$phd_status = $_POST['phd_status'];
	$completed = $_POST['completed'];

	$q = "INSERT INTO `qualification`(`email`, `qualification_1`, `qualification_2`, `qualification_3`, `phd_status`, `completed`) VALUES ('$email','$qualification_1','$qualification_2','$qualification_3','$phd_status','$completed')";
	
	$result = mysqli_query($con, $q);

header('location: dashboard.php');
?>
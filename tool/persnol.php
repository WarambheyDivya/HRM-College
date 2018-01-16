<?php
	include('getDB.php');

	$q = "INSERT INTO `persnol_details`(`email`, `name`, `designation`, `dob`, `mobile`, `address`, `postal_code`, `appointment`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])";
	
	$result = mysqli_query($con, $q);

	header('location: dashboard.php');
?>
<?php
	include('getDB.php');

	$q = "INSERT INTO `qualification`(`email`, `qualification_1`, `qualification_2`, `qualification_3`, `phd_status`, `completed`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])";
	
	$result = mysqli_query($con, $q);

header('location: dashboard.php');
?>
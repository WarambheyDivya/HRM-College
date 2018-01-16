<?php
	include('getDB.php');

	$q = "INSERT INTO `detailed_qualification`(`email`, `select_degree`, `marks`, `grade`, `board`, `college`, `degree_name`, `specialization`, `year_of_passing`, `division`, `marksheet`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11])";
	
	$result = mysqli_query($con, $q);

	header('location: dashboard.php');
?>
<?php
	include('getDB.php');

	$q = "INSERT INTO `experience`(`email`, `teaching`, `industrial`, `research`, `uni_exam_evaluator`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])";
	
	$result = mysqli_query($con, $q);

header('location: dashboard.php');
?>
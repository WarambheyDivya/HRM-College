<?php
	include('getDB.php');

	$q = "INSERT INTO `other_info`(`email`, `gender`, `Telephone`, `date_of_joining`, `per_address`, `religion`, `city`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])";
	
	$result = mysqli_query($con, $q);

header('location: dashboard.php');
?>
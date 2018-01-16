<?php
	include('getDB.php');

	$email = $_POST['email'];
	$select_degree = $_POST['select_degree'];
	$marks = $_POST['marks'];
	$grade = $_POST['grade'];
	$board = $_POST['board'];
	$college = $_POST['college'];
	$degree_name = $_POST['degree_name'];
	$specialization = $_POST['specialization'];
	$year_of_passing = $_POST['year_of_passing'];
	$division = $_POST['division'];
	$marksheet = $_POST['marksheet'];

	$q = "INSERT INTO `detailed_qualification`(`email`, `select_degree`, `marks`, `grade`, `board`, `college`, `degree_name`, `specialization`, `year_of_passing`, `division`, `marksheet`) VALUES (`$email`, `$select_degree`, `$marks`, `$grade`, `$board`, `$college`, `$degree_name`, `$specialization`, `$year_of_passing`, `$division`, '$marksheet`)";
	
	$result = mysqli_query($con, $q);

	header('location: dashboard.php');
?>
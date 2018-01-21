<?php
	include('getDB.php');

	session_start();
	$email = $_SESSION['teacher'];
	$select_degree = $_POST['degreetype'];
	$marks = $_POST['marks'];
	$grade = $_POST['grade'];
	$board = $_POST['university_name'];
	$college = $_POST['college_name'];
	$degree_name = $_POST['degree_name'];
	$specialization = $_POST['specialization'];
	$year_of_passing = $_POST['passing_year'];
	$division = $_POST['division'];
	$marksheet = $_POST['marksheet'];

	$q = "INSERT INTO `detailed_qualification`(`email`, `select_degree`, `marks`, `grade`, `board`, `college`, `degree_name`, `specialization`, `year_of_passing`, `division`, `marksheet`) VALUES ('$email', '$select_degree', '$marks', '$grade', '$board', '$college', '$degree_name', '$specialization', '$year_of_passing', '$division', '$marksheet')";
	
	$result = mysqli_query($con, $q);
	var_dump($q);
	var_dump($result);
	header('location: dashboard.php');
?>
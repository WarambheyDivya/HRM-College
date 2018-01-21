<?php
	include('getDB.php');
	session_start();
	$email = $_SESSION['teacher'];
	//$email = $_POST['email'];
	$teaching = $_POST['teaching_ex'];
	$industrial = $_POST['industrial_ex'];
	$research = $_POST['research_ex'];
	$uni_exam_evaluator = $_POST['exam_ex'];
	

	$q = "INSERT INTO `experience`(`email`, `teaching`, `industrial`, `research`, `uni_exam_evaluator`) VALUES ('$email','$teaching','$industrial','$research','$uni_exam_evaluator')";
	
	$result = mysqli_query($con, $q);

header('location: dashboard.php');
?>
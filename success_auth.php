<?php
	session_start();
	if(!isset($_SESSION["enrolment_no"])) {
		header("Location: registration.php");
	exit(); 
	}
?>
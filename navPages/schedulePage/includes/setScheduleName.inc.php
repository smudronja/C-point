<?php


include_once '../../../includes/dbh.inc.php';

if (isset($_POST['createNewRow'])) {

	$monday = mysqli_real_escape_string($conn, $_POST['monday']);
	$tuesday = mysqli_real_escape_string($conn, $_POST['tuesday']);
	$wednesday = mysqli_real_escape_string($conn, $_POST['wednesday']);
	$thursday = mysqli_real_escape_string($conn, $_POST['thursday']);
	$friday = mysqli_real_escape_string($conn, $_POST['friday']);
	$saturday = mysqli_real_escape_string($conn, $_POST['saturday']);

	$sql = "INSERT INTO schedulenames (monday, tuesday, wednesday, thursday, friday, saturday) VALUES ('$monday', '$tuesday', '$wednesday', '$thursday', '$friday', '$saturday');";

	mysqli_query($conn, $sql);

	header("Location: ../SchedulePage.php?inserted=success");

}


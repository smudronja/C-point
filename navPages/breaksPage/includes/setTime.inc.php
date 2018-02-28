<?php

include_once '../../../includes/dbh.inc.php';


if (isset($_POST['submitSecond'])) {
	$firstLastName = mysqli_real_escape_string($conn, $_POST['firstLastName']);
	$option = $_POST['timeOption'];
	$date = date("Y-m-d H:i:s");

	$sql = "INSERT INTO breakslong (firstLastName, selectTime, date) VALUES ('$firstLastName', '$option', '$date');";

	mysqli_query($conn, $sql);

header("Location: ../breakPage.php?insert=success");
} 

if (isset($_POST['submitThird'])) {
	$firstLastName = mysqli_real_escape_string($conn, $_POST['firstLastName']);
	$hours = $_POST['hours'];
	$minutes = $_POST['minutes'];
	$timeSelect = $hours.".".$minutes;
	$timeDuration = mysqli_real_escape_string($conn, $_POST['timeDuration']);
	$date = date("Y-m-d H:i:s");

	$sql = "INSERT INTO breaksshort (firstLastName, timeSelect, timeDuration, date) VALUES ('$firstLastName', '$timeSelect', '$timeDuration', '$date');";

	mysqli_query($conn, $sql);

header("Location: ../breakPage.php?insert=success");
} 




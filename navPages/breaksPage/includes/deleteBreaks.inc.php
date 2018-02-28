<?php

include_once '../../../includes/dbh.inc.php';

	if (isset($_GET['brakesDelete'])) {
		
		$sql = "DELETE FROM breakslong";
		mysqli_query($conn, $sql);

		$sql2 = "DELETE FROM breaksshort";
		mysqli_query($conn, $sql2);

		header("Location: ../breakPage.php?Delete=success");
		exit();
	} 





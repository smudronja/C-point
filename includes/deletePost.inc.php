<?php

include_once 'dbh.inc.php';

	if (isset($_POST['postDelete'])) {
		$id = $_POST['id'];

		$sql = "DELETE FROM posts WHERE id='$id'";
		mysqli_query($conn, $sql);

		header("Location: ../index.php?Delete=success");
		exit();
	} 


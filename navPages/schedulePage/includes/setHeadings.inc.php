<?php

include_once '../../../includes/dbh.inc.php';

$createdby = mysqli_real_escape_string($conn, $_POST['createdby']);
$heading = mysqli_real_escape_string($conn, $_POST['heading']);
$numberofweek = mysqli_real_escape_string($conn, $_POST['numberofweek']);
$datefrom = mysqli_real_escape_string($conn, $_POST['datefrom']);
$dateto = mysqli_real_escape_string($conn, $_POST['dateto']);



$sql = "INSERT INTO scheduleheadings (createdby, heading, numberofweek, datefrom, dateto,) VALUES ('$createdby', '$heading', '$numberofweek', '$datefrom', '$dateto');";

mysqli_query($conn, $sql);

header("Location: ../SchedulePage.php?created=success");
<?php

include_once 'dbh.inc.php';

$subject = mysqli_real_escape_string($conn, $_POST['subject']);
$content = mysqli_real_escape_string($conn, $_POST['content']);
$author = mysqli_real_escape_string($conn, $_POST['author']);
$date = date("Y-m-d H:i:s");

$sql = "INSERT INTO posts (subject, content, author, date) VALUES ('$subject', '$content', '$author', '$date');";

mysqli_query($conn, $sql);

header("Location: ../index.php?insert=success");
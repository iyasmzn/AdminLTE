<?php
	include 'create_table.php';
	$name = $_POST['name'];

	$add = "INSERT INTO people(name) VALUES ('$name')";
	mysqli_query($connect,$add);
	header('location:index.php');

?>
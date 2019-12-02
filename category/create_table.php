<?php
include '../connect.php';
$create_table = "CREATE TABLE people (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL
	);";
mysqli_query($connect, $create_table);
?>
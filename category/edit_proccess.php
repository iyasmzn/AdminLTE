<?php
include '../connect.php';
$id = $_POST['id'];
$name= $_POST['name'];

$update = "UPDATE people SET name = '$name' WHERE id = '$id'";
mysqli_query($connect, $update);
header('location:index.php');
?>
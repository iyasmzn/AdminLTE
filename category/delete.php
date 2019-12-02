<?php
include '../connect.php';
$id= $_GET['id'];
$delete = "DELETE FROM people WHERE id='$id'";
mysqli_query($connect, $delete);
header('location:index.php');



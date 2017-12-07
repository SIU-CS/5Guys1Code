<?php
session_start();
include('connect.php');
$name = $_GET['name'];
mysqli_query($bd, "DELETE FROM items WHERE name = '$name' ");
header("location: toDo.php?remarks=success");
mysqli_close($bd);
?>

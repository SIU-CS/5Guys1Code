<?php
include("connect.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$bd = mysqli_query($mysqli, "DELETE FROM items WHERE id=$id");

header("location: toDo.php?remarks=success");
?>

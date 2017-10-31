<?php

$mysql_hostname = "dbserv.cs.siu.edu";
$mysql_user = "jhowell"; //here use your cs account username
$mysql_password = ""; // original cs account password
$mysql_database = "jhowell"; // name database as your username


$bd = mysqli_connect("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");

// Check connection
if (mysqli_connect_errno())
  {
  die ("Failed to connect to MySQL: " . mysqli_connect_error());
  }
?>

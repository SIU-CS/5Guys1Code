<?php

$mysql_hostname = "dbserv.cs.siu.edu";
$mysql_user = "mabdulkadir";
$mysql_password = " ";
$mysql_database = " ";


$bd = mysqli_connect("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");

// Check connection
if (mysqli_connect_errno())
  {
  die ("Failed to connect to MySQL: " . mysqli_connect_error());
  }
?>

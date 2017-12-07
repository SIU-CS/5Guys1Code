<?php
  $db = mysqli_connect('dbserv.cs.siu.edu','jhowell','Gb1l5ILW','jhowell')
  or die('Error connecting to MySQL server.');
  
  $email = mysqli_real_escape_string($db,$_POST['email']);
  $stud_id = mysqli_real_escape_string($db,$_POST['stud_id']);
  $password = mysqli_real_escape_string($db,$_POST['pass']);
  
	$sql= "INSERT INTO registered_users (email, stud_id, password) VALUES ('".$email."', '".$stud_id."', MD5('".$password."'))";
    mysqli_query($db, $sql);
	mysqli_close($db);
	
	header("Location: http://www2.cs.siu.edu/~jhowell/calendar.html");
?>
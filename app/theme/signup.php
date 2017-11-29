<?php
  $db = mysqli_connect('dbserv.cs.siu.edu','jhowell','password','jhowell')
  or die('Error connecting to MySQL server.');
  
  $email = mysqli_real_escape_string($db,$_POST['email']);
  $stud_id = mysqli_real_escape_string($db,$_POST['stud_id']);
  $password = mysqli_real_escape_string($db,$_POST['pass']);
  
	$sql= "INSERT INTO registered_users (email, stud_id, password) VALUES ('".$email."', '".$stud_id."', MD5('".$password."'))";
    if(mysqli_query($db, $sql)){
		echo "Records added successfully.";
	}
 	else{
		echo "ERROR: There was an issue signing you up. $sql. " . mysqli_error($db);
		}
		
	mysqli_close($db);
?>
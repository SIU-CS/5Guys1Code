<?php
  include('registration.php');
  $email = mysqli_real_escape_string($bd,$_POST['email']);
  $stud_id = mysqli_real_escape_string($bd,$_POST['stud_id']);
  $password = mysqli_real_escape_string($bd,$_POST['pass']);
  $bd = "SELECT email FROM users WHERE email='".$email."'";
  $result = mysqli_query($bd,$query);
  $numResults = mysqli_num_rows($result);
  
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
    {
    	$message =  "Invalid email address please type a valid email!!";
    }
  elseif($numResults>=1)
    {
    	$message = $email." Email already exist!!";
    }
  else
	{
    	mysqli_query("INSERT INTO users (email,stud_id,password) VALUES ('".$email."','".$stud_id."','".md5($password)."')");
    	$message = "Signup Sucessfully!!";
    }
?>
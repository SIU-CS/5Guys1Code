<?php
  $mysql_hostname = "dbserv.cs.siu.edu";
  $mysql_user = ""; // enter your username
  $mysql_password = " "; //enter your password here
  $mysql_database = " "; //enter your db name same as password


  $conn = mysqli_connect("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");

  if ($conn === false) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM items";
  $result = mysqli_query($conn, $sql);

  mysqli_close($conn);

  //Check username and password

  if(empty($_POST['email']))
  {
    echo "Email or Password is empty";
    return false;
  }
  if(empty($_POST['password']))
  {
    echo "Email or Password is empty";
    return false;
  }

  $sql =( "SELECT * FROM $registered_users WHERE email='$email' and password='$password'";
  result = mysqli_query($sql)





?>

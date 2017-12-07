<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Calendar Organizer</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <link href="assets/css/main.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/modernizr.custom.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
  </head>
<html>
 <?php

$mysql_hostname = "dbserv.cs.siu.edu";
$mysql_user = " "; // enter your username
$mysql_password = " "; //enter your password here
$mysql_database = " "; //enter your db name same as password

// Create connection
$conn = mysqli_connect("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
// Check connection
if ($conn === false) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM items";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>

<head>
    <title>To-do</title>
</head>

<body>
    <a href="add.html">Add New Data</a><br/><br/>

    <table width='80%' border=0>
        <tr bgcolor='#CCCCCC'>
            <td>Name</td>
	    <td>Date</td>
        </tr>
    </table>
 <?php
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($res = mysqli_fetch_assoc($result)) {
            echo "" . $row["name"]." ". $row["datee"]."<br>";
    	    //echo "<tr>";
            echo "<td>".$res['name']."</td>";
	    echo "\t";
            echo "<td>".$res['datee']."</td>";
            echo "<td><a href=\"edit.php?name=$res[name]\"> Edit </a>
| <a href=\"delete.php?name=$res[name]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

    }
}
        ?>
</body>
</html>

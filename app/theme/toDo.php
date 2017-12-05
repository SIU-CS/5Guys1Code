 <?php

$mysql_hostname = "dbserv.cs.siu.edu";
$mysql_user = ""; // enter your username
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

<html>
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
   <?php
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       echo " - Name: " . $row["name"]." - Date: " . $row["datee"]. "<br>";
    }
} else {
    echo "0 results";
}
	//echo var_dump ($result);

        while($result = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$res['name']."</td>";
            echo "<td>".$res['datee']."</td>";
            echo "<td><a href=\"edit.php?id = $res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
        }
        ?>
    </table>
</body>
</html> 

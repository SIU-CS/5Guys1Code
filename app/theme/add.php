<html>
<head>
    <title>Add Data to table</title>
</head>

<body>
<?php 

include('connect.php');

$name = $_POST['name'];
$datee = $_POST['datee'];

if(empty($name)) {
        if(empty($name)||($datee)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
  
    }

mysqli_query($bd,"INSERT INTO items (name,datee) VALUES('$name','$datee')");
mysqli_close($bd);

//var_dump ($fromm);
//die ("test succceeded ");

header("location: toDo.php?remarks=success");

?>
</body>
</html>

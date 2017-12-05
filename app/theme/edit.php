<?php
// including the database connection file
include_once("connect.php");

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $datee = $_POST['datee'];
	
    // checking empty fields
    if(empty($name) || empty($datee)) {
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        if(empty($datee)) {
            echo "<font color='red'> Date field is empty.</font><br/>";
        }

    } else {
        //updating the table
        $bd = mysqli_query($mysqli, "UPDATE items SET name='$name',datee='$datee' WHERE id=$id");

        //redirectig to the display page. In our case, it is toDo.php
        header("Location: toDo.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM items WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $name = $res['name'];
    $datee = $res['datee'];
}
?>
<html>
<head>
    <title>Edit Data</title>
</head>

<body>
    <a href="toDo.php">Home</a>
    <br/><br/>

    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
            <tr>
                <td>Date</td>
                <td><input type="text" name="datee" value="<?php echo $datee;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<html>
<head>

<?php
error_reporting(0);
include "connection.php";
$name = $_POST['user'];

$sql = "DELETE from data where ID = $name";

if ($_POST['submit']){
    if (mysqli_query($conn, $sql)) {
        echo"Data deleted successfully";
    }
    else{
        echo "somenthing went wrong";
    }
}
?>

</head>

<body>
<form action="delete.php" method="POST">
<h4> Give ID to delete user data </h4>

    ID: <input type="text" name="user">
   
    <input type="submit" name="submit" value="Send">
</form>
</body>
</html>


 
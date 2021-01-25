<html>
<head>

<?php
error_reporting(0);
include "connection.php";
$name = $_POST['user'];
$email = $_POST['mail'];
$pass = $_POST['pass'];
$sql = "INSERT into data(fname, email, pass) values ('$name','$email','$pass')";

if ($_POST['submit']){
    if (mysqli_query($conn, $sql)) {
        echo"Data added successfully";
    }
    else{
        echo "somenthing went wrong";
    }
}
?>

</head>

<body>
<form action="add.php" method="POST">
    Name: <input type="text" name="user">
    Email: <input type="mail" name="mail">
    Password: <input type="password" name="pass">
    <input type="submit" name="submit" value="Send Info">
</form>
</body>
</html>



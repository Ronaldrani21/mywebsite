<html>
<head>

<?php
error_reporting(0);
include "connection.php";

if ($_POST['submit']){
    $uname = $_POST['usern'];
    $passw = $_POST['pwd'];
    $sql = "UPDATE data SET pass = $passw where ID = $uname";
   // echo ($sql);

    if (mysqli_query($conn, $sql)) {
        echo"Data updated successfully";
    }
    else{
        echo "somenthing went wrong";
    }
}
?>

</head>

<body>
<form action="update.php" method="POST">
<h4> Give ID to update user data </h4>
    ID: <input type="text" name="usern">
    Password: <input type="password" name="pwd">
    <input type="submit" name="submit" value="Send Info">
</form>
</body>
</html>



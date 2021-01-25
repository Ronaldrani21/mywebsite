<html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" href="styles/style_admin.css">
</head>
<body>
<div id="header">
<center><img src="admin_icon.png" class="adminLogo" id="adminLogo"><br>This is the Admin Panel, Please proceed with caution!
</center>
</div>

<div id="sidebar">
<ul>
    <li><a href="add.php" target="_blank"> Add</a> </li>
    <li><a href="delete.php" target="_blank"> Delete</a></li>
    <li><a href="update.php" target="_blank"> Update </a></li>
    <li><a href="logout.php"> Log Out</a></li>
</ul>    
</div>
<div id="Data">
<br><br>
<center><h1>Data available</h1></center>
<?php
    error_reporting(0);
    include "connection.php";
    $sql = "SELECT *FROM data";
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  
    while($row = mysqli_fetch_assoc($result)) {
        echo "<h4>ID: </h4>" . $row["ID"]. "<br>" . "  Name: " . $row["name"].  " <br> " .  "Email: " . $row["email"] .  "<br>" . "Password: " . $row["pass"]. "<br><br><br>";
    }
} else{
    echo "<h3><center>No User data found!<center></h3>";
} 
?>
</div>
</body>
</html>
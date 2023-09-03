<?php
session_start();
include("config1.php");
$conn = mysqli_connect($server, $user, $pass); 
  if (!$conn){ 
   echo "NO CONNECTION ";
  }
else {echo "<h1>Connected successfully</h1><br>";}

$sql1 = "CREATE DATABASE userregistration";
if (mysqli_query($conn, $sql1)) {
    echo "<h1>Database created successfully</h1><br>";
	
} else {
    echo "Error creating database: " . $conn->error;
}

mysqli_close($conn);
?>
<html>
<body>
<h1>create table</h1> <input type="button" name="btn1" value="createtable" onClick='location.href="createtable.php"'> <br>
</body>
</html>
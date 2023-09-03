<?php
include("config1.php");
$db="userregistration";
$conn = mysqli_connect($server, $user, $pass, $db); 
  if (!$conn){ 
   echo "NO CONNECTION ";
  }
else {echo "<h1>Connected successfully</h1><br>";}

$sql2 = "CREATE TABLE users (
id INT(65) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
user VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL,
gender VARCHAR(255) NOT NULL,
age INT(65),
height DECIMAL(4,1),
weight DECIMAL(4,1),
bmi DECIMAL(4,1),
status VARCHAR(255) NOT NULL,
conditions VARCHAR(255) NOT NULL,
activity VARCHAR(255) NOT NULL,
recommended_calorie_intake DECIMAL(7,2)
)";
if (mysqli_query($conn, $sql2)) {
    echo "<h1>Table users created successfully</h1><br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
?>

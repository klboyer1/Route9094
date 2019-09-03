<?php
/*
 * Connect to the database
 */
$dbhost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbData = "route9094";


$Conn = mysqli_connect($dbhost, $dbUser, $dbPass, $dbData);
if (mysqli_connect_errno()) {
    echo "<h2>Failed to connect to MySQL: (" . mysqli_connect_errno() . ") " . mysqli_connect_error() . "</h2>";
} else {
  //  echo "Connection Established" . "\n";
}
?>
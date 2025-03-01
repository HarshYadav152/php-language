<?php
    echo "Connecting to MySQL database";
    // how to connect to MySQL
    // 1. MySQLi extension
    // 2. PDO (php data object)

$servername = "localhost";
$username = "root";
$password = "k";

// connection object 
$conn = mysqli_connect($servername,$username,$password);

// Die if connection was not successfull
if(!$conn){// if it fails then die() quit programm
    die("Sorry we unable to connect ".mysqli_connect_error());
}
echo "<br>Connection was successfull";

?>
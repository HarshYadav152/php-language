<?php
echo "Creating db table in MySQL";

// first create connection 

// MySQL credentials
$servername = "localhost";
$username = "root";
$password = "";
$database = "tutorial"; // first create this database

// connection object 
$conn = mysqli_connect($servername,$username,$password,$database);

// Die if connection was not successfull
if(!$conn){// if it fails then die() quit programm
    die("Sorry we unable to connect ".mysqli_connect_error());
}

echo "<br/>Successfull connection to MySQL";

// $sql = "CREATE DATABASE tutorial";
// mysqli_query($conn,$sql);

// create a table

$table = "CREATE TABLE `emp`(`sno` INT(3) NOT NULL AUTO_INCREMENT,`name` VARCHAR(20),PRIMARY KEY (`sno`))";
$result = mysqli_query($conn,$table);

// check for the table creation
if($result){
    echo "<br/>Table created successfully";
}else{
    echo "table not created ".mysqli_error($conn);
}

?>
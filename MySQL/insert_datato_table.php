<?php

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

$name = "Dynamic name";

$insert = "INSERT INTO `emp` (`name`) VALUES ('$name')";
$result = mysqli_query($conn,$insert);

// check for insert operation
if($result){
    echo "Data inserted.";
}else{
    echo "Record not inserted ".mysqli_error($conn);
}

?>
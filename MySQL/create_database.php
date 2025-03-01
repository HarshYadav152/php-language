<?php

$servername = "localhost";
$username = "root";
$password = "";

// connection object 
$conn = mysqli_connect($servername,$username,$password);

// Die if connection was not successfull
if(!$conn){// if it fails then die() quit programm
    die("Sorry we unable to connect ".mysqli_connect_error());
}


// create a db 
// $sql = "CREATE DATABASE lms"; // any query of the sql
$sql = "DROP DATABASE lms";
$result = mysqli_query($conn,$sql); // execute the SQL query
// echo $result."<br>"; // return 1 for success 0 for failure

if($result){
    echo "<br>DB created successfully";
}
else{
    echo "<br>Failed to connect --> ".mysqli_error($conn);
}
echo "Successfull";

?>
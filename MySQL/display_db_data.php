<?php

// MySQL credentials
$servername = "localhost";
$username = "root";
$password = "";
$database = "contact"; // first create this database

// connection object 
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successfull
if (!$conn) { // if it fails then die() quit programm
    die("Sorry we unable to connect " . mysqli_connect_error());
}

$select = "SELECT * FROM `data`";
$result = mysqli_query($conn, $select);

// find the number of rows return by the query
$rows = mysqli_num_rows($result);

// display returned data
if ($rows > 0) {
    // $data = mysqli_fetch_assoc($result); // this function fetch record from the table untill it finish
    // return associatiave array where last element pointing to the next row
    // echo $data;

    // simple ways
    // {

    //     // 1--> first row
    //     $data = mysqli_fetch_assoc($result);   // this return the table record in the form of array and point to the next row in the table
    //     echo var_dump($data);
    //     echo "<br/>";

    //     // 2--> second row 
    //     // it will print the array containing next record 
    //     $data = mysqli_fetch_assoc($result);   // this return the table record in the form of array and point to the next row in the table
    //     echo var_dump($data);
    //     echo "<br/>";
    //     // 3
    //     $data = mysqli_fetch_assoc($result);   // this return the table record in the form of array and point to the next row in the table
    //     echo var_dump($data);
    //     echo "<br/>";
    //     // 4
    //     $data = mysqli_fetch_assoc($result);   // this return the table record in the form of array and point to the next row in the table
    //     echo var_dump($data);
    //     echo "<br/>";
    //     // 5
    //     $data = mysqli_fetch_assoc($result);   // this return the table record in the form of array and point to the next row in the table
    //     echo var_dump($data);
    //     echo "<br/>";
    //     // 6
    //     $data = mysqli_fetch_assoc($result);   // this return the table record in the form of array and point to the next row in the table
    //     echo var_dump($data);
    //     echo "<br/>";
    //     // 7
    //     $data = mysqli_fetch_assoc($result);   // this return the table record in the form of array and point to the next row in the table
    //     echo var_dump($data);
    //     echo "<br/>";
    //     // 8 here above line print the last row in form of array. so this time it will print the NULL
    //     $data = mysqli_fetch_assoc($result);   // this return the table record in the form of array and point to the next row in the table
    //     echo var_dump($data);
    //     echo "<br/>";
    // }

    // It can be done in better way using while loop
    // because mysqli_fetch_assoc($result) // it will return the NULL untill all rows return 

    while ($row = mysqli_fetch_assoc($result)) {
        // echo var_dump($row);
        
        // iterating $row array using for loop
        echo "Hello ".$row['name']." has email ".$row['email']." and password ".$row['pasword']." with dob ".$row['dob'];
        echo "<br/>";
    }
}
// for($i = 0;$i<= $rows;$i++){
//     echo 
// }

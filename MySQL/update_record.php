<?php

    // updates data into the database 

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

    echo "Connection established :: <br/> Update record";

    $update = "UPDATE `data` SET `name` = 'Harsh' WHERE `name` = 'Harsh Yadav'";
    $result = mysqli_query($conn,$update);

    // $updated_result = 
    if($result){   
        echo "<br/>Record updated successfully";
    }
    else{
        echo "<br/>Not updated";
    }
?>
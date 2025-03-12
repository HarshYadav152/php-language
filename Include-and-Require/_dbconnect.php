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
    echo "<br>Connection was successfull";    
?>
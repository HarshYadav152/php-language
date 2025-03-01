<?php
    session_start(); // start session

    $_SESSION['name'] = "Hello PS";// store session data

    echo "retrive data : ".$_SESSION["name"];
    
    session_reset();
    echo "retrive data : ".$_SESSION["name"];
?>
<?php
    // start session and get the data
    session_start();

    if(isset($_SESSION['username'])){
        echo "Welcome ".$_SESSION['username'];  // these session variable persist between the different pages within the same domain
    // because _SESSION IS THE superglobal vaiable  
    }
    else{
        echo "Session destroy login to continue";
    }

    
?>
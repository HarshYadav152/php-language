<?php

    // setcookie() valid for 1day
    setcookie("name","Harsh",time()+86400,"/");

    // retrive cookie value
    if(isset($_COOKIE["name"])){
        echo "Welcome ".$_COOKIE["name"];
    }

?>
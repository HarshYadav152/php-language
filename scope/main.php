<?php
    echo "Local and Global variable\n";

    $global = 10;// global variable 
    // in php scope of variable is only outside of the any function
    function hello(){
        // scope of the local variable is within the function is created
        // $local = 19;//local variable  
        global $global; // it will give the access of the global variable to the hello() function
        // $global = 90; // it will change the global variable permanently
        echo $global;// it can't access this     
        // if you want to access the global variable then use global keyword
        // echo "\n".$local;// it can access this only    
        
        // global variable inside function can also be used using $_GLOBALS
        echo "Acesssed without declaring it global ".$GLOBALS['global']."\n";
    }

    hello();
    echo "\nChanged ".$global."\n"; // we can also change the globally declared variable

// echo "\n".var_dump($GLOBALS); // print all the global variable stored in this which are used in the program


?>
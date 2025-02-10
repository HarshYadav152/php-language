<?php

$age = 18;
switch($age){
    case 18: // after matching this case it execute all remain cases
        echo "You are 18 year old.<br>";
        break; // so we use break to avoid unecessary to running all cases
    case 6:
        echo "You are 6 year old.";
        echo "<br>";
        break;
    case 56:
        echo "You are 56 year old.";
        echo "<br>";
        break;
    default:
        echo "your age is invalid.";  
        break; 
}
?>
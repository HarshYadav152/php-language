<?php

echo "foreach loop<br>";
$arr = array("Hello","India","welcome","back");

// using for loop we can iterate array
// for ($i=0; $i < count($arr); $i++) { 
//     # code...
//     echo"$arr[$i]<br>";
// }

// good approach for this
foreach ($arr as $value){ // using this we can access the individual element of the array and object so we access element of the array using $value
    # code...
    echo "$value<br>";
}

?>
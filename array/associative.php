<?php
// array is a collectio of items
echo "Associative array in php\n";

$arra = array('Hello','From','India');
echo $arra[0];
echo "\n";
// Associative array is also a colllection of items in key => value pair

// key can be string or integer
$favColour = array(
    "Harsh"=>"Blue", // now Harsh is now associated with Blue colour in key:value pair
    "Mohan"=>"Yellow",
    "Vijay"=>"Purple",
    4=>"Bhai"
);
print $favColour["Harsh"]; // we can access element of the associative array using key and access its associative value
print $favColour[4]; // also possible
print "\n";
// iterating over associative array
// foreach also iterate normal array/numeric array
foreach($favColour as $key => $value){
    echo "Favourite colour of $key is $value\n";
}
?>
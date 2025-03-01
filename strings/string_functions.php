<?php

$name = "Harsh Yadav";
echo "$name";
echo "<br>";
// basic string function in php
echo "The length of the string : " . strlen($name);

// strlen() calculate the length of the string
// and . is used for concatanation of the two string

echo "<br>";
echo str_word_count($name); // count the no. of words
    
echo "<br>";
echo "Reverse the string : ". strrev($name); // reverse the string 

echo "<br>";
echo "Used for finding the position of character r : ".strpos($name,"r"); // starting from 0 to n-1 [where n is the length of the string] { it return the index of the character }

echo "<br>";
echo "It replace the Harsh with Harish in Harsh Yadav : " . str_replace("Harsh","Harish",$name); // used for replace word in the string or character

echo "<br>";
echo str_repeat($name,2); // repeat the string no of times

echo "<br>";

echo "<pre>";
echo rtrim("     remove right tailing spaces       ");
echo "</pre>";

echo "<br>";

echo "<pre>";
echo ltrim("     remove left tailing spaces       ");
echo "</pre>";


// another method of  creating string

$input = <<<testHeredoc
Welcome to world of php.
Hello world.
testHeredoc;
echo "\n".$input;
?>
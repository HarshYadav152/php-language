<?php
$name = "prabhas"; 
echo var_dump($name);
echo "<br>";
// datatype is the type of data which can be store in the variable

/*
// all these same as in another language like c and c++
1. String --> sequence of character
2. Integer --> non decimal number
3. Float --> decimal numbers
4. Boolean --> 0 or 1 ( True and False)
5. Object
6. Array
7. NULL
 */


// variables can be overwritten 
// $booll = TRUE; // calculated as 1 means true
$booll = FALSE; // calculated as 0 means false
// echo doesnot print false
// so we use var_dump() for print variable value and datatype
echo var_dump($booll);

// object is a instance of class

// Array is used to store multiple values on a single variable

$arr = array("hello","shubham");
echo "<br>";
echo var_dump($arr);
// accessing ARRay element using its index start with 0
echo "<br>";
echo "Print the first element : $arr[0]";
echo "<br>";
echo "Print the first element : $arr[1]";

$kuch_nahi = NULL;
echo var_dump($kuch_nahi); // matlab kuch nahi 
?>

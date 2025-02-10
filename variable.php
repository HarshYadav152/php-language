<?php
echo "Today we learn variables in php<br>"; // php is not case sensitive

// php is a loosely typed language
// it autamatically knows datatype of the variable
// variable are containers to store information 
$name = "Harish";
$Name = "kumar"; // variable are is case sensitive
$income = 2000;

echo "Name is : $name and income is $income <br>";
echo "$Name is a good man <br>";

$floating = 23.6;
echo"$floating can be in decimal" ; // just like other language

echo "<br> <h2>Rule for php variable</h2>";
echo "<ul>
    <li>Must start with $ symbol</li>
    <li>Cannot start with number 1var is invalid</li>
    <li>Must start with a letter or a underscore _</li>
    <li>Can only contain alphanumeric and _</li>
    <li>variable name are case sensitive var and Var are different.</li>
</ul>";

$var = 2; echo"variable is $var";
// $var% = 2; echo"variable is $var%"; // special character not allowed

?>
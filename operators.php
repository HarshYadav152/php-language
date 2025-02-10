<?php
echo "Operators in php";
// like other languages there are many operators

// 1. Arithmetic operators (+,-,*,/,%)
$a = 1;
$b = 3;

$c = $a+$b;
echo $c;

// 2. Assignment operators (=,+=,-=,*=,/=)
$e = 3;
// $e += 6;
// $e -= 6;
$e *= 6;
// $e /= 6;
echo "<br>";
echo $e;
// 3. Comparison operators (==,>,<,<=,>=)

echo "<br>";
$var1 = 5;
$var2 = 6;
echo $var1 <> $var2;

// 4. Logical operators (&&, ||, !) 

echo "<br>";
$x = true;
$y = false;
// echo "Logical Operator : ". ($x or $y);
// echo "Logical Operator : ". ($x || $y);
echo "Logical Operator : ". (!$y);

?>
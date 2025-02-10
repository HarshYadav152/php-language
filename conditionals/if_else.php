<?php
echo "Hello If else conditionals";

$var1 = 1;
$var2 = 2;

echo "<br>";
$age = 9;
if($age > 18){
    echo "You can vote";
}
elseif($age < 18){
    echo "you can't vote";
}
else{
    echo"your age is not valid";
}
?>
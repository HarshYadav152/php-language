<?php

print "Functions in php\n"; # this is a construct language which means no parenthesis required whule it is a function
// function is a line of code which perform specific task and we have to again again do this in our code hence function in php which can be call anywhere in the program 

function func($arr){
    $sum = 0;
    foreach ($arr as $value) {
        $sum += $value;
    }
    return $sum;
}

$marks = [1,2,3,4,5];
echo "Total marks ".func($marks); // now we can use func in anywhere in the code without actual defination of the function rather we use function call
echo "\n";
echo "avarage ".(func($marks))/count($marks);

?>
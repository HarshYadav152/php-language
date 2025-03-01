<?php
echo "call by reference\n";
// here address of the vaariable passed to the function similarly c c++
function incr(&$i){
    $i++;
}
$i = 9;
incr($i);
echo $i; // it print 10 which means it change the value by reference
?>
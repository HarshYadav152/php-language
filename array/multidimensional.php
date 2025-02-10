<?php
echo "multi dimensional array";
echo "\n";
// array inside array
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6)
);
// echo var_dump($matrix);
//accessing item in the multidimension array simarly in c or c++

echo $matrix[0]; // give a array(1,2,3)
echo "\n";
// echo $matrix[1][0]; // give 1

// iterating over the array
for ($i = 0; $i < count($matrix); $i++) { // level 1 for loop
    // $matrix[$i] // give the array inside this
    for ($j = 0; $j < count($matrix[$i]); $j++) { // 
        // echo $matrix[$i][$j];
        // echo " ";
    }
    echo "\n";
}

// 3d array
$three = array(
    array(
        array(1, 2, 3),
        array(4, 5, 6)
    ),
    array(
        array(0, 0, 0),
        array(9, 9, 9)
    ),
    array(
        array(8, 8, 8),
        array(7, 7, 7)
    )
);

for ($i = 0; $i < count($three); $i++) {
    echo var_dump($three);
    // for ($j = 0; $j < count($three[$i]); $j++) {
    //     for ($k = 0; $k < count($three[$j]); $k++) {
    //         echo $three[$i][$j][$j];
    //     }
    //     echo "\n";
    // }
}

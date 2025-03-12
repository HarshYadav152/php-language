<?php

    $fptr = fopen("myfile.txt","r");
    // fgets() read file line by line
    // initially $fptr points the beginning of the file
    // echo fgets($fptr); // read a single line and take the file pointer to the next line
    // echo fgets($fptr); // in this case it will prnt second line
    // echo fgets($fptr); // will be empty
    
    // $a;
    // while($a = fgets($fptr)){
    //     echo $a;
    // }
    
    // echo "<br/>End of the file has been reached.";
    
    // fgetc() read file character by character
    // initially $fptr points the beginning of the file
    // after running fgetc() it file pointer points to the next character
    echo fgetc($fptr); // it read one character at a time
    echo fgetc($fptr); // now read 2nd character
    
    // we also use while 
    $a;
    while($a = fgetc($fptr)){
        echo $a;
    }
    echo "<br/>End of the file has been reached.";

    // after working with file please close all files open 
    fclose($fptr);

?>
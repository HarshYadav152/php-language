<?php

// fopen() return file pointer pointing to that file if file exist else it return false 
$fptr = fopen("myfile.txt","r"); // return file pointer

// $fptr2 = fopen("myfilee.txt","r"); // return false
// echo var_dump($fptr2);

if(!$fptr){
    die("Unable to open this file Please enter a valid file");
}else{
    echo "Successfull to open";
}

$file_size = filesize("myfile.txt"); // this will return the total size of the file total character
$content = fread($fptr,$file_size); // read the content of the file upto the specified length
echo "<br/>".$content;

fclose($fptr);// close file and free resourses
echo "<br/>Modes for opening files."
/**
 * these place the file pointer to the beginning of the file (all of these)
 * r -> open file with read only mode 

 * r+ -> open file with read and write both and move the file pointer to the beginning of the file.

 * w -> open file with read only mode. It attempt to create file if does not exist.
 
 * w+ -> open file with read and write both and move the file pointer to the beginning of the file and truncate the file length 0. It attempt to create file if does not exist
 
 * a -> open file with write only mode (and place the file pointer at the end of the file). It attempt to create file if does not exist. In this fseek() has no effect write are always appended
 
 * a -> open file with read and write mode (and place the file pointer at the end of the file). It attempt to create file if does not exist. In this fseek() has no effect on write are always appended in the and but fseek() affect on reading file
 */
?>
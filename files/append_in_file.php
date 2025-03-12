<?php
echo "appending to the file.";

$fptr = fopen("append.txt","a");
fwrite($fptr,"this is appende"); // will append text to the end of the file
// after this it take the pointer to the end of the file

fclose($fptr);
?>
<?php
echo "write operation in files using mode w and w+.";
$fptr = fopen("writeFile.txt","w"); // w specifies that open file in write mode which means when file not exist create it

// fwrite($fptr,"This the content write in the through the program");// this content written in the file 
// fwrite($fptr,"override");// it will override this
// it will overwrite the any orevious content of the file
fclose($fptr);

?> 
<?php

echo "Welcome to write files in php";

// $fptr = fopen("myfile2.txt","w");
// fwrite($fptr,"This is the best file on this planet. Please don't aruge with me on this one.\n");
// fwrite($fptr,"This is another contnent.\n");
// fwrite($fptr,"This is another contnent.\n");
// fclose($fptr);


//Appending to a file in php
$fptr = fopen("myfile2.txt","a");
fwrite($fptr,"This is being appended to the file\n");
fclose($fptr);


?>
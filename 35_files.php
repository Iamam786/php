<?php
    $fptr = fopen("myfile.txt","r");
// echo $fptr;
// echo var_dump($fptr);
if (!$fptr) {
    die("Unable to the open the file"); // jab file nahi rahega ya namea galata hoga tab ye run hoga;
}

// $content = fread($fptr,3);
$content = fread($fptr,filesize('myfile.txt'));
echo $content;
fclose($fptr);
?>
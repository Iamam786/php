<?php

  $fptr = fopen("myfile.txt","r");

//   echo fgets($fptr);
//   echo fgets($fptr);
//   echo fgets($fptr);
//   echo var_dump(fgets($fptr));


/*
//Reading a file line by line
  while($a = fgets($fptr)){
    echo $a;
  }
  echo "<br>end of the file has been reached";
*/

//   echo fgets($fptr);

/*
  //Reading a file character by line
  while ($a = fgets($fptr)) {
    echo $a;
// break;
  }
  echo "End of the file has been reached";
 
*/

 //Write a Program which reads the content of a file untill . has been encountered

  while ($a= fgetc($fptr)) {
   echo $a;
   if ($a=="r") {
   break;
   }
  }
  fclose($fptr)
?>
<?php

// include '_dbconnect.php';
require '_dbconnect.php';

$sql = "SELECT * FROM `trip`";
$result = mysqli_query($con,$sql);

//Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the db<br>";
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['sno'].". Hello ".$row['name']." Welcome to ".$row['dest'];
    echo "<br>";
}
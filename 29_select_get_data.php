<?php

//Connected to database
$server = "localhost";
$username = "root";
$password = "";
$database="dbabdul";

//Create a connection
$con = mysqli_connect($server, $username, $password,$database);


//Die if Connection was not successful
if (!$con) {
    die("connection to this database failed due to" . mysqli_connect_error());
} else {

    echo "Success connecting to the db<br>";
}

$sql = "SELECT * FROM `trip`";

$result = mysqli_query($con,$sql);;

//Find the number of records returned
$num =  mysqli_num_rows($result);
echo "$num ";
echo "record found";
echo "<br>";
// Display the rows returned by the sql query
if($num>0){
    // $row = mysqli_fetch_assoc($result); // Single row ke liye
    // echo var_dump($row);
    // echo "<br>";
    // echo "<br>";
    // $row = mysqli_fetch_all($result); // All row ke liye
    // echo var_dump($row);

    //we can fetch in a better way using the while loop
    while ($row = mysqli_fetch_assoc($result)) {
    //    echo var_dump($row);
    echo $row['sno'] . " Hello ". $row['name']." Welcome to  ". $row['dest'];
       echo "<br>";
    }
}
?>
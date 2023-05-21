<?php
//Connected to database
$server = "localhost";
$username = "root";
$password = "";
$database = "dbAbdul";

//Create a connection
$con = mysqli_connect($server, $username, $password, $database);
//Die if Connection was not successful
if (!$con) {
    die("connection to this database failed due to" . mysqli_connect_error());
} else {

    echo "Success connecting to the db<br>";
}

$name = 'Raees Bhai';
$destination = "Banglore";
//sql query to be executed
$sql = "INSERT INTO `trip` (`name`, `dest`) VALUES ('$name', '$destination')";

$result = mysqli_query($con, $sql);
//Add a new trip to the Trip table in the db
if ($result) {
    echo "The record has been inserted  succefully....<br>";
} else {
    echo "The record has not been inserted succefully...>" . mysqli_error($con);
}
?>



<?php
//Connected to database
$server = "localhost";
$username = "root";
$password = "";
$database = "dbabdul";

//Create a connection
$con = mysqli_connect($server, $username, $password, $database);


//Die if Connection was not successful
if (!$con) {
    die("connection to this database failed due to" . mysqli_connect_error());
} else {

    echo "Success connecting to the db(dbconnect)<br>";
}
?>
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

    echo "Success connecting to the db<br>";
}

$sql = "DELETE FROM `trip` WHERE `dest`='Odisha' LIMIT 3";
$result = mysqli_query($con, $sql);
$aff = mysqli_affected_rows($con);
echo "<br>Number of affected rows:$aff<br>";
if($result){
    echo "Delete Successfullly...";
} else{
    $err  = mysqli_error($con);
    echo "Not Delete successfullly due to this errror --> $err";
}
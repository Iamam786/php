<?php

// if (isset($_POST['name'])) {
//     $server = "localhost";
//     $username = "root";
//     $password = "";
// }

//Connected to database
$server = "localhost";
$username = "root";
$password = "";

//Create a connection
$con = mysqli_connect($server, $username, $password);

//Die if Connection was not successful
if (!$con) {
    die("connection to this database failed due to" . mysqli_connect_error());
} else {

    echo "Success connecting to the db<br>";
}


//Create a db
$sql = "CREATE DATABASE dbZigra";
// mysqli_query($con, $sql);
$result = mysqli_query($con, $sql);

//Check for Create database
if ($result) {
    echo "The db was created succefully...<br>";
} else {
    echo "The db was not created succefully...>". mysqli_error($con);
   
}


// $name = $_POST['name'];
// $gender = $_POST['gender'];
// $age = $_POST['age'];
// $email = $_POST['email'];
// $phone = $_POST['phone'];
// $desc = $_POST['desc'];


// $sql =  "INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `desc`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";

// echo $sql;

// if ($con->query($sql) == true) {
//     echo "Successfully inserted";
// }

?>
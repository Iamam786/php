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

$sql = "SELECT * FROM `trip` WHERE `dest`='Odisha'";
$result = mysqli_query($con,$sql);
//Usage of where clause to fetch data from the db
$num = mysqli_num_rows($result);

echo $num . " records found in the db<br>";
$no=1;
if($num>0){
    while ($row = mysqli_fetch_assoc($result)) {
       echo $no . " Hello ". $row['name']." Welcom to ". $row['dest'];
       echo "<br>";
       $no = $no +1;
    }
}

//Usage of Where Clause to Update Data
$sql = "UPDATE `trip` SET `name`='waqar Imam' WHERE `sno`=4";

$result = mysqli_query($con,$sql);
echo $result."<br>";

echo var_dump($result); //true or false return karta hai;
$aff = mysqli_affected_rows($con);
echo "<br>Number of Affected rows: $aff";

if ($result) {
    echo "<br>We update the record Successfully...";
} else {
    echo "We could not update the record Successfully...";
 
}

<?php

    if (isset($_POST['name'])) {
        $server = "localhost";
        $username = "root";
        $password = "";
    }

    // $server = "localhost";
    //     $username = "root";
    //     $password = "";

    $con = mysqli_connect($server,$username,$password);
    if (!$con) {
        die("connection to this database failed due to". mysqli_connect_error());

    } else{
       
        echo "Success connecting to the db";
    }

    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $desc=$_POST['desc'];
    

    $sql =  "INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `desc`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";

    echo $sql;

    if ($con->query($sql)==true) {
       echo "Successfully inserted";
    }

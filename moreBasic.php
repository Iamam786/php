<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP Tutorial</title>
    <style>
        * {
            box-sizing: border-box;
        }

        .container {
            max-width: 80%;
            background-color: grey;
            margin: auto;
            padding: 5px;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">

        <h1>Let's Learn about php</h1>
        <p>Your Party status is here:</p>
        <?php
        $age = 34;
        if ($age > 18) {
            echo "You Can go to party";
        } else {
            echo "You can not go to party";
        }
        ?>
        <h1>Array is collection of similiar data types</h1>
        <?php
        $lang = array("python", "C++", "php");
        // echo count($lang);
        // echo $lang[0];

        //loops in php
        $a = 0;
        while ($a <= 10) {
            echo "<br>The value of a is: ";
            echo $a;
            $a++;
        }
        // Iterating arrays in php

        $a = 0;
        while ($a < count($lang)) {
            echo "<br>The value of language is: ";
            echo $lang[$a];
            $a++;
        }

        // Do while loop
        $a = 0;
        do{
            echo "<br>The value of do while loop is: ";
            echo $a;
            $a++;
        } while ($a < 10) ;

        // for loop
        for ($a=0; $a < 10; $a++) { 
            echo "<br>The value of for loop is: ";
            echo $a;
        }
        // Array Itretion in for loop
        for ($a=0; $a < count($lang); $a++) { 
            echo "<br>The value of for loop is: ";
            echo $lang[$a];
        }
        // Foreach LOop
        foreach ($lang as $value ){
            echo "<br>The value of foreach loop is: ";
            echo $value;
        }
        // Function
        function print5(){
            echo "<br>Five";
        }
        print5();

        function print_number($number){
            echo "<br>Your number is: ";
            echo $number;
        }
        print_number(45);
        print_number(47);
        print_number(49);
        




        ?>
    </div>
</body>

</html>
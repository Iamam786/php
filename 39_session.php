<?php
//What is a session?
//Used to manage information across fifference pages

//Verify the user login info
session_start();

$_SESSION['username'] = "abdul";
$_SESSION['favCat'] = 'Books';
echo  "We have saved your session";

?>
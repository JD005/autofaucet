<?php

// Database Configuration

$dbHost = "https://autofaucet.herokuapp.com/";
$dbUser = "id3513164_jd";
$dbPW = "123456";
$dbName = "localhost";

// Establish connection

$mysqli = mysqli_connect($dbHost, $dbUser, $dbPW, $dbName);

// Check connection
if(mysqli_connect_errno()){
 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Website

$Website_Url = "";

?>
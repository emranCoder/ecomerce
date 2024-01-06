<?php

session_start();  //any place using this file. 
$dbHost = 'localhost';
$dbName = 'mydb';
$dbUsername = 'root';
$dbPassword = '';
$dbConnect = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);

?>
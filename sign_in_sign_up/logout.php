<?php 
require_once("config.php"); //connection file
session_destroy(); //check session
header("location:login.php"); // go to login file
?>
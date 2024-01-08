<?php
require_once("config.php");

if(isset($_GET['username']))
{
    $username=$_GET['username'];
    $deleteQuery = "DELETE FROM `users` WHERE `email`='$username'";
    $res = mysqli_query($dbConnect,$deleteQuery);
}
header('Location: login.php?true');
?>
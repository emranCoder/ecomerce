<?php

session_start();

if(isset($_SESSION['products']))
{
    $postData= $_SESSION['products'] +$_POST['data'] ;
}else
{
    $postData = $_POST['data'];
}
if(isset($_GET['now'])&& isset($_GET['id']))
{
    $postData = array($_GET['id']);
}

$_SESSION['products'] = $postData;
$_SESSION['NumberOfProducts'] = count($postData);

header('Location: ../cart.php');

?>

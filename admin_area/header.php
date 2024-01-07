<?php
session_start();
include('../includes/connect.php');

if(!(isset($_SESSION["admin_id"]) && isset($_SESSION["admin_name"])))
{
    header("location: login.php?login=false");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert products-Admin Dashboad</title>
    <!--bootstrape CSS ling-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!--font awesome link-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--CSS file-->
    <link rel="stylesheet" href="../style.css">
</head>
        <!--first child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info mb-5">
            <div class="container-fluid">
        <img  width='50px' src="../images/logo.jpg" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                         <li class="nav-item">
                        <a href="index.php" class="nav-link">Welcome <?php echo $_SESSION['admin_name']?></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
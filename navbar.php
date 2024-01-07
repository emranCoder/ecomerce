<?php
include('includes/connect.php');

include('functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banglar_Rong</title>

    <!--bootstrape CSS ling-->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!--font awesome link-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--CSS file-->
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
     <!--navbar-->
     <div class="container-fluid p-0 ">
         <!--first child-->
         <nav class="navbar sticky-top bg-light navbar-expand-lg navbar-light border-bottom border-warning px-5">
  <div class="container-fluid">
  <a href="index.php">
  <img src="./images/logo.jpg" width='50px' alt="" class="logo">
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto align-item-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="product_design/index.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="special.php">Spacial Offers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="all-jobs.php">Career</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link cart-now" href='cart.php'><i class="fa-sharp fa-solid fa-cart-shopping"></i><sup class='cart-value'>
            <?php 
        session_start();
        $numberOfProducts=0;
        if(isset($_SESSION['NumberOfProducts'])){
          $numberOfProducts= $_SESSION['NumberOfProducts'];
        }
        echo $numberOfProducts;
        ?></sup></a>
        </li>
        

      </ul>
      <?php if(!isset($_SESSION["name"])){
        
        ?>
              <a class="btn btn btn-warning rounded" href="sign_in_sign_up/login.php">Login/Registration</a>
        <?php 
      }else{
        ?>
        <li class="navbar-nav nav-item">
          <a class="nav-link text-dark" href="#">Total price: <?php if(isset($_SESSION['products'])) price();else  echo 0;?>$</a>
        </li>
        <?php
      }
        ?>

    </div>
  </div>
</nav>
<!--Second child-->
<?php
if(isset($_SESSION['login_email']))
{
  ?>

<nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <ul class="navbar-nav me-auto">
        <li class="nav-item dropdown" >
          <a class="nav-link  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" href="#">Welcome<?php if(isset($_SESSION["name"])){echo '-'.$_SESSION["name"];}?></a>
          <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="user-profile.php">Profile</a></li>
    <li><a class="dropdown-item" href="change-pwd.php">Setting</a></li>
    <li><a class="dropdown-item" href="session/destroySession.php?true=tt">Log Out</a></li>
  </ul>
        </li>  
        <li class="nav-item">
        <a class="nav-link" href="order-history.php">Order History</a>
        </li>
        </ul>
    </nav>


    <?php
}?>

    <!--third child-->
    <div class="bg-light my-4">
        <h3 class="text-center">Banglar_Rong_2.0</h3>
        <p class="text-center">Dress and saree Yourself in Brand</p>
    </div>

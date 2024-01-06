
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
         <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom border-warning px-5">
  <div class="container-fluid">
  <a href="../index.php">
  <img  src="../images/logo.jpg" alt="" width='50px'>
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../product_design/index.php">Products</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link cart-now" href='../cart.php'><i class="fa-sharp fa-solid fa-cart-shopping"></i><sup class='cart-value'>
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
              <a class="btn btn btn-warning rounded" href="login.php">Login/Registration</a>
    </div>
  </div>
</nav>

  <div class="container">
    <div class="row">
    <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
          <div class="login_form">
            <?php
            if(isset($_GET['loginerror']))
            {
              $loginerror = $_GET['loginerror'];
            }
            if(!empty($loginerror))
            {
              echo '<p class="errmsg">Invalid login credentials, please try again...</p>';
            }
            ?>
        <form action="login_process.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Username or Email</label>
    <input type="text" name="login_var" value="<?php if(!empty($loginerror)){echo $loginerror;}?>" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control">
  </div>
  <button type="submit" name="sublogin" class="btn btn-primary form_btn my-2">Login</button>
</form>

<p style="font-size: 12px; text-align:center; margin-top: 10px;"><a href="
forgot-password.php" style="color: #00376b;"> Forgot Password? </a> </p>
<br>
<p class='text-center'>Don't have an account? <a class='text-dark' href="signup.php">Sign up</a> </p>
</div>

        </div>
        <div class="col-sm-4">
        </div>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
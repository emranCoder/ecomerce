
<?php
   require_once("config.php");

if((isset($_GET['username'])&& isset($_GET['otp']) && $_GET['otp']=='true')||isset($_POST['otpCheck'])){

    if(isset($_POST['otpCheck'])){
        $username = $_POST['username'];
        $otpCode = $_POST['otpCode'];
        
        $checkQuery = "SELECT `verify_code` FROM `users` WHERE `email`='$username'";
        $res = mysqli_query($dbConnect,$checkQuery);
        if( $res){
            $row = mysqli_fetch_assoc($res);
            if($otpCode==$row['verify_code']){
                $insertQuery = "UPDATE `users` SET `verify`=1 WHERE `email`='$username'";
                $result = mysqli_query($dbConnect, $insertQuery);
                if($result)
                {
                    header("location:login.php?true");
                }else
                {
                    header('Location: delete-user.php?username='.$username);
                }

            }else
            {
                header('Location: delete-user.php?username='.$username);
            }

        }else
        {
            header('Location: delete-user.php?username='.$username);
        }
        
       

    }


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
        <form action="otp-send.php" method="POST">
  <div class="form-group">
<h3 class='text-center my-2 mb-3'>Put Your OTP </h3>
    <input onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" name="otpCode" placeholder="OTP" class="form-control text-center">
    <input type="text" value='<?php echo $_GET['username']?>' name='username' hidden>
  <button type="submit" name="otpCheck" class="btn btn-primary form_btn my-3">SUBMIT</button>
</form>

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
<?php 

}else
{
    header('Location: signup.php?false');
}

?>
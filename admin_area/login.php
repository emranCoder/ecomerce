<?php
include('../includes/connect.php');
session_start();
if(isset($_POST['sublogin']))
{
$username= $_POST['username'];
$password= $_POST['password'];
$query = "select * from `admin` where (username='$username' OR email='$username')";
$res = mysqli_query($con,$query); 
$numRows = mysqli_num_rows($res);
if($numRows==1) 
{
    $row = mysqli_fetch_assoc($res);  // fetch database
    if(password_verify($password,$row['password']))
    {
        $_SESSION["login_sess"]="1";  //login session set 1
        $_SESSION["admin_id"]=$row['admin_id'];
        $_SESSION["admin_name"]=$row['fName'];

        header("location: index.php");
    }
    else{
        header("location: login.php?loginerror=".$username);
    }
}
else{
    header("location: login.php?loginerror=".$username);
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
<body class="bg-dark">
     <!--navbar-->
     <div class="container-fluid p-0 pb-5">
  
  <div class="container mt-5">
        <!--third child-->
        <div class="text-light my-4">
        <h3 class="text-center">Banglar_Rong_2.0</h3>
        <p class="text-center">Dress and saree Yourself in Brand</p>
    </div>

    <div class="row">
    <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
          <div class="login_form mt-5 p-4 shadow rounded border text-center bg-warning">
            <?php
            if(isset($_GET['loginerror']))
            {
              $loginerror = $_GET['loginerror'];
            }
            if(!empty($loginerror))
            {
              echo '<p class="text-danger bg-light rounded ">Invalid login credentials, please try again...</p>';
            }
            ?>
        <form action="login.php" method="POST">
          <h3>Admin Login</h3>
  <div class="form-group">

    <input type="text" name="username" class="form-control mt-3" placeholder="Username" required>
  </div>
  <div class="form-group">

    <input type="password" name="password" class="form-control mt-3" placeholder="Password" required>
  </div>
  <button type="submit" name="sublogin" class="btn btn-primary form_btn my-3">Login</button>
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
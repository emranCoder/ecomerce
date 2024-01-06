<?php
   require_once("config.php");

   if(isset($_POST['sublogin']))
   {
    $login = $_POST['login_var'];
    $password = $_POST['password'];
    $query = "select * from users where (username='$login' OR email='$login')"; // available lognin or email
    $res = mysqli_query($dbConnect,$query); // database 
    $numRows = mysqli_num_rows($res);
    if($numRows==1)  // if value is found go to the inside
    {
        $row = mysqli_fetch_assoc($res);  // fetch database
        if(password_verify($password,$row['password']))
        {
            $_SESSION["login_sess"]="1";  //login session set 1
            $_SESSION["login_email"]=$row['id'];
            $_SESSION["name"]=$row['fname'];
            header("location:../index.php");
        }
        else{
            header("location:login.php?loginerror=".$login);
        }
    }
    else{
        header("location:login.php?loginerror=".$login);
    }

   }
?>
<!DOCTYPE html>
<?php require_once("config.php"); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
      <div class="row">
<?php
if(isset($_POST['signup']))  
{                       
                        //if the click button then let`s go inside
    extract($_POST);    // extract function normal value variable o aibo
    if(strlen($fname)<3) // validetion
    {
        $error[] = 'Please enter first name using 3 characters atleast';
    }
    if(strlen($fname)>20)
    {
        $error[] = 'Please enter first name using max 20 characters';
    }
    if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/",$fname))
    {
        $error[] = 'Invalid entry first name. plz enter only letters----digit or special characters are not allowed';
    }

    if(strlen($lname)<3)
    {
        $error[] = 'Please enter last name using 3 characters atleast';
    }
    if(strlen($lname)>20)
    {
        $error[] = 'Please enter last name using max 20 characters';
    }
    if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/",$lname))
    {
        $error[] = 'Invalid entry last name. plz enter only letters----digit or special characters are not allowed';
    }

    if(strlen($username)<3)
    {
        $error[] = 'Please enter user name using 3 characters atleast';
    }
    if(strlen($username)>30)
    {
        $error[] = 'Please enter user name using max 30 characters';
    }
    if(!preg_match("/^^[^0-9][a-z0-9]+([_-]?[a-z0-9])*$/",$username))
    {
        $error[] = 'Invalid entry for user name. plz enter lower case letters without any space and no
        number at the start............';
    }

    if(strlen($email)>30)
    {
        $error[] = 'Please enter user name using max 30 characters';
    }


    /*   $emailPattern = "/^[a-zA-Z0-9-]{3,}@[a-zA-Z0-9_-]{3,}\.[a-zA-Z]{2,4}$/";
$_password_pattern = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/"; */
    
    if($passwordConfirm == '')
    {
        $error[] = 'plz confirm the password';
    }

    if($password != $passwordConfirm)
    {
        $error[] = 'Passwords do not match';
    }

    if(strlen($password)<5)
    {
        $error[] = 'Password must be 6 characters long';
    }

    if(strlen($password)>20)
    {
        $error[] = 'Password: Max length 20 characters not allowed';
    }

    // user available 

    $sql = "select * from users where (username='$username' or email='$email');";
    $res=mysqli_query($dbConnect,$sql);
    if(mysqli_num_rows($res)>0)
    {
        $row=mysqli_fetch_assoc($res);
        if($username==$row['username'])
        {
            $error[] = 'UserName already Exists!!!';
        }
        if($email==$row['email'])
        {
            $error[] = 'Email already Exists!!!';
        }
    }

    // password hash value human not readable

    if(!isset($error))
    {
        $options=array("cost"=>4);
        $password=password_hash($password,PASSWORD_BCRYPT,$options);

        $insertQuery = "INSERT into `users`(`fname`, `lname`, `username`, `email`, `password`) values('$fname','$lname','$username','$email','$password')";
        $result = mysqli_query($dbConnect, $insertQuery);

        if($result)
        {
            header('Location: ../send_email.php?username='.$username.'&email='.$email);
        }
        else
        {
            $error[] = 'Failed: something went wrong';
        }
    }



}
?>
        <div class="col-sm-4">

        <!-- display the error -->
            <?php
            if(isset($error))
            {
                foreach($error as $error)
                {
                    echo '<p class="errmsg">&#x26A0;'.$error.'</p>';  // worning code disply
                }
            }
            ?>
        </div>
        <div class="col-sm-4">

    <?php if(isset($done))
    { ?>
    <div class="successmsg"><span style="font-size:100px">&#9989;</span><br>
    You have registered successfully <br> <a href="login.php" style="color:#fff;">Login here </a></div>

    <?php } else {?>
        <div class="signup_form">
            <form action="" method="POST">
           
     <div class="form-group">
    <label class="label_txt">First Name</label><br>
    <input type="text" class="form-control" name="fname" value="<?php if(isset($error)){echo $fname;}?>" required="">   <!--not remove value -->
    </div>

    <div class="form-group">
    <label class="label_txt">Last Name</label><br>
    <input type="text" class="form-control" value="<?php if(isset($error)){echo $lname;}?>" name="lname" required="">
    </div>

    <div class="form-group">
    <label class="label_txt">UserName</label><br>
    <input type="text" class="form-control" name="username" value="<?php if(isset($error)){echo $username;}?>" required="">
    </div>

    <div class="form-group">
    <label class="label_txt">Email</label><br>
    <input type="email" class="form-control" name="email" value="<?php if(isset($error)){echo $email;}?>" required="">
    </div>

    <div class="form-group">
    <label class="label_txt">Password</label><br>
    <input type="password" class="form-control" name="password" required="">
    </div>

    <div class="form-group">
    <label class="label_txt">Confirm Password</label><br>
    <input type="password" class="form-control" name="passwordConfirm" required="">
    </div>

    <button type="submit" name="signup" class="btn btn-primary btn-group-lg form_btn">SignUp</button>
    <p>Have an account? <a href="login.php">Log in</a> </p>
    <?php } ?>
</form>
</div>
</div>
<div class="col-sm-4">
</div>
</div>
</div>
     
    
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>



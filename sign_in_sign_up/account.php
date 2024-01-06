<!DOCTYPE html>

    <!--session ar thouree a dada ke fache kora -->

<?php require_once("config.php");
if(!isset($_SESSION["login_sess"]))
{
    header("location:login.php");
}

$email=$_SESSION["login_email"];
$findresult=mysqli_query($dbConnect, "SELECT * FROM users WHERE email='$email'");
if($res=mysqli_fetch_array($findresult))
{
    $username = $res['username'];
    $fname = $res['fname'];
    $lname = $res['lname'];
    $email = $res['email'];
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6">
                    <div class="login_form">
                        <p><a href="logout.php"><span style="color:red; float:right;">Logout</span></a></p>
                        <p>Welcome! <span style="color:#33CC00"><?php echo $username; ?></span></p>
                        <table class="table">
                            <tr>
                                <th>First Name</th>
                                <td><?php echo $fname; ?></td>
                            </tr>
                            <tr>
                                <th>Last Name</th>
                                <td><?php echo $lname; ?></td>
                            </tr>
                            <tr>
                                <th>User Name</th>
                                <td><?php echo $username; ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><?php echo $email; ?></td>
                            </tr>
</table>

            </div>
            <div class="col-sm-3">
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    
</body>
</html>
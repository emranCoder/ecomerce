<?php
require('navbar.php');
if(isset($_SESSION['login_email']))
{
  $id = $_SESSION['login_email'];
  $query = "select * from users where id=$id ";
  $res = mysqli_query($con,$query); // database 
  $numRows = mysqli_num_rows($res);
  $row = mysqli_fetch_assoc($res); 

  $fName = $row['fname'];
  $lName = $row['lname'];
    if(isset($_POST['change']))
    {
     
  
    $password = $_POST['currentPwd'];
    $newPwd = $_POST['newPwd'];
    $conPwd = $_POST['conPwd'];
    if($newPwd===$conPwd )
    {
      if(password_verify($password,$row['password']))
      {
  
        $options=array("cost"=>4);
          $password=password_hash($conPwd,PASSWORD_BCRYPT,$options);
  
          $result = mysqli_query($con,"UPDATE `users`  SET `password`='$password' WHERE id=$id");
  
          if($result)
          {  
            header('Location: session/destroySession.php?true=tt');
           }
      }else
      {
        header('Location: change-pwd.php?current=false');
      }
    }else
    {
      header('Location: change-pwd.php?con=false');
    }
    }
   

?>
   <div class="container">
        <!--second child-->
        <div class="bg-light">
            <h3 class="text-center p-2">Change Password</h3>
        </div>
        <!--third child-->
        <div class="row my-2">
            <div class="col-md-3 p-1 d-flex align-items-center">
                <div class="p-3 me-5">
                    <a href="#"><img src="images/admin.png" alt="" class="admin_image"></a>
                    <p class="text-center my-2 fs-3 text-secondary"><?php echo $fName." ".$lName;?></p>
                </div>
            </div>
            <div class="col-md-9">
            <form method="POST" action="change-pwd.php?send=true">
  
<div class="row my-2">
                    <div class="col-md-4">  <div class="mb-3">
    <label for="onkeyPress" class="form-label">Current Password</label>
    <input type="password" name='currentPwd' class="form-control" id="onkeyPress" >
    <?php if(isset($_GET['current']) && $_GET['current']=='false'){
      echo " <div id='emailHelp' class='form-text text-danger'>Password Incorrect.</div>";
    }?>
  </div>
</div>
    <div class="col-md-4"> 
        <div class="mb-3">
    <label for="onkeyPress"  class="form-label">New Password</label>
    <input type="password"  name='newPwd'class="form-control" id="onkeyPress" required>
  </div>
</div>
<div class="col-md-4"> 
        <div class="mb-3">
    <label for="onkeyPress" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" name='conPwd' id="onkeyPress" required>
    <?php if(isset($_GET['con']) && $_GET['con']=='false'){
      echo " <div id='emailHelp' class='form-text text-danger'>Confirm Password not matched.</div>";
    }?>
    
  </div>
</div>
</div>

  <button type="submit" name='change' class="btn btn-primary disabled submitBTN">Submit</button>
</form>
            </div>
        </div>

        </div>


    


    
    <?php
}

else
{
  header('Location: sign_in_sign_up/login.php');
}
require('footer.php');
?>
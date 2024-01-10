<?php
require('header.php');
if(isset($_SESSION['admin_id']))
{
  $id = $_SESSION['admin_id'];
  $query = "SELECT * FROM admin WHERE `admin_id`=$id ";
  $res = mysqli_query($con,$query); // database 
  $numRows = mysqli_num_rows($res);
  $row = mysqli_fetch_assoc($res); 

  $fName = $row['fName'];
  $lName = $row['lName'];
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
  
          $result = mysqli_query($con,"UPDATE `admin`  SET `password`='$password' WHERE `admin_id`=$id");
  
          if($result)
          {  
            header('Location: destroySession.php?true=tt');
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
   <div class="container p-5 mb-5 bg-light rounded-lg border border-rounded shadow">
        <!--second child-->
        <div class="bg-light">
            <h3 class="text-center p-2">Change Password</h3>
        </div>
        <!--third child-->
        <div class="row my-2">
            <div class="col-md-3 p-1 d-flex align-items-center">
                <div class="p-3 me-5">
                    <a href="#"><img src="../images/admin.png" alt="" class="admin_image"></a>
                    <p class="text-center my-2 fs-5 text-secondary text-uppercase"><?php echo $fName." ".$lName;?></p>
                </div>
            </div>
            <div class="col-md-9">
            <form method="POST" action="change-pwd.php?send=true">
  
<div class="row my-2">
                    <div class="col-md-4">  <div class="mb-3">
    <label for="onkeyPress" class="form-label">Current Password</label>
    <input placeholder="Type here....." type="password" name='currentPwd' class="form-control" id="onkeyPress" >
    <?php if(isset($_GET['current']) && $_GET['current']=='false'){
      echo " <div id='emailHelp' class='form-text text-danger'>Password Incorrect.</div>";
    }?>
  </div>
</div>
    <div class="col-md-4"> 
        <div class="mb-3">
    <label for="onkeyPress"  class="form-label">New Password</label>
    <input placeholder="Type here....." type="password"  name='newPwd'class="form-control" id="onkeyPress" required>
  </div>
</div>
<div class="col-md-4"> 
        <div class="mb-3">
    <label for="onkeyPress" class="form-label">Confirm Password</label>
    <input placeholder="Type here....." type="password" class="form-control" name='conPwd' id="onkeyPress" required>
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
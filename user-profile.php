<?php
require('navbar.php');
if(isset($_SESSION['login_email']))
{
    $id = $_SESSION['login_email'];
    $query = "select * from users where id=$id ";
    $res = mysqli_query($con,$query); // database 
    $numRows = mysqli_num_rows($res);
    $row = mysqli_fetch_assoc($res);  // fetch database
   $fName =  $row['fname'];
   $lName =  $row['lname'];
   $email =  $row['email'];
   $addr =  $row['address'];
   $phone_no =  $row['phone_no'];

if(isset($_POST['userUpdate'])){
$fname = $_POST["fName"];
$lName = $_POST["lName"];
$addr = $_POST["addr"];
  
$result = mysqli_query($con,"UPDATE `users`  SET `fname`='$fname',`lname`='$lName',`address`='$addr' WHERE id=$id");

if($result)
{  
  header('Location: user-profile.php?update=true');
 }else
 {
  header('Location: user-profile.php?update=false');
 }



}



?>
   <div class="container">
        <!--second child-->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
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
            <form method='POST'  action='user-profile.php?true=true'>
                <div class="row">
                    <div class="col-md-6">  <div class="mb-3">
    <label for="fNameInput" class="form-label">First Name:</label>
    <input type="text" class="form-control" id="onkeyPress" aria-describedby="fname" name='fName' value="<?php echo $fName;?>">
  </div></div>
 <div class="col-md-6"> 
    <div class="mb-3">
    <label for="lastNameInput"  class="form-label">Last Name:</label>
    <input type="text" class="form-control" name='lName' id="onkeyPress" value="<?php echo $lName;?>">
  </div>
</div>
<div class="mb-3">
    <label for="exampleInputPassword1"  class="form-label">Email: </label>
    <input type="email" class="form-control" disabled id="onkeyPress" value="<?php echo $email;?>">
  </div>
<div class="mb-3 my-2">
<div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="onkeyPress" style="height: 100px" name="addr" ><?php echo $addr;?></textarea>
  <label for="floatingTextarea">Address</label>
</div>
  <button type="submit" name='userUpdate' class="btn btn-primary my-3">Submit</button>
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
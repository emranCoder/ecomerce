<?php
require('header.php');



if(isset($_GET['username']))
{
    $username=$_GET['username'];
    $deleteQuery = "DELETE FROM `users` WHERE `email`='$username'";
    $res = mysqli_query($con,$deleteQuery);
    if( $res)
    {

header('Location: users.php?true='.$username);
    }else
    {
      header('Location: users.php?false');
    }
    
}



?>


    <div class="container mt-3  mb-5 bg-light rounded-lg border border-rounded shadow">
    <?php 
if(isset($_GET['true'])){
  ?>
  <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
 User <span class='fw-bold'><?php echo $_GET['true'];?></span> has been delete.
 <a href='users.php' type="button" class="btn-close" ></a>
</div>
<?php 
}
?>

        <h1 class="text-center my-5">Non Verified Users</h1>

        <table class="table table-striped border">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">username</th>
      <th scope="col">email</th>
      <th scope="col">Date</th>
      <th scope="col" class='d-flex justify-content-around'>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php  
    date_default_timezone_set("Asia/Dhaka");
    global $con;
    $select_query = "SELECT * FROM `users` WHERE `verify`=0 AND  `date`<DATE_SUB(NOW(), INTERVAL 30 MINUTE)";
$result_query = mysqli_query($con, $select_query);
$no = 1;
while ($row = mysqli_fetch_assoc($result_query)) {
    $id = $row['id'];
    $username = $row['username'];
    $email = $row['email'];
    $lname = $row['lname'];
    $fname = $row['fname'];
    $timestamp = $row['date'];
    $timestamp = date("d/m/y",strtotime($timestamp));
    ?>

    <tr class='product-<?php echo $id;?>'>
      <th scope="row"><?php echo $no++;?></th>
      <td><?php echo $fname;?></td>
      <td><?php echo $lname;?></td>
      <td><?php echo $username;?></td>
      <td><?php echo $email;?></td>

      <td ><?php echo $timestamp;?></td>
      <td class='d-flex justify-content-around'><a href="users.php?username=<?php echo $email?>"><i class="bi bi-trash3-fill text-danger"></i></a></td>
    </tr>
    <?php
}?>
  </tbody>
</table>

</div>
</div>

<?php
require('footer.php')
?>

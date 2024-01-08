<?php
require('navbar.php');
if(isset($_SESSION['login_email']))
{

?>
<div class="container p-0">
<div class="row">
<h1 class="text-center my-5 mt-3">Order History</h1>
<table class="table table-striped shadow border  p-3 my-5 mt-0">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Image</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Order Date </th>
      <th scope="col">Delivery Date </th>
    </tr>
  </thead>
  <tbody>
  <?php 
$id = $_SESSION["login_email"];
orderHistory($id) ;

  ?>
  </tbody>
</table>




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
<?php
require('navbar.php');
if(isset($_SESSION['login_email']))
{


?>
<div class="container overflow-scroll">


    <!--fourth child-->
    <div class="row px-1">
        <div class="col-md-12">
          <!--products section-->
          <div class="row">
          <?php 

specialOffers();

?>
<!--Row end-->
</div>
<!--colomn end-->
</div>




    <?php
}
else
{
  header('Location: sign_in_sign_up/login.php');
}
require('footer.php');
?>
<?php
require('navbar.php');
if(isset($_SESSION['login_email']))
{

?>
<div class="container">
<div class="row">

<?php 
$id = $_SESSION["login_email"];
orderHistory($id) ;

  ?>
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
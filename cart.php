<?php
require('navbar.php');
if(isset($_SESSION['login_email']))
{


?>
<div class="container">


    <!--fourth child-->
    <div class="row px-1">
        <div class="col-md-10">
          <!--products section-->
          <div class="row">
          <?php 

if(!empty($_SESSION["products"]))
{



    if(isset($_GET['remove']) && isset($_GET['id']))
{
    $id = $_GET['id'];
 $key=array_search($id,$_SESSION['products']);
 if($key!==false)
    {
        unset($_SESSION['products'][$key]);
    }
    $_SESSION["products"] = array_values($_SESSION["products"]);
    $_SESSION['NumberOfProducts'] = count($_SESSION["products"] );
}

$array_data = (array)$_SESSION['products'];
$quantity= array_count_values($_SESSION["products"]);

foreach($quantity as $key => $val)
{
  getProduct($key,$val) ;
}

}else
{
    ?>
    <div class='text-center m-auto grid align-content-center mt-5'><p class='fs-2 text-secondary mt-5'>Add To Cart Product</p></div>
    <?php
}

?>
        <!--Row end-->
        </div>
        <!--colomn end-->
        </div>
                
          <!--sidenav-->  
        <div class="col-md-2  p-0 justify-content-center">
        <p class="text-bold fs-3">Total: <span><?php if(isset($_SESSION['products'])) price();else  echo 0;?>$</span></p>
<h3 class="text-bold fs-5">Payment Method</h3>
        <div class="form-check d-flex align-items-center my-2 checkBox">
  <input class="form-check-input method-Choose" type="checkbox" value="bkash" id="flexCheckDefault" onclick="methodChoose1()" checked='true'>
  <label class="form-check-label" for="flexCheckDefault">
    <img class="rounded float-end" width='100px' src="images/BKash-Logo.wine.png" alt="">
  </label>
</div>
<div class="form-check checkBox">
  <input class="form-check-input method-Choose" type="checkbox" value="cashOn" id="flexCheckChecked"  onclick="methodChoose2()">
  <label class="form-check-label" for="flexCheckChecked">
    Cash On Delivery 
</div>

<p class="text-bold fs-5 mt-3 mb-2">Delivery Address:</p>
<div >
  <textarea class="form-control addr" name="addr" id="" rows="3" placeholder="Type your address"></textarea>
</div>

<a class='btn btn-info my-3' onclick="makePayment()">Payment</a>
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
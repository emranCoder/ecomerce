<?php

require('navbar.php');


?>




<div class="container">
<h1 class="text-center text-secondary">Product Details</h1>
<div class="row">
<?php 
if(isset($_GET['id'])){
$id = $_GET['id'];

global $con;
    $select_query = "Select * from `products` WHERE product_id=$id "; //limit 0,12, HOW may product in display in home
$result_query = mysqli_query($con, $select_query);

while ($row = mysqli_fetch_assoc($result_query)) {
    $product_id = $row['product_id'];
    $product_title = $row['product_title'];
    $product_description = $row['product_description'];
    $product_image1 = $row['product_image1'];
    $product_price = $row['product_price'];
    $category_id = $row['category_id'];
    $brand_id = $row['brand_id'];
    $specialOffers = $row['specialOffers'];
    $offerRate = $row['offerRate'];
    $affterOffer =$product_price-(($product_price*$offerRate)/100);;

    ?>
<div class="card w-75 m-auto my-5 shadow border">
    <div class="row">
<div class="col-md-4">
<img src="admin_area/product_images/<?php echo $product_image1;?>" class="rounded border-0 img-thumbnail" alt="...">
</div>
<div class="col-md-8">
  <div class="card-body">
    <h5 class="card-title fs-3 fw-bold"><?php echo $product_title;?></h5>
    <p class="card-text"><?php echo $product_description;?></p>
    <?php
    if( $offerRate>0)
    {
      ?>
        
  
    <p class='card-text text-danger fs-5  mt-0 '>Price: <span class='text-decoration-line-through text-secondary me-1 '><?php  echo $product_price ?></span> <span class='fw-bold'><?php  echo $affterOffer ?></span> 
    </p>
    <?php
  }else
  {
    ?>

<p class='card-text text-danger fs-5  mt-0 '>Price:<span class='fw-bold'> <?php  echo $product_price ?></span> 
    </p>


       <?php
  }
  ?>
    <a name="" class="btn btn-warning my-3" href="session/cardSession.php?now=true&&id=<?php echo $product_id; ?>" role="button">Buy Now</a>
  </div>
  </div>
  </div>
</div>
<?php

}
}
?>
</div>
</div>


<?php
require('footer.php')
?>

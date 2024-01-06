<?php

require('header.php');

if(isset($_POST['offerRate']))
{
    global $con;
    $rate = intval($_POST['offerRate']);
    $id = $_GET['id'];
    $active = 0;
    if($rate>0)
    {
        $active = 1;
    }
    $select_query = "UPDATE `products` SET `specialOffers`=$active,`offerRate`=$rate where `product_id`=$id "; //limit 0,12, HOW may product in display in home
$result_query = mysqli_query($con, $select_query);
if($result_query)
{
    header('Location: all-products.php?update=true');
}else
{
    header('Location: products.php?update=false');
}



}


?>




<div class="container">
<h1 class="text-center">Product Edit</h1>
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

    ?>
<div class="card w-75 m-auto my-5">
    <div class="row">
<div class="col-md-4">
<img src="product_images/<?php echo $product_image1;?>" class="rounded border-0 img-thumbnail" alt="...">
</div>
<div class="col-md-8">
  <div class="card-body">
    <h5 class="card-title"><?php echo $product_title;?></h5>
    <p class="card-text"><?php echo $product_description;?></p>
    <form action="product.php?id=<?php echo $product_id;?>" method="POST">
    <div class="mb-3 d-flex align-items-center gap-2">
        <label for="" class="form-label">Special Offer Rate: </label>
        <input
            type="text"
            class="form-control"
            name="offerRate"
            id="update"
            aria-describedby="helpId"
            placeholder=""
            style="width:100px"
            value ='<?php echo $offerRate;?>'
            onkeyup="onPes()"
            onkeypress='return event.charCode >= 48 && event.charCode <= 57'
        />
        <span>%</span>
    </div>
    <button type="submit" name='submit' class="btn btn-primary disabled submitBTN" >Go</button>
    </form>
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

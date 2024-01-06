<?php
require('header.php')

?>


<body class="bg-light">
    <div class="container mt-3">

        <h1 class="text-center">All Products</h1>

        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Special Offer</th>
      <th scope="col">Offer Rate</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php  global $con;
    $select_query = "Select * from `products`"; //limit 0,12, HOW may product in display in home
$result_query = mysqli_query($con, $select_query);
$no = 1;
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

    <tr class='product-<?php echo $product_id;?>'>
      <th scope="row"><?php echo $no++;?></th>
      <td><?php echo $product_title;?></td>
      <td><?php echo $product_price;?></td>
      <td class="form-switch mx-auto "> <input onclick="offers(<?php echo $product_id;?>)" class="form-check-input mx-auto" name='check' type="checkbox" role="switch" id="flexSwitchCheckChecked" <?php if($specialOffers){echo 'checked';}?> >
      </td>
      <td ><span><?php echo $offerRate;?>% </span></td>
      <td class='d-flex justify-content-around'><a class='text-dark' href='product.php?id=<?php echo $product_id;?>'><i  class="bi bi-pencil-square"></i></a><i class="bi bi-trash3-fill"></i></td>
    </tr>
    <?php
}?>
  </tbody>
</table>

</div>

<?php
require('footer.php')
?>

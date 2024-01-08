<?php
require('header.php')

?>


<body class="bg-light">
    <div class="container-fluid mt-3">

        <h1 class="text-center my-5">All Orders</h1>

        <table class="table table-striped ">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Order Number</th>
      <th scope="col">Product Name</th>
      <th scope="col">Customer</th>
      <th scope="col">Customer Phone No</th>
      <th scope="col">Customer Email</th>
      <th scope="col">Address</th>
      <th scope="col">Order Status</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Order Date</th>
      <th scope="col">Delivery Date</th>
    </tr>
  </thead>
  <tbody>
    <?php  global $con;

    $select_query = "SELECT *,users.fname,users.phone_no, users.email,products.product_title FROM orders CROSS JOIN users,products WHERE users.id=orders.userID AND products.product_id=orders.productID";

$result_query = mysqli_query($con, $select_query);
$no = 1;
while ($row = mysqli_fetch_assoc($result_query)) {
    $OrderID = $row['OrderID'];
    $OrderNumber = $row['OrderNumber'];
    $product_title = $row['product_title'];
    $userID  = $row['userID'];
    $orderStatus = $row['orderStatus'];
    $addr = $row['addr'];
    $paymentMethod = $row['paymentMethod'];
    $productID = $row['productID'];
    $timestamp = $row['timestamp'];
    $paymentStatus = $row['paymentStatus'];
    $fname = $row['fname'];
    $phone_no = $row['phone_no'];
    $email = $row['email'];
    $delibariedDate = $row['delibariedDate'];
    $timestamp = date("d/m/y",strtotime($timestamp));
    ?>

    <tr class='product-<?php echo $OrderID;?>'>
      <th scope="row"><?php echo $no++;?></th>
      <td><?php echo $OrderNumber;?></td>
      <td> <a class='text-primary' href="product.php?id=<?php echo $productID;?>&view=true"><?php echo $product_title;?></a></td>
      <td><?php echo $fname;?></td>
      <td><?php echo $phone_no;?></td>
      <td><?php echo $email;?></td>
      <td><?php echo $addr ;?></td>
      <td ><?php if( $orderStatus){ ?>
        <a class="btn btn-success" href="#" role="button">Ok</a>
    <?php }else{ ?>
        <a class="btn btn-danger" href="#" role="button">Not</a>
    <?php } ?>
    
    </td>
      <td><?php echo $paymentMethod ;?></td>
      <td><?php echo $timestamp ;?></td>
      <td><?php if($delibariedDate){echo date("d/m/y",strtotime($delibariedDate));}else{echo "<span class='text-danger text-bold'>Pending...</span>";} ?></td>

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

<?php

 // connect file 

 include('./includes/connect.php');

 // getting product

 function getproducts(){
    global $con;
    $select_query = "Select * from `products` order by rand() LIMIT 0,9"; //limit 0,12, HOW may product in display in home
$result_query = mysqli_query($con, $select_query);

while ($row = mysqli_fetch_assoc($result_query)) {
    $product_id = $row['product_id'];
    $product_title = $row['product_title'];
    $product_description = $row['product_description'];
    $product_image1 = $row['product_image1'];
    $product_price = $row['product_price'];
    $category_id = $row['category_id'];
    $brand_id = $row['brand_id'];

    echo "<div class='col-md-4 my-2'>
          <div class='card d-flex justify-content-center'>
                   <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                 <div class='card-body'>
                   <h5 class='card-title'>$product_title</h5>
                   <p class='card-text text-secondary'>$product_description</p>
                   <div class='d-flex justify-content-sm-evenly'>
                   <a  name='add_to_cart mr-2' onclick='addCart($product_id )' class='btn btn-warning '>Add to cart</a>
                   <a href='#' class='btn btn-dark'>view more</a>
                   </div>
                 </div>
       </div>
       </div>";
}
 }


 function getProduct($id, $qun){

  global $con;
  $select_query = "Select * from `products` WHERE product_id=$id"; //limit 0,12, HOW may product in display in home
$result_query = mysqli_query($con, $select_query);
while ($row = mysqli_fetch_assoc($result_query)) {
  $product_id = $row['product_id'];
  $product_title = $row['product_title'];
  $product_description = $row['product_description'];
  $product_image1 = $row['product_image1'];
  $product_price = $row['product_price'];
  $category_id = $row['category_id'];
  $brand_id = $row['brand_id'];

  echo "<div class='col-md-3'>
        <div class='card'>
        <span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>
        $qun
    <span class='visually-hidden'>unread messages</span>
  </span>

                 <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
               <div class='card-body'>
                 <h5 class='card-title'>$product_title</h5>
                 <a class='btn btn-danger' href='./cart.php?id=$product_id&remove'>Remove</a>
               </div>
     </div>
     </div>";
}
}



function orderHistory($id){

  global $con;
  //$select_query = "Select * from `orders` WHERE userID=$id";
  $select_query = "SELECT * FROM orders CROSS JOIN products WHERE orders.userID=$id AND orders.productID=products.product_id";
$result_query = mysqli_query($con, $select_query);
while ($row = mysqli_fetch_assoc($result_query)) {
  $productID = $row['productID'];
  $order_id = $row['OrderID'];
  $status = $row['orderStatus'];
  $addr = $row['addr'];
  $paymentMethod = $row['paymentMethod'];
  $quantity = $row['quantity'];
  $timestamp = $row['timestamp'];
  $product_id = $row['product_id'];
  $product_title = $row['product_title'];
  $product_description = $row['product_description'];
  $product_image1 = $row['product_image1'];
  $product_price = $row['product_price'];
  $category_id = $row['category_id'];
  $brand_id = $row['brand_id'];
  $timestamp = date("d/m/y",strtotime($timestamp));

  echo "<div class='col-md-2 justify-item-center'>
        <div class='card'>
        <span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>
        $quantity
    <span class='visually-hidden'>unread messages</span>
  </span>

                 <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
               <div class='card-body'>
                 <h5 class='card-title text-center'>$product_title</h5>
                 ";
                  if($status){echo "<a class='btn btn-success d-block'>Delivered</a>";}else{echo "<a class='btn btn-danger d-block'>Procession</a>";}
                  echo "
               </div>
               <p class='text-center text-secondary'>OD: $timestamp</p>
     </div>
     </div>";
}
}




function price(){

  global $con;
  $priceCalculate =0;
  $array_data = (array)$_SESSION['products'];
for($i = 0; $i<count($array_data); $i++ )
{
$id = $array_data[$i];
  $select_query = "Select * from `products` WHERE product_id=$id"; //limit 0,12, HOW may product in display in home
$result_query = mysqli_query($con, $select_query);

while ($row = mysqli_fetch_assoc($result_query)) {
  $product_price = $row['product_price'];
  $priceCalculate  +=intval($product_price );

}
}
echo $priceCalculate;
}


 // display brand sidenav

 function getbrands(){
    global $con;
    $select_brands="Select * from `brands`";
    $result_brands=mysqli_query($con,$select_brands);

    while($row_data=mysqli_fetch_assoc($result_brands)){
      $brand_title=$row_data['brand_title'];
      $brand_id=$row_data['brand_id'];
      echo " <li class='nav-item'>
      <a href='index.php?brand=' class=$brand_id'nav-link text-light'>$brand_title</a>
      </li>";
    }

 }


 // displa categories sidenav

 function getcategories(){
    global $con;
    $select_categories="Select * from `categories`";
    $result_categories=mysqli_query($con,$select_categories);

    while($row_data=mysqli_fetch_assoc($result_categories)){
      $category_title=$row_data['category_title'];
      $category_id=$row_data['category_id'];
      echo " <li class='nav-item'>
      <a href='index.php?category=' class=$category_id'nav-link text-light'>$category_title</a>
      </li>";
    }
  
 }



?>
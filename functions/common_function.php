<?php

 // connect file 

 include('./includes/connect.php');

 // getting product

 function limit_words($string, $word_limit)
 {
     $words = str_word_count($string, 1);
     return implode(" ",array_splice($words,0,$word_limit));
 }


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
    $offerRate = $row['offerRate'];
    $afterOffer = $product_price-(($product_price*$offerRate)/100);
    $text = limit_words($product_description,100);

    echo "<div class='col-md-4 my-2 '>
          <div class='card shadow d-flex justify-content-center'>";
          if(intval($offerRate)>0){
            echo "<span class='position-absolute  top-0 start-100 translate-middle badge rounded-pill bg-danger mt-2 right-0 rounded'>-$offerRate %
            </span>
            <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
          <div class='card-body'>
            <h5 class='card-title'>$product_title</h5>
            <p class='card-text text-secondary mb-1'>$text....</p>
            <p class='card-text text-danger fs-5  mt-0 '>Price: <span class='text-decoration-line-through text-secondary me-1 '> $product_price $</span> <span class='fw-bold'>";
            echo $product_price-(($product_price*$offerRate)/100);
            echo " $</span> 
            <div class='d-flex justify-content-sm-evenly'>
            <a  name='add_to_cart mr-2' onclick='addCart($product_id )' class='btn btn-warning '>Add to cart</a>
            <a href='product.php?id=$product_id' class='btn btn-dark'>view more</a>
            </div>
          </div>
       </div>
       </div>";
          }else{
echo  "<img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
<div class='card-body'>
  <h5 class='card-title'>$product_title</h5>
  <p class='card-text text-secondary mb-1'>$product_description</p>
  <p class='card-text text-danger fs-5 fw-bold  mt-0 '>Price: $product_price
  <div class='d-flex justify-content-sm-evenly'>
  <a  name='add_to_cart mr-2' onclick='addCart($product_id )' class='btn btn-warning '>Add to cart</a>
  <a href='product.php?id=$product_id' class='btn btn-dark'>view more</a>
  </div>
</div>
</div>
</div>";
          }
         
}
 }



 
 function specialOffers(){
  global $con;
  $select_query = "Select * from `products` WHERE specialOffers=1"; //limit 0,12, HOW may product in display in home
$result_query = mysqli_query($con, $select_query);

while ($row = mysqli_fetch_assoc($result_query)) {
  $product_id = $row['product_id'];
  $product_title = $row['product_title'];
  $product_description = $row['product_description'];
  $product_image1 = $row['product_image1'];
  $product_price = $row['product_price'];
  $category_id = $row['category_id'];
  $brand_id = $row['brand_id'];
  $offerRate = $row['offerRate'];
  $text = limit_words($product_description,100);

  echo "<div class='col-md-4 my-2'>
        <div class='card  d-flex justify-content-center'>
        <span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger fs-6 mt-2 rounded'>$offerRate %
        </span>

                 <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
               <div class='card-body'>
                 <h5 class='card-title'>$product_title</h5>
                 <p class='card-text text-secondary mb-1'>$text.....</p>
                 <p class='card-text text-danger fs-5  mt-0 '>Price: <span class='text-decoration-line-through text-secondary me-1 '> $product_price $</span> <span class='fw-bold'>";
                 echo $product_price-(($product_price*$offerRate)/100);
                 echo " $</span> 
                 <div class='d-flex justify-content-sm-evenly'>
                 <a  name='add_to_cart mr-2' onclick='addCart($product_id )' class='btn btn-warning '>Add to cart</a>
                 <a href='product.php?id=$product_id'class='btn btn-dark'>view more</a>
                 </div>
               </div>
     </div>
     </div>";
}
}


function getAllJobs(){
  global $con;
  $select_query = "Select * from `jobs`"; //limit 0,12, HOW may product in display in home
$result_query = mysqli_query($con, $select_query);

while ($row = mysqli_fetch_assoc($result_query)) {
  $job_id = $row['job_id'];
  $jobTitle = $row['jobTitle'];
  $jobDesc = $row['jobDesc'];
  $contactInfo = $row['contactInfo'];
  $timtestemp = $row['timtestemp'];
  $timestamp = date("d/m/y",strtotime($timtestemp));
  $text = limit_words($jobDesc,100);
  echo "<div class='card shadow border'>
  <div class='card-header'>
  $jobTitle
  </div>
  <div class='card-body'>
    <h5 class='card-title'>$text.....</h5>
    <a href='job-info.php?id=$job_id ' >Read More..</a>
  </div>
</div>
";
}
}

function jobInfo($id){
  global $con;
  $select_query = "Select * from `jobs` WHERE job_id=$id"; //limit 0,12, HOW may product in display in home
$result_query = mysqli_query($con, $select_query);

while ($row = mysqli_fetch_assoc($result_query)) {
  $job_id = $row['job_id'];
  $jobTitle = $row['jobTitle'];
  $jobDesc = $row['jobDesc'];
  $contactInfo = $row['contactInfo'];
  $timtestemp = $row['timtestemp'];
  $timestamp = date("d/m/y",strtotime($timtestemp));
  echo "<div class='card'>
  <div class='card-header'>
  $jobTitle
  </div>
  <div class='card-body'>
  <h5 class='card-title mb-1'>Description: </h5>
    <h5 class='card-text fw-sm ps-2 text-secondary'>$jobDesc</h5>
    <h5 class='card-title mt-3 mb-1'>Contact Info: </h5>
    <p class='card-text fw-sm ps-2'>$contactInfo</p>
    <p class='card-text text-secondary'>Published Date: $timestamp</p>
  </div>
</div>
";
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
  $offerRate = $row['offerRate'];
  $afterOffer = $product_price-(($product_price*$offerRate)/100);
  $text = limit_words($product_description,100);

  echo "<div class='col-md-3'>
        <div class='card'>
        <span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark'>
        $qun    
        </span>
                 <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
               <div class='card-body'>
                 <h5 class='card-title'>$product_title</h5>";
                 if(intval($offerRate)>0){
                 echo "
                 <p class='card-text text-danger fs-5  mt-0 my-2'>Price: <span class='fw-bold'>";
                 echo $product_price-(($product_price*$offerRate)/100);
                 echo " $</span></p>";
                 }else
                 {
                  echo "
                 <p class='card-text text-danger fs-5 fw-bold mt-0 '>Price:$product_price $</p>";
                 }
                 echo "
                 <a class='btn btn-danger d-flex justify-content-center' href='./cart.php?id=$product_id&remove'>Remove</a>
               </div>
     </div>
     </div>";
}
}



function orderHistory($id){

  global $con;
  $select_query = "SELECT * FROM orders CROSS JOIN products WHERE orders.userID=$id AND orders.productID=products.product_id";
  $result_query = mysqli_query($con, $select_query);
  $no = 1;
  if(mysqli_num_rows($result_query))
  {

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
  $order_price = $row['order_price'];
  $delibariedDate = $row['delibariedDate'];
  $timestamp = date("d/m/y",strtotime($timestamp));
  
  $dateDelivery = date("d/m/y",strtotime($delibariedDate));

  echo "<tr class='product-$order_id'>
  <th scope='row'>".$no++."</th>
  <td><img class='rounded ' width='50px' src='admin_area/product_images/$product_image1' alt='$product_title'/></td>
  <td><a href='product.php?id=$product_id'>$product_title</a></td>
  <td >$order_price</td>
  <td >$timestamp</td>
  <td >";
 if( $delibariedDate)
 {
    echo  "<a class='btn btn-success'>$dateDelivery</a>";
 }else
 {
  echo  "<a class='btn btn-danger'>Processing...</a>";
 }
  echo "</td>
</tr>";

}

}else
{
  echo "<tr><td class='text-center text-danger' colspan='6'>No Data Found</td></tr>";
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
      echo " <li class='nav-item border-light-subtle border-bottom navHover'>
      <a href='index.php?brand=$brand_id' class='nav-link text-dark '>$brand_title</a>
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
      echo " <li class='nav-item border-bottom border-light-subtle'>
      <a href='index.php?category=$category_id' class='nav-link text-dark'>$category_title</a>
      </li>";
    }
  
 }



?>
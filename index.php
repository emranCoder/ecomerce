<?php

require('navbar.php');

if(isset($_GET['order'])=='true')
{
  if(isset($_SESSION['NumberOfProducts']))
  {
    unset($_SESSION['products']);
    unset($_SESSION['NumberOfProducts']);
    header('Location: index.php');
  }
}
?>
<div class="container">
    <!--fourth child-->
    <div class="row px-1">
        <div class="col-md-10">
          <!--products section-->
          <div class="row">
          <!-- fetching products -->

          <?php
          //function call
      getproducts()

// $select_query = "Select * from `products` order by rand() LIMIT 0,9"; //limit 0,12, HOW may product in display in home
// $result_query = mysqli_query($con, $select_query);

// while ($row = mysqli_fetch_assoc($result_query)) {
//     $product_id = $row['product_id'];
//     $product_title = $row['product_title'];
//     $product_description = $row['product_description'];
//     $product_image1 = $row['product_image1'];
//     $product_price = $row['product_price'];
//     $category_id = $row['category_id'];
//     $brand_id = $row['brand_id'];
//     echo "<div class='col-md-4'>
//           <div class='card'>
//                    <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
//                  <div class='card-body'>
//                    <h5 class='card-title'>$product_title</h5>
//                    <p class='card-text'>$product_description</p>
//                    <a href='#' class='btn btn-info'>Add to cart</a>
//                    <a href='#' class='btn btn-secondary'>view more</a>
//                  </div>
//        </div>
//        </div>";
// }
?>

        <!--Row end-->
        </div>
        <!--colomn end-->
        </div>
                
          <!--sidenav-->  
        <div class="col-md-2  p-0">
          <!--brands to be displayed-->
            
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info">
                    <a href="#" class="nav-link text-light"> <h4>Delivery Brands</h4></a>
                </li>
                
                <?php
                getbrands()

    // $select_brands="Select * from `brands`";
    // $result_brands=mysqli_query($con,$select_brands);

    // while($row_data=mysqli_fetch_assoc($result_brands)){
    //   $brand_title=$row_data['brand_title'];
    //   $brand_id=$row_data['brand_id'];
    //   echo " <li class='nav-item'>
    //   <a href='index.php?brand=' class=$brand_id'nav-link text-light'>$brand_title</a>
    //   </li>";
    // }

?>

                <!--categories to be displayed-->

                <ul class="navbar-nav text-center">
                <li class="nav-item bg-info">
                    <a href="#" class="nav-link text-light"> <h4>Categories</h4></a>
                </li>

                <?php
                getcategories()

    // $select_categories="Select * from `categories`";
    // $result_categories=mysqli_query($con,$select_categories);

    // while($row_data=mysqli_fetch_assoc($result_categories)){
    //   $category_title=$row_data['category_title'];
    //   $category_id=$row_data['category_id'];
    //   echo " <li class='nav-item'>
    //   <a href='index.php?category=' class=$category_id'nav-link text-light'>$category_title</a>
    //   </li>";
    // }

?>

 

                </ul>
        </div>  
    </div>
    </div>

    <!--last Child-->
    <div class="bg-light p-6">
        
        <h5 class="text-center">Created by</h5>
        <h6 class="text-center">Banglar_Rong_2.0</h6>
        <p class="text-center">Thanks for being with us.Dress Yourself in Banglar Rong</p>
    </div>

    
    <?php

require('footer.php');
?>
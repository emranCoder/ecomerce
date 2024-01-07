<?php
require('header.php')

?>
        <div class="container">
        <!--second child-->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>
        <!--third child-->
        <div class="row">
            <div class="col-md-12 p-1 d-flex align-items-center">
                <div class="me-5">
                    <a href="#"><img src="../images/admin.png" alt="" class="admin_image"></a>
                    <p class="text-center">Banglar_Rong_2.0</p>
                    <button class="my-3 btn btn-danger w-100"><a href="" class="nav-link text-light my-1">Log Out</a></button>
                </div>
                <div class="row gap-1 ml-5">
                <button class="my-3 btn btn-primary col-md-2"><a href="all-orders.php" class="nav-link text-light  my-1">All orders</a></button>
                <button class="my-3 btn btn-primary col-md-2"><a href="all-payments.php" class="nav-link text-light my-1">All payments</a></button>
                <button class="my-3 btn btn-primary col-md-2"> <a href="all-job.php" class="nav-link text-light my-1">All Jobs</a></button>  
                <button class="my-3 btn btn-primary col-md-2"><a href="current-order.php" class="nav-link text-light my-1">Current Orders</a></button>
                <button class="my-3 btn btn-primary col-md-2" ><a href="special_offer.php" class="nav-link text-light  my-1">Special Offers</a></button>
                <button class="my-3 btn btn-primary col-md-2">
                    <a href="all-products.php" class="nav-link text-light  my-1">View Products</a></button>
                    <button class="my-3 btn btn-primary col-md-2"> <a href="insert_product.php" class="nav-link text-light my-1">Insert Products</a></button>  
                    <button class="my-3 btn btn-primary col-md-2"><a href="index.php?insert_categories" class="nav-link text-light  my-1">Insert Categories</a></button>
                    <button class="my-3 btn btn-primary col-md-2"><a href="" class="nav-link text-light  my-1">View Catagories</a></button>
                    <button class="my-3 btn btn-primary col-md-2"><a href="index.php?insert_brands" class="nav-link text-light my-1">Insert Brands</a></button>
                    <button class="my-3 btn btn-primary col-md-2" ><a href="" class="nav-link text-light my-1">View Brands</a></button>
                    <button class="my-3 btn btn-primary col-md-2"> <a href="post-job.php" class="nav-link text-light my-1">Post Job</a></button>  
                </div>
            </div>
        </div>
        <!--fourth Child-->
        <div class="container my-3">
            <?php 
            if(isset($_GET['insert_categories'])){
                include('insert_categories.php');
            }
            if(isset($_GET['insert_brands'])){
                include('insert_brands.php');
            }
            ?>
    </div>

    <?php
require('footer.php')
?>

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
<div class="container-fluid px-5">
    <!--fourth child-->
    <div class="row">
        <div class="col-md-10 gap-1">
          <!--products section-->
          <div class="row">
          <!-- fetching products -->

          <?php
          //function call
      getproducts()

?>

        <!--Row end-->
        </div>
        <!--colomn end-->
        </div>
                
          <!--sidenav-->  
        <div class="col-md-2  p-0 gap-1 mr-2">
          <!--brands to be displayed-->
            
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-dark">
                    <a href="#" class="nav-link text-light link-underline-secondary"> <h4>Delivery Brands</h4></a>
                </li>
                
                <?php
                getbrands()


?>

                <!--categories to be displayed-->

                <ul class="navbar-nav text-center">
                <li class="nav-item bg-dark">
                    <a href="#" class="nav-link text-light"> <h4>Categories</h4></a>
                </li>

                <?php
                getcategories()

?>

 

                </ul>
        </div>  
    </div>
    </div>

    
    <?php

require('footer.php');
?>
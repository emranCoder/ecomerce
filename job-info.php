<?php
require('navbar.php');

?>
<div class="container overflow-scroll">


    <!--fourth child-->
    <div class="row px-1">
        <div class="col-md-12">
          <!--products section-->
          <div class="row">
          <?php 
         if(isset($_GET['id'])){
            $id = $_GET['id'];
        jobInfo( $id );
         }
?>


<!--Row end-->
</div>
<!--colomn end-->
</div>
</div>
</div>


<?php
require('footer.php');
?>
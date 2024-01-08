<?php
require('navbar.php');

?>
<div class="container overflow-scroll ">

<h1 class="text-center my-3 mb-5">Recent Jobs</h1>
    <!--fourth child-->
    <div class="row px-1 mb-5">
        <div class="col-md-12">
          <!--products section-->
          <div class="row">
          <?php 
getAllJobs()
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
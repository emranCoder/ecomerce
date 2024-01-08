<?php
require('header.php')

?>


<body class="bg-light">
    <div class="container mt-3">

        <h1 class="text-center my-5">All Jobs</h1>

        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Job Title</th>
      <th scope="col">Time Stamp</th>
      <th scope="col" class='d-flex justify-content-around'>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php  global $con;
    $select_query = "Select * from `jobs`"; //limit 0,12, HOW may product in display in home
$result_query = mysqli_query($con, $select_query);
$no = 1;
while ($row = mysqli_fetch_assoc($result_query)) {
    $job_id = $row['job_id'];
    $jobTitle = $row['jobTitle'];
    $jobDesc = $row['jobDesc'];
    $contactInfo = $row['contactInfo'];
    $timtestemp = $row['timtestemp'];
    $timestamp = date("d/m/y",strtotime($timtestemp));
    ?>

    <tr class='product-<?php echo $product_id;?>'>
      <th scope="row"><?php echo $no++;?></th>
      <td><a href=""><?php echo $jobTitle;?></a></td>
      <td ><?php echo $timestamp;?></td>
      <td class='d-flex justify-content-around'><a class='text-dark' ><i  class="bi bi-pencil-square"></i></a><i class="bi bi-trash3-fill text-danger"></i></td>
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

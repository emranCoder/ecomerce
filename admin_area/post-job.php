<?php
require('header.php');

if(isset($_POST['jobTitle']) && isset($_POST['description']) && isset($_POST['contactInfo']))
{
$title = $_POST['jobTitle'];
$description = $_POST['description'];
$contactInfo = $_POST['contactInfo'];
$insert = "INSERT INTO `jobs`(`jobTitle`, `jobDesc`, `contactInfo`) VALUES ('$title','$description','$contactInfo')";

$runUpQuery = mysqli_query($con,$insert);

if($runUpQuery){
header('Location: post-job.php?add=true');
}else
{
    header('Location: post-job.php?add=false');
}


}

?>
<div class="container">
        <!--second child-->
        <div class="bg-light">
            <h3 class="text-center p-2">Post Job</h3>
        </div>

            <form method="POST" action="post-job.php">
<div class="mb-3">
    <label for="" class="form-label">Title</label>
    <input
        type="text"
        class="form-control"
        name="jobTitle"
        id=""
        aria-describedby="helpId"
        placeholder=""
        required
    />
</div>

<div class="mb-3 my-2">
<div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 200px" name="description" required></textarea>
  <label for="floatingTextarea">Description</label>
</div>

<div class="mb-3 my-2">
<div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px" name="contactInfo" required></textarea>
  <label for="floatingTextarea">Contact Info</label>
</div>



  <button type="submit" class="btn btn-primary my-3">Submit</button>
</form>
            </div>
        </div>



    






<?php
require('footer.php')
?>

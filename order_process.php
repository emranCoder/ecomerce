<?php
include('includes/connect.php');

$addr = $_POST["addr"];
$paymentMethod = $_POST["paymentMethod"];
$products = $_POST["products"];
$userId = $_POST["id"];
$number = md5(sha1(rand(10000, 50000)));
$quantity= array_count_values($products);

foreach($quantity as $key => $val)
    {
        $insertQuery = "INSERT INTO orders ( OrderNumber,userID,orderStatus,addr,paymentMethod,productID,quantity) VALUES ('$number','$userId',0,'$addr','$paymentMethod','$key','$val')";
        $runUpQuery = mysqli_query($con,$insertQuery);
    }


if ($runUpQuery==false) {

	echo "false";
}else {


echo "ok";
}


?>
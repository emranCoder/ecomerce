<?php
include('includes/connect.php');

function generateRandomString($length ) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}

$addr = $_POST["addr"];
$paymentMethod = $_POST["paymentMethod"];
$products = $_POST["products"];
$userId = $_POST["id"];
$quantity= array_count_values($products) ;
$orderNumber= generateRandomString(20) ;

foreach($quantity as $key => $val)
    {
        $getQuery = "SELECT `product_title`,`product_price`,`offerRate` FROM `products` WHERE product_id=$key";
        $res = mysqli_query($con,$getQuery);
        $row = mysqli_fetch_assoc($res);  // fetch database
        $product_title = $row["product_title"];
        $product_price = $row["product_price"];
        $offerRate = $row["offerRate"];
        $priceAfterOffer = $product_price-(($product_price*$offerRate)/100);
        $insertQuery="INSERT INTO orders ( OrderNumber,userID,orderStatus,addr,paymentMethod,productID,product_title,order_price,offer_rate,quantity) VALUES ('$orderNumber','$userId',0,'$addr','$paymentMethod','$key','$product_title','$priceAfterOffer','$offerRate','$val')";
        $runUpQuery = mysqli_query($con,$insertQuery);
    }


if ($runUpQuery==false) {

	echo "false";
}else {

    if(isset($_SESSION['NumberOfProducts']))
    {
      unset($_SESSION['products']);
      unset($_SESSION['NumberOfProducts']);
      header('Location: index.php');
    }
echo "ok";
}


?>
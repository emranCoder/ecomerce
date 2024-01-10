<?php

// To Remove unwanted errors
error_reporting(0);

// Add your connection Code
include('includes/connect.php');

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
// Email From Form Input
$send_to_email = $_GET["email"];

// Generate Random 6-Digit OTP
$verification_otp = random_int(100000, 999999);

// Full Name of User
$send_to_name = $_GET["username"];

function sendMail($send_to, $otp, $name) {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Enter your email ID
    $mail->Username = "YOUR EMAIL";
    $mail->Password = "YOUR EMAIL APP KEY";

    // Your email ID and Email Title
    $mail->setFrom("YOUR EMAIL", "Verification Code");

    $mail->addAddress($send_to);

    // You can change the subject according to your requirement!
    $mail->Subject = "Account Activation";

    // You can change the Body Message according to your requirement!
    $mail->Body = "Hello, {$name}\nYour account registration is successfully done! Now activate your account with OTP {$otp}.";
    $mail->send();
}




$insertQuery = "UPDATE `users` SET `verify_code`='$verification_otp' WHERE `email`='$send_to_email'";
$result = mysqli_query($con, $insertQuery);


if($result){
    sendMail($send_to_email, $verification_otp, $send_to_name);
    header('Location: sign_in_sign_up/otp-send.php?otp=true&username='.$send_to_email);
}else
{

    header('Location: sign_in_sign_up/delete-user.php?username='.$send_to_email);
}


?>
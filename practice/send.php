<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'reagankimreagan@gmail.com'; //gmail
    $mail->Password = 'vrgqnrdwmawacoez'; //app password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('reagankimreagan@gmail.com'); //my gmail

    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);

    $mail->Subject = "THANK YOU FOR THE PURCHASE!";
    $mail->addAttachment('pic.png');
    $mail->Body =   "Thank you for choosing Galeria Sophilia. Your tickets are in this QR code.";

    $mail->send();

    echo "email sent";
}

?>
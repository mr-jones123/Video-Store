<?php
require '../../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable('..');
$dotenv->load();
$EMAIL = $_ENV['EMAIL_USN'];
$PASS = $_ENV['APP_PASSWORD'];
$SMTP_SERVER = $_ENV['SMTP_SERVER'];

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      
    $mail->isSMTP();                                           
    $mail->Host       = $SMTP_SERVER;                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = $EMAIL;                  
    $mail->Password   = $PASS;                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                               


    $mail->setFrom('202211012@fit.edu.ph', 'The Developer');
    $mail->addAddress('202211012@fit.edu.ph', 'Joe User');  


    $mail->isHTML(true);                             
    $mail->Subject = 'Whats up, Skibidi';
    $mail->Body    = 'Do not worry I am simply testing your my project and I used your email. Goodbye skibidi brainrot.';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
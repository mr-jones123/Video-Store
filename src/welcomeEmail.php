<?php
require '../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable('./');
$dotenv->load();
$EMAIL = $_ENV['EMAIL_USN'];
$PASS = $_ENV['APP_PASSWORD'];
$SMTP_SERVER = $_ENV['SMTP_SERVER'];

function sendWelcomeEmail($userEmail, $userName) {
    global $EMAIL, $PASS, $SMTP_SERVER;
    
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = 0;                      
        $mail->isSMTP();                                           
        $mail->Host       = $SMTP_SERVER;                     
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = $EMAIL;                  
        $mail->Password   = $PASS;                               
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
        $mail->Port       = 465;                               

        // Recipients
        $mail->setFrom('202211012@fit.edu.ph', 'The Developer');
        $mail->addAddress($userEmail, $userName);  

        // Content
        $mail->isHTML(true);                             
        $mail->Subject = 'Welcome to Our Video Rental Store!';
        $mail->Body    = 'Dear ' . $userName . ',<br><br>Welcome to our video rental website!<br> Pay now. Watch now.<br>
        That is the model of our website. Unlike subscription models, you can watch videos for a cheap price and no commitments!
        <br>We are glad to have you on board.<br><br>Best regards,<br>The Developer';
        $mail->AltBody = 'Dear ' . $userName . ', Welcome to our service! We are glad to have you on board. Best regards, The Developer';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
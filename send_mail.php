<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';                       //gmail SMTP server set to send through
    $mail->SMTPAuth   = true;
    $mail->Username   = 'rahulsah.gupta.r24@gmail.com
';                     //SMTP username (your gmail account)
    $mail->Password   = 'binntere';                               //SMTP password (your gmail password or app password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    //Recipients
    $mail->setFrom('rahulsah.gupta.r24@gmail.com
', 'Mailer');         //Set the sender of the message (your email address)
    $mail->addAddress('rahulsah.gupta.24@gmail.com
', 'Joe User');     //Add a recipient (your bae's email address)

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'I Love You';
    $mail->Body    = 'Hey Ayushii, ik you have been wondering whats the use of this functionality but surpirise I can do this too and yes Ayushiii
     Happy Valentines Day. Thik hai baki din gussa kar lena. Wanted to hug you so tightly and I miss you. Do read my letter and yes I am always for you.
     Lots of Love and be Happy. Your Smile is precious. Thank you Bye bye.❤';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

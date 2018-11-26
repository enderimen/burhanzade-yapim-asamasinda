<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    
    $name    = $_POST['name']." ".$_POST['surname'];
    $email   = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $from = 'burhanzade.info@gmail.com';

    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com;';                      // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $from;                              // SMTP username
    $mail->Password = 'burhanzade123';                    // SMTP password
    $mail->SMTPSecure = '';                               // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    $mail->CharSet = 'UTF-8';                             // Convert to UTF-8

    //Recipients
    $mail->setFrom($from, $name);
    $mail->addAddress('enderimen@hotmail.com', $email);     // Add a recipient

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message."\n".$email;
    $mail_send     = $mail->send();

    if ($mail_send) {
        header("Location: index.php?state=true");  
    }

} catch (Exception $e) {
    header("Location: index.php?state=false");
}
<?php
$mail_setFromName = $_POST["customer_name"];
$mail_setFromEmail = $_POST["customer_email"];
$mail_setFromMessage = $_POST["customer_message"];

$body = "Este mensaje viene de parte de: " . $mail_setFromName. "<br>Email: " . $mail_setFromEmail . "<br>Mensaje escrito: " . $mail_setFromMessage;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'pruebaveinteveinte999@gmail.com';                     // SMTP username
    $mail->Password   = '12345678juan';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($mail_setFromEmail, $mail_setFromName);
    $mail->addAddress('pictures.mikasa@gmail.com', 'Usuario de prueba');     // Add a recipient             

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Mensaje recibido desde la PAG. WEB del instituto.';
    $mail->Body    = $body;

    $mail->send();
    echo '<script>alert("El mensaje se envío correctamente")</script>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
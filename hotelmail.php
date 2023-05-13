<?php
session_start();
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'travelsdream95@gmail.com';                 // SMTP username
    $mail->Password = 'hardik@123';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->From = $mail->Username;     // Add a recipient
    $mail->addAddress($_SESSION['email']);

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('C:/Users/WELCOME/Desktop/Relational Schema.png', 'new.png');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'DreamtTravels Hotel Booking Details';
    $mail->Body    = 'Name: '.$_SESSION['name']."<br>".'Uniqueid: '.$_SESSION['i']."<br>"."<br>".'Hotel Details:'."<br>"."<br>".'HotelID: '.$_SESSION['hotel_id']."<br>".'Hotel Name: '.$_SESSION['detail']."<br>".'Location: '.$_SESSION['location']."<br>".'Guest: '.$_SESSION['guest']."<br>".'Charges: '.$_SESSION['Charges']."<br>"."<br>"."<br>".'THANK YOU! Visit our website again.';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    header('Location:http://localhost/Dreamtravels/Home.php');
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>
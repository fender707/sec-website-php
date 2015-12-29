<?php

require("php/PHPMailerAutoload.php");

$mail             = new PHPMailer();

$body             = 'some body';

$mail->IsSMTP(); // telling the class to use SMTP
$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
$mail->Username   = "sec.venturesmailer@gmail.com";  // GMAIL username
$mail->Password   = "zxcvbn789";            // GMAIL password

$mail->SetFrom('name@yourdomain.com', 'First Last');
$mail->AddReplyTo("name@yourdomain.com","First Last");
$mail->Subject    = "PHPMailer Test Subject via smtp (Gmail), basic";
$mail->MsgHTML($body);
$mail->AddAddress("fender707@rambler.ru", "John Doe");

if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

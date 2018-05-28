<?php
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'relay-hosting.secureserver.net';
$mail->Port = 25;
$mail->SMTPAuth = false;
$mail->SMTPSecure = false;
$mail->SMTPDebug=1;
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = 'dev.res2018@gmail.com';
$mail->Password = 'adrsv666';

$mail->setFrom('dev.res2018@gmail.com', 'dev res');
$mail->addAddress('noureddine0elmouden@gmail.com');
$mail->Subject = 'SMTP email test';
$mail->Body = 'this is some body';

if ($mail->send()){
    
echo "dd"; 
}
else
$mail->ErrorInfo;
?>
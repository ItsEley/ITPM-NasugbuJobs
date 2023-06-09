<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
include '../constants/settings.php';

$myfname = ucwords($_POST['fullname']);
$myemail = $_POST['email'];
$mymessage = $_POST['message'];

require '../mail/PHPMailerAutoload.php';

$mail = new PHPMailer(true);


$mail->isSMTP();                                      
$mail->Host = $smtp_host;
$mail->SMTPAuth = true;                           
$mail->Username = $smtp_user;               
$mail->Password = $smtp_pass;                       
$mail->SMTPSecure = 'tls';                   
$mail->Port = 587;   

$mail->setFrom($myemail, $myfname);
$mail->addAddress($contact_mail);           
  
$mail->isHTML(true);

$mail->Subject = 'Contact';
$mail->Body    = "
    Email from : $myemail

    <br><h3>Message : $mymessage</h3>";
$mail->AltBody = $mymessage;

if(!$mail->send()) {
header("location:../contact.php?r=2974");
} else {
header("location:../contact.php?r=5634");
}

?>
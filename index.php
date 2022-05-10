<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings 
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'sharathkv@dckap.com';                     //SMTP username
    $mail->Password   = 'dckap@1234';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('sharathkumarv183@gmail.com', 'Sharath');
    $mail->addAddress('sharathkv@dckap.com'); 
    $mail->addAddress('prakashs@dckap.com');
 
    //Content
  
    $name = $_POST['name']; 
    $company = $_POST['company']; 
    $email = $_POST['email']; 
    $phone_no = $_POST['phone_no']; 
    $partNum = $_POST['partNum']; 
    $partQty = $_POST['partQty'];
    
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Request Quote';
    $mail->Body    = "Name: $name <br> Company: $company <br> Email: $email <br> Phone: $phone_no <br> PartNo: $partNum <br> PartQty: $partQty"; 

    if($mail->send()){
        echo 'Message has been sent';
    }
    else{
        echo "Something went wrong";
    }

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
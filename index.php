<?php
// if(isset($_POST['message']))
 
    $to      = 'sharathkv@dckap.com';
    $subject = 'Request for Quote';  
    $sendername = 'sharath@gmail.com';  
    $name = 'name'; 
    $company = 'company'; 
    $email = 'email'; 
    $phone_no = 'phone_no'; 
    $partNum = 'partNum'; 
    $PartQty = 'PartQty';
    $message = "'Name:'.$name. '<br>' 'Company:'.$company. '<br>' 'Email:'.$email. '<br>' 'Phone:'.$phone_no.";
    $headers = "From: ".$sendername." \r\n";
    // $headers = "Reply-To: ".$_POST['sender_ema‌​il‌​']."\r\n"; 
    $headers = "Content-type: text/html; charset=iso-8859-1\r\n";
    'X-Mailer: PHP/' . phpversion();
    if(mail($to, $subject, $message, $headers)) 
    echo 'success'; 
    else 
    echo 'Error';
    exit;
 
?>
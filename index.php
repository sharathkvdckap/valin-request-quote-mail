<?php
// if(isset($_POST['message']))
if($_POST['submit_request_quote'] == 'submit')
  {
    $to      = 'sharathkv@dckap.com';
    $subject = 'Request for Quote';  
    $sendername = 'sharath';  
    $name = $_POST['name']; 
    $company = $_POST['company']; 
    $email = $_POST['email']; 
    $phone_no = $_POST['phone_no']; 
    $partNum = $_POST['partNum']; 
    $PartQty = $_POST['PartQty'];
    $message = "'Name:'.$name. '<br>' 'Company:'.$company. '<br>' 'Email:'.$email. '<br>' 'Phone:'.$phone_no.";
    $headers = "From: ".$sendername." \r\n";
    // $headers = "Reply-To: ".$_POST['sender_ema‌​il‌​']."\r\n"; 
    $headers = "Content-type: text/html; charset=iso-8859-1\r\n";
    'X-Mailer: PHP/' . phpversion();
    if(mail($to, $subject, $message, $headers)) 
    echo json_encode(['success'=>true]); 
    else 
    echo json_encode(['success'=>false]);
    exit;
 }
?>


<?php

$to = "sharathkv@dckap.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: sharathkumarv183@gmail.com"; 
mail('sharathkv@dckap.com','My subject','Hello world!',$headers);

$errorMessage = error_get_last()['message'];
?>
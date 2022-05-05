

<?php
echo "start";
$to = "sharathkv@dckap.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: sharathkumarv183@gmail.com"; 
mail($to,$subject,$txt,$headers);
echo "end";
?>
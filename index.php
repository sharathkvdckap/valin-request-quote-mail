

<?php
echo "start";
$to = "sharathkv@dckap.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: sharath@gamil.com"; 
mail($to,$subject,$txt,$headers);
echo "end";
?>
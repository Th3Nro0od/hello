<?php
if(isset($_GET["m"])){
$to = $_GET["m"];
$subject = "HTML email";

$message = "
<p>ok</p>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@manyetdance.com>' . "\r\n";
$headers .= 'Cc: info@manyetdance.com' . "\r\n";

if(mail($to,$subject,$message,$headers)){
echo "ok";
}else{
echo "not ok";
}
}
?>

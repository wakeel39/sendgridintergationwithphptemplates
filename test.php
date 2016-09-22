<?php

include("send_email.php");
$html = "<div>Hello wakeel</div>";
 $subject = "coderpk Testing";
$from = "admin@zzum.co.uk";
//$senderEmail = $passenger_data->txtb_email;
$senderEmail="wakeel@appliconic.com";
$a = array();
$a["image"]="https://sendgrid.com/brand/sg-logo.png";
$a["email"]="testingemail";
$a["site_name"]="coderpk";
$template_id="f36d2d17-aadb-4576-9939-da596b3a4af9";
$response_email = $send_email->sendEmail($senderEmail,$html,$subject,$from,$template_id,$a);
echo "<pre>"; print_r($response_email);
/*email recipt end */

 ?>
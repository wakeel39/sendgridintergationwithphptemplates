<?php 
require 'Send_Grid/vendor/autoload.php';
class send_email
{

  function __construct($apiKey)
  {
    $sendgrid_options = array(
      'turn_off_ssl_verification' => false,
      'protocol' => 'https',
      'host' => 'api.sendgrid.com',
      'endpoint' => '/api/mail.send.json',
      'port' => null,
      'url' => null,
      'raise_exceptions' => false
    );

    $this->sendgrid = new SendGrid($apiKey, $sendgrid_options);
  }
  
  function sendEmail($reciever_email,$message,$subject,$from,$template_id="",$template_data=array()){
    
    $email = new SendGrid\Email();
    $email->addTo($reciever_email)
          ->setFrom($from)
		 
          ->setSubject($subject)
          ->setHtml($message);
		  if($template_id!='') {
			   $email->addFilter('templates', 'enabled', 1)
			   ->addFilter('templates', 'template_id', $template_id);
		  }
		 
		 foreach($template_data as $templateKey=>$templateValue) {
		  $email->addSubstitution("%".$templateKey."%", array($templateValue));
		}
		
      
    $res = $this->sendgrid->send($email);
	return $res;

  }

} 
$send_email = new send_email("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");
?>
<?php


$headers = 'From: info@nagp.com' . "\r\n" .
    'Reply-To: noreply@nagp.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$to = "contacto@jonathanruiz.es";

$subject = "NAGP - Mensaje desde la web";
$body="";
foreach($_POST['mail'] as $field => $value)
{
	$body .= $field ."=". $value ."\n";
}


if (mail($to, $subject, $body, $headers)) {
   header( 'Location: thanks.html' ) ;
  } else {
   header( 'Location: 404.html' );
  }

?>


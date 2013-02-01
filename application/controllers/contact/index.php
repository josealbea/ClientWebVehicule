<?php

if (!empty($_POST)) {
	envoi_mail();
}

function envoi_mail() {
	$to  = $mail;
    $subject = $_POST['sujet'].' - '.SITE_NAME;
    $message = '
    <html>
     <head>
      <title>Message depuis le formulaire de contact AcheterVehicule.com</title>
     </head>
     <body>
     <p>Message envoyé par '.$_POST['nom'].' le '. date('j F Y à H:i').'</p>
     <p>Adresse mail : '.$_POST['mail'].'</p>
     <hr>
      <p>
      	'.$_POST['message'].'
      </p>
     </body>
    </html>
    ';
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: '.$_POST['nom'].'<'.$_POST['mail'].'>' ."\r\n";
    $headers .= $_POST['sujet'].' - '.SITE_NAME."\r\n";
    mail($to, $subject, $message, $headers);
}
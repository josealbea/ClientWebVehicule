<?php

if (!empty($_POST)) {
	envoi_mail();
}

function envoi_mail() {
    global $error;
    $error = "";
	$to  = "jose.albea@gmail.com";
    $subject = stripslashes($_POST['sujet']).' - '.SITE_NAME;
    $message = stripslashes('
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
    ');
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: '.$_POST['nom'].'<'.$_POST['mail'].'>' ."\r\n";
    $headers .= stripslashes($_POST['sujet']).' - '.SITE_NAME."\r\n";
    $envoi = mail($to, $subject, $message, $headers);
    if ($envoi) {
        $error = "<div class='notif success'>Votre message été envoyé. Nos équipes s'efforceront de répondre de la meilleure façon qu'il soit à votre message. Merci</div>";
    }
    else {
        $error = "<div class='notif error'>Une erreur est survenue lors de l'envoi. Merci de réessayer.</div>";
    
    }
}
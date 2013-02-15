<?php

loadXMLFile(API_ROOT."?controller=users&action=validation&hash=".$_GET['hash']);

function loadXMLFile($url) 
{
	global $error;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$result = utf8_decode(curl_exec($ch));
	curl_close($ch);
	$annonces = new DOMDocument();
	if ($result == 0) {
		$error = "<div class='notif error'>Ce compte a été banni.</div>";
	}
	else if ($result == 1) {
		$error = "<div class='notif error'>Compte déjà validé.</div>";
	}
	else if ($result == 2) {
		$error = "<div class='notif success'>Le compte a bien été activé.</div>";
	}
	else {
		$error = "<div class='notif error'>Nous n'avons trouvé aucun compte.</div>";
	}

}
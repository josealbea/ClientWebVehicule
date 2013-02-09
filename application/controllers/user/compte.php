<?php

monCompte("http://localhost/projetB3/?controller=users&action=single&id=".$_SESSION['id_membre']);

function monCompte($url) 
{
	global $compte;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$result = utf8_decode(curl_exec($ch));
	curl_close($ch);
	$annonces = new DOMDocument();
	$annonces->loadXML($result);
	$compte=$annonces->getElementsByTagName("membre");
	return $compte;
}

function modifCompte() {
	$curl = curl_init($service_url);
	if (!empty($_POST)) {
		$formData = $_POST;
		$vars="password=".$formData['password']."&mail=".$formData['mail']."&nom=".$formData['nom']."&ville=".$formData['ville']."&code_postal=".$formData['cp']."&telephone=".$formData['telephone'];
		$ch=curl_init('http://localhost/projetB3/users/index');
		curl_setopt($ch,CURLOPT_PUT, true);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$vars);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$ret = curl_exec($ch);
		if (!$ret) {
		    echo curl_error($ch);
		}
		else {
			return $succes = "<div class='notif success'>Vos informations ont été modifié avec succès</div>";
		}
		curl_close($ch);
	}
}

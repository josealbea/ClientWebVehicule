<?php 

ajoutAnnonce();

// modifier cette ^page ::

function ajoutAnnonce() {
	$curl = curl_init($service_url);
	if (!empty($_POST)) {
		$formData = $_POST;
		$vars="password=".$formData['password']."&mail=".$formData['mail']."&nom=".$formData['nom']."&ville=".$formData['ville']."&code_postal=".$formData['cp'];
		// echo $vars;
		$ch=curl_init('http://localhost/projetB3/users/index');
		curl_setopt($ch,CURLOPT_POST, true);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$vars);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$ret = curl_exec($ch);
		if (!$ret) {
		    echo curl_error($ch);
		} else {
		    return $erreur = "L'adresse mail existe déjà";
		}

		curl_close($ch);
	}
}
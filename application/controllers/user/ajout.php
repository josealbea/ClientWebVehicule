<?php 

init();

function init() {
	ajoutMembre();
}

function ajoutMembre() {
	$curl = curl_init($service_url);
	if (!empty($_POST)) {
		$formData = $_POST;
		$vars="password=".$formData['password_inscript3']."&mail=".$formData['mail_inscript3']."&nom=".$formData['nom3']."&code_postal=".$formData['cp3']."&telephone=".$formData['tel3'];
		//echo $vars;
		$ch=curl_init(API_ROOT.'users/index');
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
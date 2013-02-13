<?php 

init();

function init() {
	ajoutMembre();
	$error = "";
}

function ajoutMembre() {
	global $error;
	$curl = curl_init($service_url);
	if (!empty($_POST)) {
		$formData = $_POST;
		$vars="password=".$formData['password_inscript3']."&mail=".$formData['mail_inscript3']."&nom=".$formData['nom3']."&code_postal=".$formData['cp3']."&telephone=".$formData['tel3'];
		//echo $vars;
		$ch=curl_init(API_ROOT.'?controller=users&action=index');
		curl_setopt($ch,CURLOPT_POST, true);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$vars);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$ret = curl_exec($ch);
		if (!$ret) {
		    echo curl_error($ch);
		    $error = "<div class='notif error'>L'adresse mail existe déjà</div>";
		} else {
		    $error = "<div class='notif success'>Le compte a bien été créé et doit être validé par mail. Merci.</div>";
		}

		curl_close($ch);
	}
}
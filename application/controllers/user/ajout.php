<?php 

init();

function init() {
	ajoutMembre();
}

function ajoutMembre() {
	$curl = curl_init($service_url);
	if (!empty($_POST)) {
		$formData = $_POST;
		$vars="pseudo=".$formData['pseudo']."&password=".$formData['password']."&mail=".$formData['mail']."&nom=".$formData['nom']."&ville=".$formData['ville']."&code_postal=".$formData['cp'];
		echo $vars;
		$ch=curl_init('http://localhost/projetB3/users/index');
		curl_setopt($ch,CURLOPT_POST, true);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$vars);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$ret = curl_exec($ch);
		if (!$ret) {
		    echo curl_error($ch);
		} else {
		    echo $ret;
		}

		curl_close($ch);
	}
}
<?php 
session_start();

connect();

function connect() {
	$curl = curl_init($service_url);
	if (!empty($_POST)) {
		$formData = $_POST;
		$vars="mail_connect=".$formData['mail_connect']."&password_connect=".$formData['password_connect'];
		//echo $vars;
		$ch=curl_init('http://localhost/projetB3/users/connect');
		curl_setopt($ch,CURLOPT_POST, true);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$vars);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$ret = curl_exec($ch);
		if (!$ret) {
		    echo curl_error($ch);
		}
		else {
			$ses = json_decode($ret, true);
			if ($ses['statut'] == "1") {
				echo "1";
			}
			else if($ses['statut'] == "2") {
				echo "2";
			}
			else if($ses['statut'] == "3") {
				echo "3";
			}
			else {
				echo "0";
			}
			$_SESSION['mail'] = $ses['mail'];
			$_SESSION['cp'] = $ses['code_postal'];
			$_SESSION['type'] = $ses['type'];
			$_SESSION['id_membre'] = $ses['id_membre'];
		}
		curl_close($ch);
	}
}
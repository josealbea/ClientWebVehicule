<?php 

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
			echo "1";
		}
		curl_close($ch);
	}
}
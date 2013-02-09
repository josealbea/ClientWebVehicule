<?php

monCompte("http://localhost/projetB3/?controller=users&action=single&id=".$_SESSION['id_membre']);
listerVehicule("http://localhost/projetB3/?controller=vehicule&action=index&id_membre=".$_SESSION['id_membre']);

if (isset($_GET['delete'])) {
	deleteVehicule($_GET['id']);
}

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
	function listerVehicule($url){
	global $liste;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$result = utf8_decode(curl_exec($ch));
	curl_close($ch);
	$listes = new DOMDocument();
	$listes->loadXML($result);
	$liste=$listes->getElementsByTagName("vehicule");

	return $liste;
}
 function deleteVehicule($id_vehicule){
 	$request_body = $id_vehicule;
	$ch = curl_init('http://localhost/projetB3/?controller=vehicule&action=single&id='.$id_vehicule);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $request_body);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    $response = curl_exec($ch);
    header('location: http://localhost/ClientWebVehicule/user/compte');
 }

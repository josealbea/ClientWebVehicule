<?php

monCompte("http://localhost/projetB3/?controller=users&action=single&id=".$_SESSION['id_membre']);
listerVehicule("http://localhost/projetB3/?controller=vehicule&action=index&id_membre=".$_SESSION['id_membre']);
if(!empty($_POST)){
	modifCompte();
}

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
$formData = $_POST;
$vars = array(
	"mail" => $formData['mail'],
	"nom" => $formData['nom'],
	"code_postal" => $formData['cp'],
	"telephone" => $formData['tel']
	);
$ch = curl_init("http://localhost/projetB3/?controller=users&action=single&id=".$_SESSION['id_membre']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($vars));

$response = curl_exec($ch);
if(!$response) {
    return false;
}
else {
	header('location: http://localhost/ClientWebVehicule/user/compte');
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

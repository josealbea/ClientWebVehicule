<?php

loadXMLFile();

function loadXMLFile() 
{
	global $vehicules;
	var_dump($_GET);exit;
	$url = "http://achetervehicule.com/webservice/?controller=vehicule&action=index&type=".$_GET['type']."&recherche=".$_GET['recherche']."&cp=".$_GET['cp']."&annee=".$_GET['annee']."&boite_vitesse=".$_GET['boite']."&energie=".$_GET['energie'];
	echo $url;exit;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$result = utf8_decode(curl_exec($ch));
	curl_close($ch);
	$annonces = new DOMDocument();
	$annonces->loadXML($result);
	$vehicules=$annonces->getElementsByTagName("vehicule");

	return $vehicules;
}
<?php

loadXMLFile("http://localhost/projetB3/?controller=vehicule&action=single&id=".$_GET['id']);

function loadXMLFile($url) 
{
	global $vehicule;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$result = utf8_decode(curl_exec($ch));
	curl_close($ch);
	$annonces = new DOMDocument();
	$annonces->loadXML($result);
	$vehicule=$annonces->getElementsByTagName("vehicule");

	return $vehicule;
}
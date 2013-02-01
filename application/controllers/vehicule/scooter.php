<?php

loadXMLFile("http://www.josealbea.com/projetB3/webservice/?controller=vehicule&action=index&type=3");

function loadXMLFile($url) 
{
	global $vehicules;
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
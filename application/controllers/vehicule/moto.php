<?php

<<<<<<< HEAD
loadXMLFile("http://achetervehicule.com/webservice/?controller=vehicule&action=index&type=2");
=======
loadXMLFile("http://achetervehicule.com/webservice/?controller=vehicule&action=index");
>>>>>>> 7e28c38792f5c4ccf6a14938eb6d171182dcaac9

function loadXMLFile($url, $page) 
{
	global $vehicules;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$result = utf8_decode(curl_exec($ch));
	curl_close($ch);
	$annonces = new DOMDocument();
<<<<<<< HEAD
	$annonces->loadXML($result);
	$vehicules=$annonces->getElementsByTagName("vehicule");

	return $vehicules;
}
=======
	$annonces->loadHTML($result);
	$vehicules=$annonces->getElementsByTagName("vehicule");


	return $vehicules;
>>>>>>> 7e28c38792f5c4ccf6a14938eb6d171182dcaac9

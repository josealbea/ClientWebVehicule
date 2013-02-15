<?php
if (empty($_GET['page'])) {
	$_GET['page'] = 1;
}
loadXMLFile(API_ROOT."?controller=vehicule&action=index&page=".$_GET['page']);

function loadXMLFile($url) 
{
	global $vehicules;
	global $total;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$result = utf8_decode(curl_exec($ch));
	curl_close($ch);
	$annonces = new DOMDocument();
	$annonces->loadXML($result);
	$vehicules=$annonces->getElementsByTagName("vehicule");
	$total = $annonces->getElementsByTagName("vehicules");

	return $vehicules;
}
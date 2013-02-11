 <?php 
if (!empty($_POST)) {
	$formData = $_POST;
	loadXMLFile("http://localhost/projetB3/?controller=vehicule&action=recherche&recherche=".$formData['recherche']."&annee=".$formData['annee']."&cp=".$formData['departement']."&energie=".$formData['energie']."&km=".$formData['km']."&boite_vitesse=".$formData['boite_vitesse']);
}
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

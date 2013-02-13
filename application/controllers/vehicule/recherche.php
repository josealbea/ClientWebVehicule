 <?php 
if (!empty($_POST)) {
	$formData = $_POST;
	loadXMLFile(API_ROOT."?controller=vehicule&action=recherche&id_categorie=".$formData['vehicule']."&recherche=".$formData['recherche']."&annee=".$formData['annee']."&cp=".$formData['departement']."&energie=".$formData['energie']."&km=".$formData['km']."&boite_vitesse=".$formData['boite_vitesse']."&prix_min=".$formData['prix_min']."&prix_max=".$formData['prix_max']);
}
function loadXMLFile($url) 
{
	global $vehicules;
	global $error;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$result = utf8_decode(curl_exec($ch));

	if (!$result) {
		$error = "<div class='notif error'>Désolé, mais aucune annonce ne correspond à vos critères</div>";
	} else {	
		$annonces = new DOMDocument();
		$annonces->loadXML($result);
		$vehicules=$annonces->getElementsByTagName("vehicule");
	}
	curl_close($ch);

	return $vehicules;
}

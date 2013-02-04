 <?php 

ajoutAnnonce();

// modifier cette page ::

function ajoutAnnonce() {
	$curl = curl_init($service_url);
	if (!empty($_POST)) {
		$formData = $_POST;
		if($formData['categorie'] == 1){
			$vehicule = "&boite_vitesse=".$formData['boite_vitesse']."&nb_places=".$formData['nb_places'];
		}
		else{
			$vehicule = "cylindree=".$formData['cylindree'];
		}
		$vars="titre=".$formData['titre']."&description=".$formData['description']."&prix=".$formData['prix']."&annee=".$formData['annee']."&km=".$formData['km']."&energie=".$formData['energie']."&id_categorie=".$formData['categorie'].$vehicule;
		//echo $vars;
		$ch=curl_init('http://localhost/projetB3/vehicule/index');
		curl_setopt($ch,CURLOPT_POST, true);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$vars);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$ret = curl_exec($ch);
		if (!$ret) {
		    echo curl_error($ch);
		}
		curl_close($ch);
	}
}
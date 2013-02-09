 <?php 

ajoutAnnonce();

// modifier cette page ::

function ajoutAnnonce() {
	$curl = curl_init($service_url);
	if (!empty($_POST)) {
		//var_dump($_FILES);exit;
		// UPLOAD D'IMAGE
		$fichier = $_FILES['photo'];
		$photo = $fichier['tmp_name']; 
		$nom_image = $fichier['name'];
		$ext = strtolower(substr(strrchr($nom_image,'.'),1));
    	$ext_aut = array('jpg','jpeg','png','gif');
    	$valid = (!check_extension($ext,$ext_aut)) ? false : true;
    	$erreur = (!check_extension($ext,$ext_aut)) ? 'Veuillez charger une image' : '';
    	if($valid)
	    {
	        $max_size = 2000000;
	        if($fichier['size']>$max_size)
	        {
	            $valid = false;
	            $erreur = 'Fichier trop gros';
	        }
	    }
	    
	    if($valid)
	    {
	        if($fichier['error']>0)
	        {
	            $valid = false;
	            $erreur = 'Erreur lors du transfert';
	        }
	    }
    	// FIN UPLOAD D'IMAGE
		$formData = $_POST;
		if($formData['categorie'] == 1){
			$vehicule = "&boite_vitesse=".$formData['boite_vitesse']."&nb_places=".$formData['nb_places'];
		}
		else{
			$vehicule = "cylindree=".$formData['cylindree'];
		}
		if($formData['categorie'] == 1){
			$vehicule = array(
			"boite_vitesse" => $formData['boite_vitesse'],
			"nb_places" => $formData['nb_places']
			);
			}
			else{
				$vehicule = array(
				"cylindree" => $formData['cylindree']
				);
			}
		$vars = array(
			"titre" => $formData['titre'],
			"description" => $formData['description'],
			"prix" => $formData['prix'],
			"annee" => $formData['annee'],
			"km" => $formData['km'],
			"energie" => $formData['energie'],
			"id_categorie" => $formData['categorie'],
			"image" => $photo,
			"nom_image" => $nom_image,
			"ext" => $ext,
			"id_membre" => $_SESSION['id_membre'],
			"accept" => 'on',
		);
		$vars .= $vehicule;
		$ch=curl_init('http://api.achetervehicule.com/?controller=vehicule&action=index');
		//echo $vars;
		curl_setopt($ch,CURLOPT_POST, true);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$vars);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$ret = curl_exec($ch);
		if (!$ret) {
		    echo curl_error($ch);
		}
		else {
			return $succes = "<div class='notif success'>L'annonce a été postée avec succès</div>";
		}
		curl_close($ch);
	}
}
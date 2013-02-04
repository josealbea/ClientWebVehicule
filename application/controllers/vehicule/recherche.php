 <?php 

recherche();


function recherche() {
	$curl = curl_init($service_url);
	if (!empty($_POST)) {
		$formData = $_POST;
		$vars="recherche=".$formData['recherche']."&description=".$formData['description']."&anee=".$formData['annee']."&departement=".$formData['departement']."&vehicule1=".$formData['energie1']."&km=".$formData['km'];
		echo $vars;
		$ch=curl_init('http://localhost/projetB3/vehicule/recherche');
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

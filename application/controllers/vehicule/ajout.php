<?php 

function ajoutvehicule() {
	$service_url = "http://achetervehicule.com/webservice/?controller=vehicule&action=index";
	$curl = curl_init($service_url);
	$curl_post_data = array(
	    "user_id" => 42,
	    "emailaddress" => 'lorna@example.com',
	    );
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
	$curl_response = curl_exec($curl);
	curl_close($curl);

	$xml = new SimpleXMLElement($curl_response);
}
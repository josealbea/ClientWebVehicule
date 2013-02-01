<?php
init();

function init() {
	loadXMLFile();
}


function loadXMLFile() {
  global $vehicule;
  $dom = new DOMDocument();
  $dom->preserveWhiteSpace = false;
  $dom->Load("http://www.josealbea.com/projetB3/webservice/?controller=vehicule&action=single&id=".$_GET['id']);
  $vehicule = $dom->getElementsByTagName("vehicule");
}
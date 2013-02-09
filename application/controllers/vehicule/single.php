<?php
init();

function init() {
	loadXMLFile();
}


function loadXMLFile() {
  global $vehicule;
  $dom = new DOMDocument();
  $dom->preserveWhiteSpace = false;
  $dom->Load("http://api.achetervehicule.com/?controller=vehicule&action=single&id=".$_GET['id']);
  $vehicule = $dom->getElementsByTagName("vehicule");
}
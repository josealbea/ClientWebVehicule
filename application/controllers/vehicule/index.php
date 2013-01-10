<?php

loadXMLFile("http://achetervehicule.com/webservice/?controller=vehicule&action=index");

function loadXMLFile($url, $page) {
  global $vehicules;
    $_GET['page'] = 2;
  $dom = new DOMDocument();
  $dom->preserveWhiteSpace = false;
  $dom->Load($url);
  $vehicules=$dom->getElementsByTagName("vehicule");
  return $vehicules;
}
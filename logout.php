<?php 
session_start();
session_unset();
session_destroy();
define("SITE_ROOT", "http://www.achetervehicule.com/");
define("API_ROOT", "http://api.achetervehicule.com/");

header('location: '.SITE_ROOT);
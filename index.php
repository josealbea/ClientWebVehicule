<?php 
define("APPLICATION_PATH", dirname(__FILE__)."/application/");
define("SITE_ROOT", "http://localhost/ClientWebVehicule/");
define("SITE_NAME", "Acheter véhicule");
define("PUBLIC_ROOT", "http://localhost/ClientWebVehicule/public/");

// PDO Connect
//require APPLICATION_PATH.'configs/connect.php';

// Authentification 
require APPLICATION_PATH.'configs/auth.php';

// Dispatcher
require_once APPLICATION_PATH.'dispatcher.php';

$controller = isset($_GET['controller'])?$_GET['controller']:'vehicule';
$action = isset($_GET['action'])?$_GET['action']:'index';

include_once APPLICATION_PATH.'controllers/'.$controller.'/'.$action.'.php';

?>
	<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Achetersonvehicule.com</title>
    <link rel="stylesheet" href="<?= PUBLIC_ROOT; ?>css/style.css" />
    <link rel="stylesheet" href="<?= PUBLIC_ROOT; ?>bootstrap/css/bootstrap.css">
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
	<script type="text/javascript" src="<?= PUBLIC_ROOT; ?>bootstrap/js/bootstrap.js"></script>
    <script>
    $(function() {
        $( "#slider-range" ).slider({
            range: true,
            min: 500,
            max: 100000,
            step: 500,
            values: [ 0, 100000 ],
            slide: function( event, ui ) {
                $( "#amount" ).val( ui.values[ 0 ] + "€ - " + ui.values[ 1 ] + "€" );
            }
        });
        $( "#amount" ).val($( "#slider-range" ).slider( "values", 0 ) +
            "€ - " + $( "#slider-range" ).slider( "values", 1 ) + "€" );
    });
    </script>
</head>
<body>
	<div id="global">
		<div id="header-top">
			<div id="logo">
				<a href=""><img src="<?= PUBLIC_ROOT ?>img/logo.png" alt="Achetersonvehicule.com"></a>
			</div>
			<div id="menu-user">
			    <div class="btn-group">
			    <a href="#signup" role="button" class="btn" data-toggle="modal">
				    Connectez-vous
			    </a>
				    <ul class="dropdown-menu">
				    <!-- dropdown menu links -->
				    </ul>
			    </div>
			</div>
		</div>
		<div id="header-menu">
			<ul>
				<li><a href="<?= SITE_ROOT; ?>"><img src="<?= PUBLIC_ROOT ?>img/icons/home.png" /> Accueil</a></li>
				<li><a href="<?= SITE_ROOT; ?>vehicule/voiture"><img src="<?= PUBLIC_ROOT ?>img/icons/car.png" /> Voitures</a></li>
				<li><a href="<?= SITE_ROOT; ?>vehicule/scooter"><img src="<?= PUBLIC_ROOT ?>img/icons/scooter.png" /> Scooters</a></li>
				<li><a href="<?= SITE_ROOT; ?>vehicule/moto"><img src="<?= PUBLIC_ROOT ?>img/icons/moto.png" /> Motos</a></li>
				<li><a href="<?= SITE_ROOT; ?>contact/index"><img src="<?= PUBLIC_ROOT ?>img/icons/contact.png" /> Contact</a></li>
			</ul>
			<a href="javascript:void(0)" id="search_button" onClick="$('#form-search').slideToggle('fast')">Effectuer une recherche</a>
		</div>
		<div id="form-search" style="display:none;">
		<form action="" method="post">
			<table>
				<tr>
					<td>Votre recherche : </td>
					<td><label for="amount">Votre budget : </label> : <input type="text" id="amount" style="border: 0; background: none; color: #f6931f; font-weight: bold; width: 130px;" /></td>
					<td>Type de véhicule : </td>
					<td>Votre département : </td>
				</tr>
				<tr>
					<td><input type="text" name="recherche" placeholder="Ex : Ferarri" /></td>
					<td><div id="slider-range"></div></td>
					<td>
						<select name="type" />
							<option value="voiture">Voiture</option>
							<option value="moto">Moto</option>
							<option value="scooter">Scooter</option>
						</select>
					</td>
					<td><input type="text" name="departement" maxlength="5" placeholder="Ex : 75016" /></td>
				</tr>
				<tr>
					<td>Année</td>
					<td>Boite de vitesse</td>
					<td>Energie</td>
				</tr>
				<tr>
					<td><input type="text" name="annee" placeholder="Ex : 2010" /></td>
					<td>
						<select name="boite" />
							<option value="" selected disabled>Boite de vitesse</option>
							<option value="automatique">Automatique</option>
							<option value="manuelle">Manuelle</option>
						</select>
					</td>
					<td>
						<select name="Energie" />
							<option value="" selected disabled>Type d'énergie</option>
							<option value="essence">Essence</option>
							<option value="diesel">Diesel</option>
							<option value="gpl">GPL</option>
							<option value="electrique">Electrique</option>
						</select>
					</td>
				</tr>
			</table>
		</form>
		</div>
		<div id="content">
			<?php include_once APPLICATION_PATH.'views/'.$controller.'/'.$action.'.phtml'; ?>
		</div>
	</div>
<div id="footer">
	Copyright 2012 - Projet réalisé par Lucas Buisine, Yohann Teisseire et José Albea.
</div>
<div id="signup" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">Connexion - <?= SITE_NAME; ?></h3>
	</div>
	<div class="modal-body">
		<form action="" method="post">
			<input type="text" name="email" placeholder="Votre email" required>
			<input type="text" name="mdp" placeholder="Votre mot de passe" required>
		</form>
	</div>
	<div class="modal-footer">
		<button type="reset"class="btn" data-dismiss="modal" aria-hidden="true">Retour</button>
		<button type="submit" class="btn btn-primary">Connexion</button>
	</div>
</div>
</body>
</html>

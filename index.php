<?php 
session_start();
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
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&sensor=false"></script>
	<script type="text/javascript" src="<?= PUBLIC_ROOT; ?>bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?= PUBLIC_ROOT; ?>js/main.js"></script>
	<script type="text/javascript" src="<?= PUBLIC_ROOT; ?>js/jquery.ui.addresspicker.js"></script>
    <script type="text/javascript" src="<?= PUBLIC_ROOT; ?>js/jquery.radioSwitch.js"></script>

	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
		    $(".choix_vehicule").radioSwitch({speed:200, width: 80});
		    $(".choix_boite").radioSwitch({speed:200, width: 110});
		    $(".choix_energie").radioSwitch({speed:200, width: 60});
		});
	</script>
    <script>
    $(function() {
        $( "#slider-range" ).slider({
            range: true,
            min: 500,
            max: 100000,
            step: 500,
            values: [ 0, 100000 ],
            slide: function( event, ui ) {
                $( "#amount" ).html( ui.values[ 0 ] + "€ - " + ui.values[ 1 ] + "€" );
            }
        });
        $( "#amount" ).html($( "#slider-range" ).slider( "values", 0 ) +
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
				<?php if (empty($_SESSION['id_membre'])) { ?>
			    <div class="btn-group">
			    <a href="#signin" role="button" class="btn" data-toggle="modal">
				    Connectez-vous
			    </a>
			    <a href="#signup" role="button" class="btn" data-toggle="modal">
				    Inscription
			    </a>
				    <ul class="dropdown-menu">
				    <!-- dropdown menu links -->
				    </ul>
			    </div>
			    <?php } else { ?>
			    <div id="connect_box">Bonjour <?= $_SESSION['mail']; ?> | <a href="<?= SITE_ROOT; ?>logout.php">Déconnexion</a></div>
			    <?php } ?>
			</div>
		</div>
		<div id="header-menu">
			<ul>
				<li><a href="<?= SITE_ROOT; ?>"><img src="<?= PUBLIC_ROOT ?>img/icons/home.png" /> Accueil</a></li>
				<li><a href="<?= SITE_ROOT; ?>vehicule/voiture"><img src="<?= PUBLIC_ROOT ?>img/icons/car.png" /> Voitures</a></li>
				<li><a href="<?= SITE_ROOT; ?>vehicule/scooter"><img src="<?= PUBLIC_ROOT ?>img/icons/scooter.png" /> Scooters</a></li>
				<li><a href="<?= SITE_ROOT; ?>vehicule/moto"><img src="<?= PUBLIC_ROOT ?>img/icons/moto.png" /> Motos</a></li>
				<li><a href="<?= SITE_ROOT; ?>contact/index"><img src="<?= PUBLIC_ROOT ?>img/icons/contact.png" /> Contact</a></li>
				<li><a href="<?= SITE_ROOT; ?>vehicule/ajout"><img src="<?= PUBLIC_ROOT ?>img/annonce.png" /> Déposez une annonce</a></li>
				<li><a href="<?= SITE_ROOT; ?>user/compte"><img src="<?= PUBLIC_ROOT ?>img/annonce.png" /> Mon compte</a></li>
			</ul>
			<a href="javascript:void(0)" id="search_button" onClick="$('#form-search').slideToggle('fast')">Effectuer une recherche</a>
		</div>
		<div id="form-search" style="display:none;">
		<form action="<?= SITE_ROOT; ?>vehicule/recherche" method="get">
			<table>
				<tr>
					<td>Votre recherche : </td>
					<td><label for="amount" style="width:100%;">Votre budget : <span id="amount"></span></label></td>
					<td>Année : </td>
					<td>Votre département : </td>
				</tr>
				<tr>
					<td><input type="text" name="recherche" placeholder="Ex : Ferarri" /></td>
					<td><div id="slider-range"></div></td>
					<td>
		    			<input type="text" name="annee" placeholder="Ex : 2010" maxlength="4"/>
		    		</td>
					<td><input type="text" name="departement" id="dep" maxlength="5" placeholder="Ex : 75016" /></td>
				</tr>
				<tr>
					<td class="choix_vehicule_td">Type de véhicule :</td>
					<td>Boite de vitesse :</td>
					<td>Kilométrage :</td>
					
				</tr>
				<tr>
					<td class="choix_vehicule_td">
						<div class="choix_vehicule">
		        			<input type="radio" name="vehicule1" value="1" id="type1" class="radioSlider" style="">
	        			    <label for="type1">Voiture</label>
	        			    <input type="radio" name="vehicuke1" value="2" id="type2" class="radioSlider" style="">
	        			    <label for="type2">Moto</label>
	        			    <input type="radio" name="vehicule1" value="3" id="type3" class="radioSlider" style="">
	        			    <label for="type3">Scooter</label>
		    		    </div>
					</td>
					<td>
						<div class="choix_energie">
		        			<input type="radio" name="energie" value="Diesel" id="energie1" class="radioSlider" style="">
	        			    <label for="energie1">Diesel</label>
	        			    <input type="radio" name="energie1" value="Essence" id="energie2" class="radioSlider" style="">
	        			    <label for="energie2">Essence</label>
	        			    <input type="radio" name="energie1" value="GPL" id="energie3" class="radioSlider" style="">
	        			    <label for="energie3">GPL</label>
	        			    <input type="radio" name="energie1" value="Electrique" id="energie4" class="radioSlider" style="">
	        			    <label for="energie4">Electrique</label>
		    		    </div>
					</td>
					<td>
						<input type="text" id="km" name="km">
					</td>
					<td style="width: 180px;">
						<input type="submit" value="Rechercher" style="margin-top: 0;" />
					</td>
				</tr>
			</table>
		</form>
		</div>
		<div id="content">
			<?php if (isset($erreur) || !empty($erreur)) {
				echo $erreur;
			}
			?>
			<?php include_once APPLICATION_PATH.'views/'.$controller.'/'.$action.'.phtml'; ?>
		</div>
	</div>
<div id="footer">
	<img src="<?= PUBLIC_ROOT ?>img/fb.png">
	Copyright 2012 - Projet réalisé par Lucas Buisine, Yohann Teisseire et José Albea.
	<img src="<?= PUBLIC_ROOT ?>img/twitter.png">
</div>
<div id="signin" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">Connexion</h3>
	</div>
	<div class="modal-body">
		<?php require APPLICATION_PATH.'controllers/user/connect.php'; ?>
		<?php require APPLICATION_PATH.'views/user/connect.phtml'; ?>
	</div>
</div>

<div id="signup" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel2">Inscription </h3>
	</div>
	<div class="modal-body">
		<?php require APPLICATION_PATH.'controllers/user/ajout.php'; ?>
		<?php require APPLICATION_PATH.'views/user/ajout.phtml'; ?>
	</div>
<script type="text/javascript">
	$('#type1').click(function(){$('.choix_vehicule .radioSwitch-handle').html("Voiture");});
	$('#type2').click(function(){$('.choix_vehicule .radioSwitch-handle').html("Moto");});
	$('#type3').click(function(){$('.choix_vehicule .radioSwitch-handle').html("Scooter");});

	$('#boite1').click(function(){$('.choix_boite .radioSwitch-handle').html("Manuelle");});
	$('#boite2').click(function(){$('.choix_boite .radioSwitch-handle').html("Automatique");});

	$('#energie1').click(function(){$('.choix_energie .radioSwitch-handle').html("Diesel");});
	$('#energie2').click(function(){$('.choix_energie .radioSwitch-handle').html("Essence");});
	$('#energie3').click(function(){$('.choix_energie .radioSwitch-handle').html("GPL");});
	$('#energie4').click(function(){$('.choix_energie .radioSwitch-handle').html("Electrique");});
</script>
</body>
</html>

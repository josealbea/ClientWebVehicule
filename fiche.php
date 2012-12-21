<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Achetersonvehicule.com</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
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
				<a href=""><img src="img/logo.png" alt="Achetersonvehicule.com"></a>
			</div>
			<div id="menu-user">
			    <div class="btn-group">
    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
    Connectez-vous
    <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
    <!-- dropdown menu links -->
    </ul>
    </div>
			</div>
		</div>
		<div id="header-menu">
			<ul>
				<li><a href=""><img src="img/icons/home.png" /> Accueil</a></li>
				<li><a href=""><img src="img/icons/car.png" /> Voitures</a></li>
				<li><a href=""><img src="img/icons/scooter.png" /> Scooters</a></li>
				<li><a href=""><img src="img/icons/moto.png" /> Motos</a></li>
				<li><a href=""><img src="img/icons/contact.png" /> Contact</a></li>
			</ul>
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
					<td><input type="text" name="recherche" placeholder="Tappez votre recherche ici" /></td>
					<td><div id="slider-range"></div></td>
					<td>
						<select name="type" />
							<option value="voiture">Voiture</option>
							<option value="moto">Moto</option>
							<option value="scooter">Scooter</option>
						</select>
					</td>
					<td><input type="text" name="departement" maxlength="5" /></td>
				</tr>
				<tr>
					<td>Année</td>
					<td>Boite de vitesse</td>
					<td>Energie</td>
				</tr>
				<tr>
					<td><input type="text" name="annee" placeholder="Année du véhicule" /></td>
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
		<a href="javascript:void(0)" id="search_button" onClick="$('#form-search').slideToggle('fast')">Effectuer une recherche</a>
		<div id="content">
			<div id="gauche_fiche">
				<h2>Bmw x1 luxe sdrive 2.0d 177 ch</h2>
				<div id="infos-annonce">
					Mis en ligne le 04/11/2012 à 14:30 par <a href="#">José</a>
					<div id="photo-fiche"><img src="http://193.164.197.50/images/477/477324765164.jpg" alt=""></div>
				</div>
			</div>
			<div id="droite_fiche">
				<table id="detail">
					<tr>
						<td>Ville</td>
						<td>Paris</td>
					</tr>
					<tr>
						<td>Code postal</td>
						<td>75016</td>
					</tr>
					<tr>
						<td>Kilomètres</td>
						<td>46000</td>
					</tr>
					<tr>
						<td>Année</td>
						<td>2010</td>
					</tr>
					<tr>
						<td>Carburant</td>
						<td>Diesel</td>
					</tr>
					<tr>
						<td>Nombre de portes</td>
						<td>5</td>
					</tr>
					<tr>
						<td>Boite de vitesse</td>
						<td>Manuelle</td>
					</tr>
				</table>
				<div id="fiche_contact">
					<div id="header_contact">
						José Albea
					</div>
					<div class="ligne_contact">
						<img src="img/icons/user.png" width="20" /> <a href="">Contacter-le</a>
					</div>
					<div class="ligne_contact">
						<img src="img/icons/mail.png" width="20" /> jose.albea@gmail.com
					</div>
					<div class="ligne_contact">
						<img src="img/icons/phone.png" width="20" /> +33623345532
					</div>
				</div>
			</div>	
			<div class="clear"></div>
			<h1>Description de l'annonce</h1>
			<p>
				BMW X1 luxe sdrive 2.0d 177ch
							marron métalisé, intérieur cuir noir
							GPS 16/9 ème avec disque dur et kit connexion USB
							volant multi-fonctions avec téléphone bluetooth
							phares bi-xénon diréctionnels adaptatifs+ feux arrières leds
							aide au stationnement
							rétroviseurs électrochromes électriques rabatables
							clim auto bi-zones, régulateur de vitesse et de distance
							véhicule garanti+ assistance BMW pack mobilité+ jusqu'au 14/02/2014 
			</p>
		</div>
	</div>
<div id="footer">
	Copyright 2012 - Projet réalisé par Lucas Buisine, Yohann Teisseire et José Albea.
</div>
</body>
</html>

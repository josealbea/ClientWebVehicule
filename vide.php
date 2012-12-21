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
			
		</div>
	</div>
<div id="footer">
	Copyright 2012 - Projet réalisé par Lucas Buisine, Yohann Teisseire et José Albea.
</div>
</body>
</html>

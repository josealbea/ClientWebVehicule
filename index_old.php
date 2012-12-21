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

			<div id="gauche">
				<h1>Les dernières annonces postées</h1>
				<div class="annonce">
					<div class="photo-annonce">
						<img src="http://193.164.197.50/images/477/477324765164.jpg" alt="">
					</div>
					<div class="description-annonce">
						<h2><a href="fiche.php">Bmw x1 luxe sdrive 2.0d 177 ch</a></h2>
						<p>BMW X1 luxe sdrive 2.0d 177ch
							marron métalisé, intérieur cuir noir
							GPS 16/9 ème avec disque dur et kit connexion USB
							volant multi-fonctions avec téléphone bluetooth
							phares bi-xénon diréctionnels adaptatifs+ feux arrières leds
							aide au stationnement
							rétroviseurs électrochromes électriques rabatables
							clim auto bi-zones, régulateur de vitesse et de distance
							véhicule garanti+ assistance BMW pack mobilité+ jusqu'au 14/02/2014 
						</p>
						<div class="detail-annonce">
							<p>Paris (75) - 2010 - Diesel - 46000Km</p>
							<div class="liste-prix">
								Prix : <span>25000 €</span>
							</div>
						</div>
					</div>
				</div>
				<div class="annonce">
					<div class="photo-annonce">
						<img src="http://193.164.197.60/images/375/375326832544.jpg" alt="">
					</div>
					<div class="description-annonce">
						<h2>RENAULT CLIO 3 1.5 DCI 85CH PRIVILEGE ( 1ere MAIN)</h2>
						<p>Version : CLIO III 1.5 DCI 85
							Année : 2008
							Kilométrage : 123066 km
							Nombre de portes : 5 portes
							Puissance fiscale : 5 CV
							Boîte de vitesse : mécanique
							Énergie : Diesel
							Mise en circulation : 25/06/2008
							Couleur extérieure : NOIRE
							couleur interieur: marron claire
							Première main : oui

							Options & équipements
							Carrosserie / Extérieur
							- Peinture integrale
							- 4 Vitres electriques

							Options intérieures
							- Volant cuir reglable

							Sécurité / Antivol
							- ABS
							- Airbags frontaux
							- Anti demarrage
						</p>
						<div class="detail-annonce">
							<p>Thiais (94) - 2008 - Diesel - 123066Km</p>
							<div class="liste-prix">
								Prix : <span>6290 €</span>
							</div>
						</div>
					</div>
				</div>
				<div class="annonce">
					<div class="photo-annonce">
						<img src="http://193.164.197.50/images/229/229323303436.jpg" alt="">
					</div>
					<div class="description-annonce">
						<h2>Ford focus rs mk2 305CV</h2>
						<p>FORD FOCUS RS 305 CV 29/10/2009 Bleue Métallisé 1ère Main
							Ford Focus RS 2.5T 305CH 3p Berline

							* Marque : Ford
							* Modèle : Focus RS
							* Mise en circulation: 29 Octobre 2009
							* Énergie : Essence
							* kilométrage: 34 500 KMS
							* Boite : BVM 6
							* Puissance fiscale : 21 cv
							* couleur: blanc glacier
							* puissance din : 305 ch
							* nombres de portes : 3
							Options du vehicule :

							Pack RS :
							- Sièges avant et banquette Recaro cuir/Alcantara
							- Aide de stationnement arrière
							- Démarrage sans clef keyless go
						</p>
						<div class="detail-annonce">
							<p>Franconville (95) - 2009 - Essence - 34500Km</p>
							<div class="liste-prix">
								Prix : <span>26700 €</span>
							</div>
						</div>
					</div>
				</div>
				<div class="annonce">
					<div class="photo-annonce">
						<img src="http://193.164.197.50/images/477/477326977994.jpg" alt="">
					</div>
					<div class="description-annonce">
						<h2>Seat leon</h2>
						<p>bonjour je vend une seat leon 2 140 fap sport blanche boite 6 vitesse acheter neuve le 18/01/2011.
							elle comptabilise 31000 km la révision viens d'être faite les pneu avant changer il y a 5000 km.
							c'est une première main

							extérieur:

							vitres électriques, rétroviseur électrique et dégivrant
							rétroviseur rabatable électriquement
							jantes alu, feux LED, radar de recule, détecteur de pluie, allumage auto des feux
						</p>
						<div class="detail-annonce">
							<p>Buchelay (78) - 2011 - Diesel - 31000Km</p>
							<div class="liste-prix">
								Prix : <span>17000 €</span>
							</div>
						</div>
					</div>
				</div>
				<div class="annonce">
					<div class="photo-annonce">
						<img src="http://193.164.197.60/images/479/479328092378.jpg" alt="">
					</div>
					<div class="description-annonce">
						<h2>MERCEDES - CLASSE C 220 CDI - Avangarde</h2>
						<p>- Non Fumeur
							- Boite de vitesse Automatique 5 rapports
							- 10 CV fiscaux (170 CV)
							- Sièges Cuir/Tissu Artico
							- Phares Xénon
							- GPS Grand écran (Command car)
							- Bluetooth Téléphonie confort
							- Aide au stationnement (avant et arrière)
							- Eclairage automatique
							- Feu de virages
							- Essuie-glace capteur de pluie
							- Régulateur de vitesse Tempomat – Speedtronic
							- Rétroviseurs anti-éblouissants
							- Rétroviseurs extérieurs rabattables électriquement
							- Climatisation bi-zone automatique
						</p>
						<div class="detail-annonce">
							<p>Suresnes (92) - 2007 - Diesel - 63000Km</p>
							<div class="liste-prix">
								Prix : <span>17500 €</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="droite">
				<h1>Les plus vus</h1>
				<div class="annonce">
					<div class="photo-annonce">
						<img src="http://193.164.197.60/images/479/479328092378.jpg" alt="">
					</div>
					<div class="description-annonce">
						<h3>MERCEDES - CLASSE C 220 CDI - Avangarde</h3>
						<div class="detail-annonce">
							<div class="liste-prix">
								Prix : <span>17500 €</span>
							</div>
						</div>
					</div>
				</div>
				<div class="annonce">
					<div class="photo-annonce">
						<img src="http://193.164.197.50/images/477/477326977994.jpg" alt="">
					</div>
					<div class="description-annonce">
						<h3>Seat leon</h3>
						<div class="detail-annonce">
							<div class="liste-prix">
								Prix : <span>17000 €</span>
							</div>
						</div>
					</div>
				</div>
				<div class="annonce">
					<div class="photo-annonce">
						<img src="http://193.164.197.60/images/375/375326832544.jpg" alt="">
					</div>
					<div class="description-annonce">
						<h3>RENAULT CLIO 3 1.5 DCI 85CH PRIVILEGE ( 1ere MAIN)</h3>
						<div class="detail-annonce">
							<div class="liste-prix">
								Prix : <span>6290 €</span>
							</div>
						</div>
					</div>
				</div>
				<h1>Une question ?</h1>
				<div id="support">
					<h2>Nos conseillers sont à votre disposition :</h2>
					<div id="tel-support">01 43 43 50 30</div>
					de 9h à 18h
				</div>
			</div>
		</div>
	</div>
<div id="footer">
	Copyright 2012 - Projet réalisé par Lucas Buisine, Yohann Teisseire et José Albea.
</div>
</body>
</html>

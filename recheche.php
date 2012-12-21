<?php        
header("Content-type: text/html; charset=utf-8");
?>
<form action="" method="GET">
	<label for="titre">Film</label>
	<input type="text" id="titre" name="titre"><br />
	<label for="genre">Genre</label>
	<input type="text" id="genre" name="genre"><br />
	<input type="submit" name="">
</form>
<?php

$dom = new DomDocument();

$dom->load('http://localhost/ws-artiste/ws/films.php?'.$_SERVER["QUERY_STRING"]);

$films = $dom->getElementsByTagName('film');

echo "<table width='500'>";
echo "<tr>";
echo "<td>#</td>";
echo "<td>Titre</td>";
echo "<td>Genre</td>";
echo "<td>Réalisateur</td>";
echo "</tr>";
foreach($films as $film)
{
	$real = $film->getElementsByTagName('realisateur')->item(0);
	echo '<tr>';
	echo '<td>'.$film->getAttribute("id").'</td>';
	echo '<td>'.$film->getAttribute("titre").'</td>';
	echo '<td>'.$film->getAttribute("genre").'</td>';
	echo '<td>'.$real->getAttribute("prenom").' ';
	echo $real->getAttribute("nom").'</td>';
	echo '</tr>';
}
echo "</table>";
?>
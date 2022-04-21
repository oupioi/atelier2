<?php
 	session_start();		

include_once("config.php");

$salle = mysqli_query($mysqli, "SELECT * FROM salle "); 
?>

<html>
<head>	
	<title>Page d'accueil</title>
</head>
<?php include 'header.html' ?>
<body>
	<table width='80%' border=0>
	<tr bgcolor='#CCCCCC'>
		<td>Numéro de salle</td>
		<td>Nom de la salle</td>
	</tr>
	<?php 

	while($res = mysqli_fetch_array($salle)) { 		
		echo "<tr>";
		echo "<td>".$res['idSalle']."</td>";
		echo "<td>".$res['libelleSalle']."</td>";
	}
	?>
	</table>
	<form action="listeReservation.php" method="post" name="form2">
		<!--<p>Sélectionner la salle afin de voir son planning: </p>
		<input type="number" name="salle" min="0" max="8">-->
		<select name="salle" id="salle">
			<option value=0>0</option>
		    <option value=1>1</option>
		    <option value=2>2</option>
		<td><input type="submit" name="Submit" value="Visionner planning"></td>
	</form>
	<form action="supprimer.php" method="post" name="form3">
		<td><input type="submit" name="Submit" value="Purger les données de plus de 2 jours"></td>
	</form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<?php include 'header.html' ?>
<body>
	<p>Insertion d'un calendrier</p>
	<form action="resultat.php" method="post" name="form1">
		<iframe name="date du jour" id="date-du-jour" style="width:105px;height:75px;" src="https://www.mathieuweb.fr/calendrier/date-jour-bleu.html" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
		<label for="start">Start date:</label>
		<input type="date" id="dateReservation" name="dateReservation"
		       min="2021-12-09" required>

		<select name="heure" id="heure">
		    <option value="">--Choisir une heure de réservation--</option>
		    <option value="8H-9H">8H-9H</option>
		    <option value="9H-10H">9H-10H</option>
		    <option value="10H-11H">10H-11H</option>
		    <option value="11H-12H">11H-12H</option>
		    <option value="12H-13H">12H-13H</option>
		    <option value="13H-14H">13H-14H</option>
		    <option value="14H-15H">14H-15H</option>
		    <option value="15H-16H">15H-16H</option>
		    <option value="16H-17H">16H-17H</option>
		    <option value="17H-18H">17H-18H</option>
		    <option value="18H-19H">18H-19H</option>
		    <option value="19H-20H">19H-20H</option>
		</select>

		<select name="salle" id="salle">
			<option value="0">Grande salle</option>
			<option value="1">Petite salle</option>
			<option value="2">Moyenne salle</option>
			<option value="3">Salle des fêtes</option>
			<option value="4">Salle des sports</option>
		</select>
		<td><input type="submit" name="Submit" value="Ajouter"></td>
	</form>
</body>
</html>

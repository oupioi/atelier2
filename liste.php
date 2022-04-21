<?php
 	session_start();		
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$salle = mysqli_query($mysqli, "SELECT * FROM salle "); // using mysqli_query instead
$reservation = mysqli_query($mysqli, "SELECT * FROM reservation ");
?>

<html>
<head>	
	<title>Page d'accueil</title>
</head>

<body>
	<table width='80%' border=0>
	<tr bgcolor='#CCCCCC'>
		<td>Numéro de la salle</td>
		<td>Libelle de la salle</td>
	</tr>
	
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($salle)) { 		
		echo "<tr>";
		echo "<td>".$res['idSalle']."</td>";
		echo "<td>".$res['libelleSalle']."</td>";
	}
	?>
	</table>
	<table width='80%' border=0>
	<tr bgcolor='#CCCCCC'>
		<td>Date Reservation</td>
		<td>Heure Reservation</td>
		<td>Salle choisie</td>
	</tr>
	
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($reservation)) { 		
		echo "<tr>";
		echo "<td>".$res['dateReservation']."</td>";
		echo "<td>".$res['heureReservation']."</td>";
		echo "<td>".$res['salleChoisie']."</td>";	
	
	}
	?>
	</table>
</body>
</html>
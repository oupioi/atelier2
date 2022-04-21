<?php include 'header.html' ?>
<?php 
session_start();		
//including the database connection file
include_once("config.php");
$numSalle = $_POST['salle'];
echo "Vous avez choisi de voir le planning de la salle : ",$numSalle;

$db = new PDO('mysql:host=localhost;dbname=atelier_professionnel2','root','root');
$reservation ="SELECT * FROM reservation WHERE salleChoisie  = '$numSalle' AND dateReservation< CURDATE()+7 ";
	$result  = $db->prepare($reservation);
	$result->execute();
?>

<body>
	<table width='80%' border=0>
	<tr bgcolor='#CCCCCC'>
		<td>Date Reservation</td>
		<td>Heure reservation</td>
		<td>Salle choisie</td>
	</tr>
	<?php 
		while($res = $result->fetch()) { 		
		echo "<tr>";
		echo "<td>".$res['dateReservation']."</td>";
		echo "<td>".$res['heureReservation']."</td>";
		echo "<td>".$res['salleChoisie']."</td>";			
	}
	?>
	</table>

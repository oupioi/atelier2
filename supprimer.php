<?php
//including the database connection file
include("config.php");

//Permet de savoir la date
$date = date("Y-m-d");
$newDate = date('Y-m-d', strtotime($date.' - 2 DAY'));
$permetDate = date($newDate);
echo "La date d'il y a 2 jours est : ",$newDate;
echo "<br>La date d'aujourd'hui est le ",$date;

//supprimer les données antérieures à 2 jours
$result = mysqli_query($mysqli, "DELETE FROM reservation WHERE dateReservation < CURDATE()-2");
?>
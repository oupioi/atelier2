<?php 
$databaseHost = 'localhost';
$databaseName = 'atelier_professionnel2';
$databaseUsername = 'root';
$databasePassword = 'root';
$dsn = "mysql:host=$databaseHost;dbname=$databaseName";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];    

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 


$date = mysqli_real_escape_string($mysqli, $_POST['dateReservation']);
$heure = mysqli_real_escape_string($mysqli, $_POST['heure']);
$salle = mysqli_real_escape_string($mysqli, $_POST['salle']);



try {
    $pdo = new PDO($dsn, $databaseUsername, $databasePassword, $options);
} 
catch (\PDOException $e) {
    print"ERREUR:".$e;
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
$stmt = $pdo->query("SELECT * FROM reservation WHERE dateReservation  = '$date' AND heureReservation='$heure' AND salleChoisie='$salle'");
$row= $stmt->fetch();

        if ($row) {
//ici on vérifie si le mot de passe correspond à celui qui est dans la BDD  
                echo "La réservation n'est pas possible ! Le créneau a déja été réserver";
                
            }
        else{
            echo "La date choisie est  : ",$date;
            echo "<br>L'heure choisie du RDV est : ",$heure;
            echo "<br>La salle choisie est la salle : ",$salle;
            
            $result = mysqli_query($mysqli,"INSERT INTO reservation(dateReservation,heureReservation,salleChoisie)VALUES('$date','$heure','$salle')");
            echo "<br>Votre rendez vous est bien réserver";
        }
    

 ?>


 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title></title>
 </head>

 </body>
 </html>
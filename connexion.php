<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page de connexion</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1 id='inter'>Connexion</h1>
	<div id="frm">
		<form action="process.php" method="POST">
			<p>
				<label>Nom d'utilisateur :</label>
				<input type="text" id="user" name="user">
			</p>
			<p>
				<label>Mot de passe :</label>
				<input type="password" id="pass" name="pass">
			</p>
			<p>
				<input type="submit" id="btn" name="submit">
			</p>
		</form>
	</div>


</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Authentification</title>
</head>
<body>
	<?php
	   $f = fopen("log.txt","r")
	   $pass = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
	   $user = $_POST['user'];
	   $isCorrect = password_verify($pass,)
	   fclose($f);
	?>
</body>
</html>
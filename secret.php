<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Code d'accès</title>
</head>
<body>
	<?php
	   $file = fopen("log.txt","a+");
       $txt = $_POST;
       fwrite($file, $txt['user']." ".password_hash($txt['mdp'], PASSWORD_DEFAULT)." ".$txt['entreprise']." ".$txt['mail']." ".$txt['tel']." ");
       fwrite($file, "\n");
	   fclose($file);
	   session_start();
	   $_SESSION['user'] = $txt['user'];
	   header("refresh:2;url=Library.php");
	?>
	<p>Inscription réussi !!</p>
</body>
</html>
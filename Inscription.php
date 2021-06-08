<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
</head>
<body>
	<form action="secret.php" method="post">
	<label for="fname">Nom :</label><br>
         <input type="text" name="user"><br>
         <label for="pname">Mot de passe :</label><br>
         <input type="password" name="mdp" /><br>
         <label for="cname">Nom de l'entreprise :</label><br>
         <input type="text" name="entreprise"><br>
         <label for="mname">Adresse mail :</label><br>
         <input type="text" name="mail"><br>
         <label for="tname">Numero de telephone :</label><br>
         <input type="text" name="tel"><br><br>
         <input type="submit" name="valider" />
         <input type="reset">
    </form>
</body>
</html>
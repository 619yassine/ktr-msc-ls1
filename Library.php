<!DOCTYPE html>
<html>
<head>
	<title>Library</title>
</head>
<body>
	<p><b><center>Ici la librairie</center></b></p><br>
	<?php
	session_start();
	$f = fopen("log.txt","r");
    $key = $_SESSION['user'];
      $fc=file("log.txt");

      foreach($fc as $line)
      {
         if (strstr($line,$key))
              $b = array();
              $b = fgets($f);
      }
      fclose($f);
      echo "Vos information sont : \n";
      echo $b;
	?>
</body>
</html>
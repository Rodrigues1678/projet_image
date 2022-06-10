<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Images</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <?php
	require('class/image.php');
	require('config.php');
	?>

	<h1> Rangement d'images </h1>

	<?php
	$dossier_vrac = new Folder();
	$dossier_vrac->getFiles($dir_vrac);

	if($dossier_vrac->isEmpty()) {
		echo "<h1>Le dossier vrac est vide : aucune image à trier.</h1>";
	} else {
		foreach($dossier_vrac->$liste_fichiers as $image) {
			// On crée le dossier correspondant au nom de serie de notre image.
			$dir = $dir_tri.'/'.$image->$nom_serie;
			if(!is_dir($dir)){mkdir($dir, 0777);}
			// On déplace le fichier
			rename($dir_vrac.'/'.$image->$nom_complet,$dir.'/'.$image->$nom_serie);
			echo "<hr>Nous avons déplacé ".$dir_vrac.'/'.$image->$nom_complet." vers ".$dir.'/'.$image->$nom_serie.".<br />";
		}
	}
?>
  </body>

</html>

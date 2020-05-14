<div id="texte">
<?php
if (!empty($_GET["page"])){
	$page=$_GET["page"];}
	else
	{$page=0;
	}
switch ($page) {
//
// Personnes
//

case 0:
	// inclure ici la page accueil photo
	include_once('accueil.php');
	break;
	// page insertion nouveau client
case 1:
	// inclure ici les pages de la dernière version
	include_once('compte.php');
	break;
case 2:
	// inclure ici la page affichage article
	include_once('messagerie.php');
	break;
case 3:
	// inclure ici la page affichage article
	include_once('listerintervention.php');
	break;
case 4:
	// inclure ici la page affichage article
	include_once('ventilation.php');
	break;
case 5:
	// inclure ici la page affichage article
	include_once('alimentation.php');
	break;
case 6:
	// inclure ici la page affichage article
	include_once('eau.php');
	break;
case 7:
	// inclure ici la page affichage article
	include_once('lumiere.php');
	break;
case 8:
	// inclure ici la page affichage article
	include_once('remplirpanier.php');
	break;
case 9:
	// inclure ici la page affichage article
	include_once('exit.php');
	break;
case 10:
	// inclure ici la page affichage article
	include_once('inscription.php');
	break;
default : 	include_once('accueil.php');
}
	
?>
</div>
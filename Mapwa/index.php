<?php
session_start();
require_once("pages/functions.php");
require_once("pages/autoLoad.php");
require_once("pages/config.php");
$db = new Mypdo();
$inscription = new InscriptionManager($db); 
$paniermanager = new PanierManager($db); 

if (isset($_SESSION['prenom'])){
	require_once("pages/header2.php");
require_once("pages/texte.php");
require_once("pages/footer.php");
}else{
require_once("pages/header.php");
require_once("pages/texte.php");
require_once("pages/footer.php");
}


?>


 




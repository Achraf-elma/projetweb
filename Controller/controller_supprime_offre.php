<?php


require_once("Model/offre.php");
require_once("Model/membre.php");
$idprofil= recupIdMembre($pseudo);
  supprimeOffreDuMembre($idprofil);


?>

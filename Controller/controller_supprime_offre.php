<?php


require_once("Model/offre.php");
require_once("Model/membre.php");
$idprofil= recupIdMembre($pseudo);
  supprimeOffreDuMembre($idprofil);
 header("Location: ../validation.php?message=Vous_avez_bien_supprimé_cette_offre");

?>

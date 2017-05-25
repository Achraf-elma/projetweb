<?php


require_once("Model/offre.php");
require_once("Model/membre.php");
echo "yeay";
$idprofil= recupIdMembre($pseudo);
echo "yeay2";
  supprimeOffreDuMembre($idprofil);
  echo "yeay3";
 header("Location: ../validation.php?message=Vous_avez_bien_supprimé_cette_offre");

?>

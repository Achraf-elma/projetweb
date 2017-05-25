<?php


    require_once("Model/membre.php");

    require_once("Model/offres.php");

    $idprofil= recupIdMembre($pseudo);
    supprimeOffreDuMembre($idprofil);
    header("Location: ../validation.php?message=Vous_avez_bien_supprimé_cette_offre");

?>

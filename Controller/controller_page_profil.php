<?php


    require_once("Model/membre.php");


    $idprofil =$id;
    $membre=dataMembre($idprofil);

  	require_once("View/profil.php");



?>

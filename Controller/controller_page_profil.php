<?php


require_once("Model/membre.php");

  $idprofil =  $_POST[id];
  $answer=dataMembre($idprofil);
	require_once("View/profil.php");

?>

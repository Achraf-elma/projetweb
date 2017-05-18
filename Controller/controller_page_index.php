<?php

  echo "on y est";
  require_once("Model/pdo.php");
  echo "on a";
  $bd = connexion();

    $qry = $bd->prepare("select pseudo from membre;");
    $qry->execute();

  $noms = $qry->fetchAll();
  print_r($noms);
?>

<?php


require_once("Model/pdo.php");
$bd = connexion();
  if (!empty($bd)){
	require_once("View/index.php");
}
?>
